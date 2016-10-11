<?php

Class ia 
{
//Atributos
public $columnas=1;
public $fila=1;


//Método
public function getFila(){
return $this->fila;

}

public function getColumna(){
return $this->columnas;

}

public function randomPos(){
}


//Setter

public function setColumna($col){
$this->columnas=$col;

}

public function setFila($fil){
$this->fila=$fil;

}







}
