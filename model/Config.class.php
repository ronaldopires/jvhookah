<?php

class Config
{
    //INFORMAÇÕES BÁSICAS DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "jvhookah/";
    const SITE_NOME = "Jv Hookah";
    const SITE_EMAIL_ADM = "ronaldobondezica@gmail.com";
    const SITE_CEP = '08280090';
    const BD_LIMIT_PAG = 12;
    const LIMIT_SESSAO = 900; //900 = 15m

    //INFORMAÇÕES DO BANCO DE DADOS
    const BD_HOST = "localhost";
    const BD_USER = "root";
    const BD_SENHA = "";
    const BD_BANCO = "hookah";
    const BD_PREFIX = "jv_";

    //INFORMAÇÕES PARA PHPMAILER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "ronaldobondezica@gmail.com";
    const EMAIL_NOME = "Contato Loja Virtual Jv Hookah";
    const EMAIL_SENHA = "ronaldinhog";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "ronaldo.carvalho@hotmail.com";

    //CONSTANTES PAG SEGURO
    // Email da conta pagseguro
    const PS_EMAIL = "ronaldo.carvalho@hotmail.com";
    // token produção
    const PS_TOKEN = "c03a84b8-0b4d-406d-b684-039aa4c8c4fa375a80d042609c4b272d1f39815c37514d08-7ce8-42db-9628-aaaf038c392f";
    // token sandbox
    const PS_TOKEN_SB = "855A56CC16944D71ABDA90C2D45827CD";
    // Ambiente atual
    const PS_AMBIENTE = "sandbox";
}
