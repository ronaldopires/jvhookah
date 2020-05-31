<?php

class Config
{
    //INFORMAÇÕES BÁSICAS DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "jvhookah/";
    const SITE_NOME = "Jv Hookah";
    const SITE_EMAIL_ADM = "ronaldobondezica@gmail.com";
    const SITE_CEP = '08280090';
    const BD_LIMIT_PAG = 6;

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
}
