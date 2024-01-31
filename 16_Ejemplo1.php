<?php

require_once("15_Ejemplo1.php");

class Docente extends Usuario {

private $especialidad;

public function __construct(string $nombre, string $apellidos, int $edad, string $password,string $especialidad) {
    parent::__construct($nombre, $apellidos, $edad, $password);
    $this->especialidad = $especialidad;
}


// Este método utiliza polimorfismo para llamar al método `saludar()` de la clase `Persona`.
public function saludar() {
    if(parent::validarEdad()){
       
        return "Eres ".  $this->rol() . "<br>" . 
                parent::saludar() . " Soy docente de {$this->especialidad}.";
    }else{
        return "Necesita ser mayor de edad para acceder al sistema.";
    }
}

public function rol(){
    switch(parent::userType()){
        case "Administrador":
            return "Docente Administrador";
            break; 
        
        case "Usuario":
            return "Docente Usuario";
        break;
    }
}

}

$Carlos = new Docente("Carlos", "Perez", 30, "1234","Matemáticas");
echo $Carlos->saludar();


?>