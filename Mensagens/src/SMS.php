<?php

namespace App\Src;

class SMS implements Mensageiro {
    
    private $conteudo;

    public function Mensagem($conteudo){
        echo "Encaminhando mensagem através de SMS para o destinatário: $conteudo\n";
    }

}

