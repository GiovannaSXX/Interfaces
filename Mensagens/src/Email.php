<?php

namespace App\Src;

class Email implements Mensageiro {
    
    private $conteudo;

    public function Mensagem($conteudo){
        echo "Transmitindo via correio eletrônico para o destinatário: $conteudo\n";
    }

}
