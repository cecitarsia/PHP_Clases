<?php
class Titular extends Profesor {
  protected $especialidad;

  public function __construct(string $elNombre, string $elApellido, int $laAntiguedad, int $elCodigo, )
  {
    parent::__construct();
    $this->setEspecialidad($laEspecialidad);



}
}
