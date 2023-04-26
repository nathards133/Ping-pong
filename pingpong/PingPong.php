<?php

class PingPong {
    public function saque($pontuacao) {
        list($pontosA, $pontosB) = explode(":", $pontuacao);
        $totalSacadas = $pontosA + $pontosB;
        $sacadasAlternadas = $totalSacadas >= 40 ? 2 : 5;

        return ($totalSacadas % (2 * $sacadasAlternadas) < $sacadasAlternadas) ? "jogador a" : "jogador b";
    }
}

// TESTES VIA TERMINAL:
// $pingPong = new PingPong();
// echo $pingPong->saque("0:0") 
// echo $pingPong->saque("3:2")
// echo $pingPong->saque("21:20")
// echo $pingPong->saque("21:22")