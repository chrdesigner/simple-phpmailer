<?php
/**
 * Plugin Name:       PHPMailer
 * Plugin URI:        https://github.com/chrdesigner/simple-phpmailer
 * Description:       Configurar o PHPMailer para usar um servidor SMTP
 * Version:           1.0.0
 * Author:            CHR Designer
 * Author URI:        http://www.chrdesigner.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Configurar o PHPMailer para usar um servidor SMTP
add_action( 'phpmailer_init', 'simple_phpmailer' );

function simple_phpmailer( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.SEUHOST.com';
    $phpmailer->SMTPAuth = true; // Forçar esse Usuário e Senha para autenticação
    $phpmailer->Port = 465; // Porta SMTP do seu Host/Servidor, pode ser 25(Padrão) ou 465(SSL ou TLS)
    $phpmailer->Username = 'seuemail@seuhost.com'; // Seu e-mail para autenticação/disparo
    $phpmailer->Password = '123456'; // Senha do seu e-mail de autenticação/disparo

    // Configurações Adicionais
    // Se o seu Host necessitar de autenticação via SSL/TLS você precisa declarar, senão é só comentar os valores abaixo.
    $phpmailer->SMTPSecure = "ssl"; // Escolha SSL ou TLS, se for necessário
    $phpmailer->From = "seuemail@seuhost.com"; // E-mail de autenticação/disparo
    $phpmailer->FromName = "Nome do Seu Site"; // Nome do seu Site
}