<?php
include_once CONFIG.'Model.php';
class Admins extends Model
{
    public $id,$nomUtilisateur,$mdp;

    function __construct()
    {
        parent::__construct();
        parent::$class="admins";
    }
    public function setId($_id)
    {
        $this->id=$_id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setNomUtilisateur($_nomUtilisateur)
    {
        $this->nomUtilisateur=$_nomUtilisateur;
    }
    public function getNomUtilisateur()
    {
        return $this->nomUtilisateur;
    }

    public function setMDP($_mdp)
    {
        $this->mdp=$_mdp;
    }
    public function getMDP()
    {
        return $this->mdp;
    }

    public function list()
    {
        return parent::reading(new Admins());
    }
    public function insert(Admins $admins)
    {
        parent::creating($admins);
        return true;
    }
    public function update(Admins $admins)
    {
        parent::updating($admins);
        return true;
    }
    public function delete(Admins $admins)
    {
        parent::deleting($admins);
        return true;
    }
    public function login(IConnect $admins)
    {
        return parent::connecting($admins);
    }
}
?>
