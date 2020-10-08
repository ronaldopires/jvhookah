<?php

class PagamentoPS extends Conexao
{

    private
        /**** @var string: armazena objeto da transação */
        $transaction,
            /**** @var string:forma de pagamento */
        $forma_pag,
        /**** @var string: trata o status do pagamento */
        $status,
        /**** @var string URL do wb service para iniciar um checkout*/
        $psWS,
        /****$var string  token do PS***/
        $token,
        /**** para armazenar retorno temporário *****/
        $xml;
                
    public 
        /**** @var string URL para fechar o pedido */
        $psURL,
        /**** @var string URL do javascript do lighbox do pagseguro*/
        $psURL_Script,
        //teste
        $psWSTransparente,
        $ScriptTransparente,
        /**** @var string: URL das notificações  */
        $psURL_Notificacao,
        /**** @var string: retorno do COD checkout  */
        $psCod,
        /***array com davdos da transação ****/
        $info = array();
        
        /**
         * Chama o contrutor pai e seta cada URL para o ambiente escolhido 
         */
    public function __construct()
    {
        parent::__construct();

        /** verifico se produção  ou sandbox * */
        switch (Config::PS_AMBIENTE) {

            // ambiente de testes
            case 'sandbox':
                $this->psWS = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
            $this->psWSTransparente = 'https://ws.sandbox.pagseguro.uol.com.br/v2/sessions';
                $this->psURL = 'https://sandbox.pagseguro.uol.com.br/v2/checkout/payment.html';
                $this->psURL_Script = 'https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js';
            $this->ScriptTransparente = 'https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js';
                $this->psURL_Notificacao = 'https://ws.sandbox.pagseguro.uol.com.br/v2/transactions/';
                $this->token = Config::PS_TOKEN_SB;
                break;
            // ambiente de produção real
            case 'production':
                $this->psWS = 'https://ws.pagseguro.uol.com.br/v2/checkout';
            $this->psWSTransparente = 'https://ws.pagseguro.uol.com.br/v2/sessions';
                $this->psURL = 'https://pagseguro.uol.com.br/v2/checkout/payment.html';
                $this->psURL_Script = 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js';
            $this->ScriptTransparente = 'https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js';
                $this->psURL_Notificacao = 'https://ws.pagseguro.uol.com.br/v2/transactions/';
                $this->token = Config::PS_TOKEN;
                break;
        }

    }

    /** requisicao de pagamento  * @param array $pedido  * @param array $produtos   */
    public function pagamento($pedido = array(), $produtos = array())
    {
        //configurações
        $dados['email'] = Config::PS_EMAIL;
        $dados['token'] = $this->token;
        $dados['currency'] = 'BRL';
        // Desconto no boleto
        $dados['paymentMethodGroup1'] = 'BOLETO';
        $dados['paymentMethodConfigKey1_1'] = 'DISCOUNT_PERCENT';
        $dados['paymentMethodConfigValue1_1'] = '5.00';

        //Dados do pedido
        $dados['reference'] = $pedido['ref']; // referencia pedido
        $dados['redirectURL'] = Rotas::pagPedidoConcluido();
        $dados['notificationURL'] = Rotas::pagPedidoConcluido();
        // $dados['senderName'] = $cliente['cli_nome'] . ' ' . $cliente['cli_sobrenome'];
        // $dados['senderAreaCode'] = $cliente['cli_ddd_celular'];
        // $dados['senderPhone'] = $cliente['cli_celular'];
        // $dados['senderEmail'] = $cliente['cli_email'];
        // $dados['senderCPF'] = $cliente['cli_cpf'];
        // $dados['shippingAddressStreet'] = $cliente['cli_endereco'];
        // $dados['shippingAddressNumber'] = $cliente['cli_numero'];
        // $dados['shippingAddressComplement'] = '';
        // $dados['shippingAddressDistrict'] = $cliente['cli_bairro'];
        $dados['shippingAddressPostalCode'] = $pedido['cep_cliente'];
        // $dados['shippingAddressCity'] = $cliente['cli_cidade'];
        // $dados['shippingAddressState'] = strtoupper($cliente['cli_uf']);
        $dados['shippingType'] = '3'; // sem especificar
        $dados['shippingAddressCountry'] = 'BRA';
        $dados['shippingCost'] = $pedido['frete_valor']; // valor do frete

        // varrendo o array de produtos para montar os itens
        $i = 1;
        foreach ($produtos as $item) {
            // Itens
            $dados['itemId' . $i] = $item['pro_id'];
            $dados['itemDescription' . $i] = $item['pro_nome'];
            $dados['itemAmount' . $i] = $item['pro_valor_us'];
            $dados['itemQuantity' . $i] = $item['pro_qtd'];
            // $dados['itemWeight' . $i] = $item['pro_peso'];

            $i++;
        }
        // Monta a URL para enviar ao WS
        $dados = http_build_query($dados);

        $curl = curl_init($this->psWS);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
        $xml = curl_exec($curl);

        // verifico se foi autorizado, erros de TOKEN, AMBIENTE ou EMAIL podem dar erros aqui
        if ($xml == 'Unauthorized') {
            $msg = 'Dados inválidos - Unauthorized' . var_dump($xml);
            $this->enviarEmail($msg);
            // var_dump($xml);
            exit();
        }

        curl_close($curl);
        // pego o retorno do WS e jogo em uma var  chamada XML
        $xml_obj = simplexml_load_string($xml);
        if (count($xml_obj->error) > 0) {
            
            // verificando alguns erros e tratando
            switch ($xml_obj->error->code) {
                case 11157:
                    echo 'CPF está Incorreto';
                    break;
                case 11010:
                    echo 'Email está Incorreto';
                    break;
            }

            var_dump($xml_obj->error->message);
            exit();

        } else {
            $this->psCod = $xml_obj->code;
            /* echo '<pre>';
            print_r($xml_obj->body->div->div->div->dl);
            echo '</pre>'; */

        }

    }

    // PARA BUSCAR transação por cod referencia
    public function buscarTransacaoREF($ref)
    {
        $email = Config::PS_EMAIL;
        $token = $this->token;

        $url = $this->psURL_Notificacao . '?email=' . $email . '&token=' . $token . '&reference=' . $ref;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $retorno = curl_exec($curl);

        // verifica se foi autorizado ou não a requisição
        if ($retorno == 'Unauthorized') {
            $msg = 'Dados inválidos - Unauthorized' . var_dump($retorno);
            $this->enviarEmail($msg);
            // var_dump($xml);
            exit();
        }

        curl_close($curl);
        // Tratando o XML recebido
        $this->xml = simplexml_load_string($retorno);

        // LAÇO para pegar informações de somente 1 pedido [0]
        foreach ($this->xml->transactions->transaction as $transaction) {

            $this->data = $transaction->date;
            $this->valor_total = $transaction->grossAmount;
            
            // tratando o status do pagamento que vem numérico
            switch ($transaction->status) {
                case 1:
                    $this->status = "Aguardando pagamento";
                    break;
                case 2:
                    $this->status = "Em análise";
                    break;
                case 3:
                    $this->status = "Pago";
                    break;
                case 4:
                    $this->status = "Disponível";
                    break;
                case 5:
                    $this->status = "Em disputa";
                    break;
                case 6:
                    $this->status = "Devolvido";
                    break;
                case 7:
                    $this->status = "Cancelado";
                    break;
            }

            // tratando o tipo de pagamento que vem numérico
            switch ($transaction->paymentMethod->type) {

                case 1:$this->forma_pag = "Cartao";
                    break;
                case 2:$this->forma_pag = "Boleto";
                    break;
                case 3:$this->forma_pag = "TEF";
                    break;
                case 4:$this->forma_pag = "Saldo PagSeguro";
                    break;
                case 5:$this->forma_pag = "Oi Paggo";
                    break;
            }

            //passo algumas variaveis que eu precisar
            $data = $this->data;
            $status = $this->status;
            $codigo = $transaction->code;
            $referencia = $transaction->reference;
            $forma_pag = $this->forma_pag;
            $valor_total = $this->valor_total;

            // passo balores  para meu array INFO
            $this->info = array(
                'data' => $data,
                'status' => $status,
                'codigo' => $codigo,
                'referencia' => $referencia,
                'forma_pag' => $forma_pag,
                'valor_total' => $valor_total,
            );

            // fim do foreach que varre os dados já que pode retornar mais de 1 pedido
        }

        // atualiza pedido status
        $this->pedidoUpdate($codigo, $status, $forma_pag, $referencia, $valor_total);
        // envia email
        // $this->enviarEmail($msg);

    }


    //Teste
    public function transparente()
    {
        $email = Config::PS_EMAIL;
        $token = $this->token;

        $url = $this->psWSTransparente . '?email=' . $email . '&token=' . $token;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded; charset=UTF-8'));
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $retorno = curl_exec($curl);
        curl_close($curl);

        $xml = simplexml_load_string($retorno);
        echo json_encode($xml);
    }

    // Processa o retorno de informações do pagseguro
    public function notificacao()
    {
        // VERIFICA SE EXISTE  UMA NOTIFICAÇÃO
        if (isset($_POST['notificationType']) && $_POST['notificationType'] == 'transaction') {

            // credenciais pagseguro pegando da classe Config
            $email = Config::PS_EMAIL;
            $token = $this->token;
            // chamo a URL da notificação
            $url = $this->psURL_Notificacao . 'notifications/' . $_POST['notificationCode'] . '?email=' . $email . '&token=' . $token;

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $retorno = curl_exec($curl);
            curl_close($curl);

            // verifica se não foi autorizado a requisição e para tudo
            if ($retorno == 'Unauthorized') {
                // caso não for autorizado posso mostrar algo aqui
                $msg = 'Dados inválidos - Unauthorized' . var_dump($retorno);
                $this->enviarEmail($msg);
                // var_dump($xml);
                exit();
            } else {

                // pegando os dados retornados
                $this->xml = simplexml_load_string($retorno);

                // tratando o status do pagamento
                switch ($this->xml->status) {
                    case 1:
                        $this->status = "Aguardando pagamento";
                        break;
                    case 2:
                        $this->status = "Em análise";
                        break;
                    case 3:
                        $this->status = "Pago";
                        break;
                    case 4:
                        $this->status = "Disponível";
                        break;
                    case 5:
                        $this->status = "Em disputa";
                        break;
                    case 6:
                        $this->status = "Devolvido";
                        break;
                    case 7:
                        $this->status = "Cancelado";
                        break;

                }

                // tratando o tipo de pagamento
                switch ($this->xml->paymentMethod->type) {

                    case 1:
                        $this->forma_pag = "Cartao";
                        break;
                    case 2:
                        $this->forma_pag = "Boleto";
                        break;
                    case 3:
                        $this->forma_pag = "TEF";
                        break;
                    case 4:
                        $this->forma_pag = "Saldo PagSeguro";
                        break;
                    case 5:
                        $this->forma_pag = "Oi Paggo";
                        break;

                }

                //passo algumas variaveis que eu precisar
                $status = $this->status;
                $codigo = $this->xml->code;
                $referencia = $this->xml->reference;
                $forma_pag = $this->forma_pag;
                $valor_total = $this->xml->grossAmount;

                // atualiza pedido status
                $this->pedidoUpdate($codigo, $status, $forma_pag, $referencia, $valor_total);

                // envia email
                // $this->enviarEmail($msg);

            } // fim do if Unauthorized

            // fim do ISSET POST notificationType
        }
    }

    // Grava e atualiza o status da tabela do pedido
    private function pedidoUpdate($codigo, $status, $forma_pag, $referencia, $valor_total)
    {

        // montando a SQL
        $query = "UPDATE {$this->prefix}pedidos SET ped_pag_codigo = :cod, ped_pag_tipo = 'PAGSEGURO', ped_pag_status = :ped_status , ped_pag_forma = :forma_pag, ped_valor_total = :valor_total  WHERE ped_ref = :ref";

        // passando parâmetros
        $params = array(
            ':cod' => $codigo,
            ':ped_status' => $status,
            ':forma_pag' => $forma_pag,
            ':valor_total' => $valor_total,
            ':ref' => $referencia,
        );

        //var_dump($params);

        // chamo o método da classe conexão que executa a SQL
        $this->executeSQL($query, $params);
    }

    // envia  email caso pagamento seja efetuado
    private function enviarEmail($msg)
    {
        // setando conteudo do email para avisos
        echo 'Envio email';
    }

}
