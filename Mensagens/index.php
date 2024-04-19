<?php
require 'vendor/autoload.php';
use App\Src\Mensageiro;
use App\Src\Email;
use App\Src\SMS;
use App\Src\Whatsapp;

$Whatsapp = new Whatsapp();
$Whatsapp->Mensagem("Luiz");

$SMS = new SMS();
$SMS->Mensagem("Gustavo");

$Email = new Email();
$Email->Mensagem("João");