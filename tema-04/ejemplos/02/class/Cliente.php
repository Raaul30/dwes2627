<?php


Class Cliente{

    private ?string $nombre;
    private ?string $poblacion;
    private ?string $dni;

    public function __construct()
    {
        $this->nombre = null;
        $this->poblacion = null;
        $this->dni = null;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function getPoblacion():string{
        return $this->poblacion;
    }

    public function getDni():string{
        return $this->dni;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }

    public function setPoblacion(string $poblacion){
        $this->poblacion = $poblacion;
    }

    public function setDni(string $dni){
        $this->dni = $dni;
    }

}