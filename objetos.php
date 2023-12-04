<?php

echo "<h1>POKEMON</h1>";


class Pokemon {

public $nombre;
public $tipo;
public $altura;
public $peso;
public $color;

function elegir(){

echo "Yo te elijo como mi pokemon inicial! ";  
}

function cambiar(){

    echo "Puedes elegir este como tu pokemon inicial, cámbialo!";  
    }
}

echo "<h2>Pokemon 1:</h2>";

$pikachu = new Pokemon();

$pikachu->nombre = "Pikachu";
echo $pikachu->nombre, "<br>";
$pikachu->tipo = "Eléctrico";
echo $pikachu->tipo, "<br>";
$pikachu->altura = "0.4 m";
echo $pikachu->altura, "<br>";
$pikachu->peso = "6 kg";
echo $pikachu->peso, "<br>";
$pikachu->color = "Amarillo";
echo $pikachu->color;
echo "<br>";
$pikachu->elegir();

echo "<h2>Pokemon 2:</h2>";

$marill = new Pokemon();

$marill->nombre = "Marill";
echo $marill->nombre, "<br>";
$marill->tipo = "Agua";
echo $marill->tipo, "<br>";
$marill->altura = "0.4 m";
echo $marill->altura, "<br>";
$marill->peso = "8.5 kg";
echo $marill->peso, "<br>";
$marill->color = "Azul";
echo $marill->color;
echo "<br>";
$marill->cambiar();

echo "<h2>Pokemon 3:</h2>";

$charmander = new Pokemon();

$charmander->nombre = "Charmander";
echo $charmander->nombre, "<br>";
$charmander->tipo = "Fuego";
echo $charmander->tipo, "<br>";
$charmander->altura = "0.6 m";
echo $charmander->altura, "<br>";
$charmander->peso = "8.5 kg";
echo $charmander->peso, "<br>";
$charmander->color = "Rojo";
echo $charmander->color;
echo "<br>";
$charmander->cambiar();

echo "<h2>Pokemon 4:</h2>";

$bulbasaur = new Pokemon();

$bulbasaur->nombre = "Bulbasaur";
echo $bulbasaur->nombre, "<br>";
$bulbasaur->tipo = "Planta";
echo $bulbasaur->tipo, "<br>";
$bulbasaur->altura = "0.7 m";
echo $bulbasaur->altura, "<br>";
$bulbasaur->peso = "6.9 kg";
echo $bulbasaur->peso, "<br>";
$bulbasaur->color = "Verde";
echo $bulbasaur->color;
echo "<br>";
$bulbasaur->cambiar();

echo "<h2>Pokemon 5:</h2>";

$squirtle = new Pokemon();

$squirtle->nombre = "Squirtle";
echo $squirtle->nombre, "<br>";
$squirtle->tipo = "Agua";
echo $squirtle->tipo, "<br>";
$squirtle->altura = "0.5 m";
echo $squirtle->altura, "<br>";
$squirtle->peso = "9 kg";
echo $squirtle->peso, "<br>";
$squirtle->color = "Celeste";
echo $squirtle->color;
echo "<br>";
$squirtle->cambiar();


?>
