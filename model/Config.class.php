<?php

class Config
{
    //INFORMAÇÕES BÁSICAS DO SITE
    const SITE_URL = "http://locallhost";
    const SITE_PASTA = "jvhookah";
    const SITE_NOME = "Jv Hookah";
    const SITE_EMAIL_ADM = "ronaldobondezica@gmail.com";

    //INFORMAÇÕES DO BANCO DE DADOS
    const BD_HOST = "localhost";
    const BD_USER = "root";
    const BD_SENHA = "";
    const BD_BANCO = "jvhookah";
    const BD_PREFIX = "jvh_";

    //INFORMAÇÕES PARA PHPMAILER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "ronaldobondezica@gmail.com";
	const EMAIL_NOME = "Contato Loja Jv Hookah";
	const EMAIL_SENHA = "ronaldinhog";
	const EMAIL_PORTA = 587;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "ronaldo.carvalho@hotmail.com";
}
