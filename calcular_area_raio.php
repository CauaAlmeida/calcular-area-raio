<div class="titulo">CALCULAR AREA DO CIRCULO</div>

<form action="#" method="post">
    <input type="text" name="raio">
    <button>CALCULAR</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const VALOR_DE_PI = 3.14159265359;
$raio = $_POST['raio'];

$raioAoQuadrado = $raio ** 2;
$areaDoCirculo = VALOR_DE_PI * $raioAoQuadrado;

echo "<br> A Área do Circulo é: " . round($areaDoCirculo, 2); 