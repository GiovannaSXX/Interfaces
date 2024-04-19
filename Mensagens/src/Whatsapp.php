<?php

namespace App\Src;

class Whatsapp implements Mensageiro {
    
    private $conteudo;

    public function Mensagem($conteudo){
        echo "Transmitindo mensagem através do Whatsapp para o destinatário: $conteudo\n";
    }

}
