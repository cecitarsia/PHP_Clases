<?php
  abstract class Usuario {
    protected $nombre;
		protected $fechaDN;
		protected $email;
    protected $dni;
    protected $paisDN;

    public function __construct(string $unNombre, string $unaFechaDN)
    {
    // esto me permite meter logica en la construccion del nombre, si hago esto solo le asigno algo, no le estoy poniendo lógica:
    //$this->nombre = $unNombre;

    $this->setNombre($unNombre);
    $this->setFechaDN($unaFechaDN);
    }

    public function setNombre($unNombre) {
			$this->nombre = $unNombre;
		}

		public function getNombre() {
			return $this->nombre;
		}

    public function setFechaDN($unaFecha) {
			$this->fechaDN = $unaFecha;
		}

		public function getFechaDN() {
			return $this->fechaDN;
		}

    public function setEmail($unEmail) {
			$this->email = $unEmail;
		}

		public function getEmail() {
			return $this->email;
		}

    public function setDni($unDni) {
			$this->email = $unDni;
		}

		public function getDni() {
			return $this->dni;
		}

    public function setPaisDN($unPais) {
			$this->email = $unPais;
		}

		public function getPaisDN() {
			return $this->paisDN;
		}


  }






 ?>
