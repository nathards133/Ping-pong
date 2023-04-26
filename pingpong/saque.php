<?php

require_once 'PingPong.php';

if (isset($_POST['pontuacao'])) {
    $pingPong = new PingPong();
    echo $pingPong->saque($_POST['pontuacao']);
}

?>
