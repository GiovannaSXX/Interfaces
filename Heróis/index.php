<?php

require __DIR__ . '../vendor/autoload.php';


use App\Src\Batman;
use App\Src\Flash;
use App\Src\MulherMaravilha;
use App\Src\Personagem;

function desfereGolpe(Personagem $personagem) {
    $personagem->personagemIniciarCombate();
}

$batman = new Batman();
$flash = new Flash();
$mulherMaravilha = new MulherMaravilha();

desfereGolpe($batman);
desfereGolpe($flash);

if (isset($mulherMaravilha)) {
    desfereGolpe($mulherMaravilha);
} else {
    echo "A Mulher Maravilha não está disponível no momento.\n";
}
