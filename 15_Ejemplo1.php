<?php
    require_once("14_Ejempl1.php");

    class Usuario implements iAlmacenamiento {
        private $nombre;
        private $apellidos;
        protected $edad;
        private $password; 

    public function __construct(string $nombre, string $apellidos, int $edad, string $password) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
        $this->password = $password;
    }

    public function saludar() {
        return "Hola, mi nombre es {$this->nombre} {$this->apellidos} y tengo {$this->edad} años.";
    }

        public function guardar(string $clave, mixed $valor) {
            echo "Guardando $valor en $clave";
        }
        public function leer(string $clave) {
            echo "Leyendo $clave";
        }
        public function eliminar(string $clave) {
            echo "Eliminando $clave";
        }

    public function validarEdad() {
        if ($this->edad >= 18) {
            return true; 
        } else {
            return false;
        }
    }


    public function userType() {
        if($this->password == "1234"){
            return "Administrador";
        }else{
            return "Usuario"; 
        }
    }

}

?>