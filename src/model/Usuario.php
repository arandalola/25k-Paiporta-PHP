<?php
namespace Geeks\model;
use Geeks\model\DB as DB;

class Usuario extends DB
{
    private $email;
    private $pass;
    private $name;
    private $apellidos;
    private $edad;
    private $sexo;
    private $club;

    public function __construct($email=null,$pass=null,$name=null,$apellidos=null,$edad=null,$sexo=null,$club=null){
        $this->setEmail($email);
        $this->setPass($pass);
        $this->setedad($name);
        $this->setApellidos($apellidos);
        $this->setEdad($edad);
        $this->setSexo($sexo);
        $this->setClub($club);
    }

    public function nuevoParticipante(){
        $this->conectar();
        return $this->consulta("INSERT INTO participante (email, pass, name, apellidos, edad, sexo, club) VALUES (:email, :pass, :name, :apellidos, :edad, :sexo, :club)",[":email"=>$this->email,":pass"=>$this->pass, ":name"=>$this->edad, ":apellidos"=>$this->apellidos, ":edad"=>$this->edad, ":sexo"=>$this->sexo, ":club"=>$this->club]);
    }
    public function comprobarParticipante(){
        $this->conectar();
        $resultado=$this->consulta("SELECT edad,role FROM participante WHERE email = :email AND pass = :pass",[":email"=>$this->email,":pass"=>$this->pass]);
        if($resultado==true){
            $participante = $this->resultado->fetch();
            if($participante==false){
                return false;
            }else{
                $this->setedad($participante["edad"]);
                $this->setRole($participante["role"]);
                return true;
            }
        }else{
            return "Error en la consulta";
        }
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pass
     */ 
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     *
     * @return  self
     */ 
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->Apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }
    
/**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of sexo
     */ 
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */ 
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of club
     */ 
    public function getClub()
    {
        return $this->club;
    }

    /**
     * Set the value of club
     *
     * @return  self
     */ 
    public function setClub($club)
    {
        $this->club = $club;

        return $this;
    }


    

    // /**
    //  * Get the value of role
    //  */ 
    // public function getRole()
    // {
    //     return $this->role;
    // }

    // /**
    //  * Set the value of role
    //  *
    //  * @return  self
    //  */ 
    // public function setRole($role)
    // {
    //     $this->role = $role;

    //     return $this;
    // }
}