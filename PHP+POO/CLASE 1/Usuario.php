<?php

class Usuario{
    public $nombre;
    public $mail;
    public $contraseña;
    public function __construct($nombrePersona, $mailPersona, $contraseñaPersona, $mail, $pass){
      $this->nombre=$nombrePersona;
      $this->mail=$mailPersona;
      $this->contraseña=$contraseñaPersona;
      $this->setMail($mail);
      $this->setPass($pass);
    }
    public function saludar()
    {
      return "Hola $this->nombre";
    }
    public function getNombre():string
    {
      return $this->nombre;
    }
    public function getMail():string
    {
      return $this->mail;
    }
    public function getPass()
    {
      return $this->contraseña;
    }

    public function setNombre(string $nombre)
    {
     $this->nombre=$nombre;
    }
    public function setMail(string $mail){
      if (filter_var($mail,FILTER_VALIDATE_EMAIL)) {
         $this->mail=$mail;
      } else {
        return "El mail ingresado no es valido";
      }
    }

    public function setPass($pass){
      if (strlen($pass)>3) {
      $passHasheada=$this->encriptarPass($pass);
       $this->contraseña=$passHasheada;
    } else {
      return "La contraseña debe tener al menos 3 dígitos.";
    }
    }
    public function encriptarPass(string $string)
    {
     return password_hash($string, PASSWORD_BCRYPT);
    }




}

 ?>
