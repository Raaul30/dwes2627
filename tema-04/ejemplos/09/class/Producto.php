<?php
class Libro extends Producto
{
   private ?int $numPaginas;
   
   public function __construct(
      ?int $id = null,
      ?string $descripcion = null,
      ?float $precio = null,
      ?string $categoria = null,
      ?int $unidades = null,
      ?int $numPaginas = null
   ) {
      parent::__construct($id, $descripcion, $precio, $categoria, $unidades);
      $this->numPaginas = $numPaginas;
   }
   public function getNumPaginas(): ?int
   {
      return $this->numPaginas;
   }
   public function getResumen(): string
   {
      return 'Descripción: ' . $this->getdescripcion()
         . ', Precio: ' . $this->getPrecio()
         . ', Autor: ' . $this->getcategoria() . ' ' . $this->getunidades()
         . ', Núm. páginas: ' . $this->getNumPaginas();
   }
}
