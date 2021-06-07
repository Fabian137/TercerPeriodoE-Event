<?php
namespace App\Models;
// implements 
class BaseElement{ 
    public $nombre;
    public $apellido;
    public $correo;
    public $password;

    public function __construct($nombre,$apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function setTitle($nombre){
        $this->nombre = $nombre;
        if($nombre == ' '){
            $this -> nombre = 'N/A';
        }else{
            $this -> nombre = $nombre;
        }
    }
    
    public function getName(){
        return $this->nombre;
    }

    // public function getConversion(){
    //     $years = floor($this->meses / 12);
    //     $modulo = $this->meses % 12;
    //     return "$years años $modulo meses";
    // }

    public function getApellido(){
        return $this -> apellido;
    }
}