<?php
class Correios
{

    /**
     * SEDEX 40010
     * SEDEX 10 40215
     * PAC 41106
     */
	public 
	$frete = array(), 
	$empresa = '', 
	$senha = '', 
	$servico1, 
	$servico2, 
	$cepOrigem, 
	$cepDestino, 
	$peso, 
	$formato = '1',
	$comprimento, 
	$altura, 
	$largura, 
	$diametro, 
	$maoPropria = 'n',
	$valordeclarado = '0', 
	$avisoRecebimento = 'n',
	$error,
    $retorno = 'xml';

    private $url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';
    private $sedex = '04014';
    private $sedex10 = '04790';
    private $pac = '04510';
    /**
     * @param string cep destino
     * @param  float peso
     */
    public function __construct($destino, $peso, $largura, $altura, $comprimento)
    {

        $this->servico1 = $this->pac; // PAC
        $this->servico2 = $this->sedex; // sedex
        $this->servico3 = $this->sedex10; // sedex 10

        $this->cepOrigem = Config::SITE_CEP;

        $this->cepDestino = $destino;

        //peso em kilogramas
        $this->peso = $peso;
        $this->comprimento = $comprimento; //em cm
        $this->altura = $altura; //em cm
        $this->largura = $largura; //em cm
        $this->diametro = '0'; //em cm

    }

    /**
     * faz a verificação e calculo do frete
     **/
    public function Calcular()
    {
                
        $cURL = curl_init(sprintf(
			$this->url . '?nCdEmpresa=%s&sDsSenha=%s&sCepOrigem=%s&sCepDestino=%s&nVlPeso=%s&nCdFormato=%s&nVlComprimento=%s&nVlAltura=%s&nVlLargura=%s&sCdMaoPropria=%s&nVlValorDeclarado=%s&sCdAvisoRecebimento=%s&nCdServico=%s&nVlDiametro=%s&StrRetorno=%s&nIndicaCalculo=3',
			$this->empresa,
			$this->senha,
            $this->cepOrigem,
            $this->cepDestino,
            $this->peso,
            $this->formato,
            $this->comprimento,
            $this->altura,
            $this->largura,
            $this->maoPropria,
            $this->valordeclarado,
            $this->avisoRecebimento,
			$this->servico1,
            $this->diametro,
            $this->retorno
        ));

        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

        $string = curl_exec($cURL);
		curl_close($cURL);
        $xml = simplexml_load_string($string);
		
		if ($xml->Erro != ''):			
			$this->error = array($xml->cServico->Erro, $xml->cServico->MsgErro);
            return false;
		else:
			
            $servico1 = $xml->cServico;

            $cURL = curl_init(sprintf(
				$this->url . '?nCdEmpresa=%s&sDsSenha=%s&sCepOrigem=%s&sCepDestino=%s&nVlPeso=%s&nCdFormato=%s&nVlComprimento=%s&nVlAltura=%s&nVlLargura=%s&sCdMaoPropria=%s&nVlValorDeclarado=%s&sCdAvisoRecebimento=%s&nCdServico=%s&nVlDiametro=%s&StrRetorno=%s&nIndicaCalculo=3',
				$this->empresa,
				$this->senha,
				$this->cepOrigem,
				$this->cepDestino,
				$this->peso,
				$this->formato,
				$this->comprimento,
				$this->altura,
				$this->largura,
				$this->maoPropria,
				$this->valordeclarado,
				$this->avisoRecebimento,
				$this->servico2,
				$this->diametro,
				$this->retorno
            ));

            curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

            $string = curl_exec($cURL);

            curl_close($cURL);
            $xml = simplexml_load_string($string);

            $servico2 = $xml->cServico;

            return [
                'pac' => [
                    'valor' => $servico1->Valor,
                    'tipo' => 'PAC',
                    'prazo' => $servico1->PrazoEntrega,
                    'codigo_erro' => $servico1->Erro,
                    'mensagem_erro' => $servico1->MsgErro,
                ],
                'sedex' => [
                    'valor' => $servico2->Valor,
                    'tipo' => 'SEDEX',
                    'prazo' => $servico2->PrazoEntrega,
					'codigo_erro' => $servico1->Erro,
                    'mensagem_erro' => $servico1->MsgErro,					
                ],
            ];

        endif;
    }

    /*
     * mostrando erros
     */
    public function error()
    {
        if (is_null($this->error)) {
            return false;
        } else {
            return $this->error;
        }
    }
}
