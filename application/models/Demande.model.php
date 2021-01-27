<?php
require_once DATABASE.'DB.php';
include_once CONFIG.'Model.php';
class Demandes extends Model
{
    public $id,$departement,$nom,$montant,$motif,$date;
    private $connexion=null;

    function __construct($id=null)
    {
        parent::__construct();
        $this->id=$id;
        parent::$class="demandes";
        $this->connexion=DB::getConnexion();
    }
    public function setId($_id)
    {
        $this->id=$_id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setDate($_date)
    {
        $this->date=$_date;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setDepartement($_departement)
    {
        $this->departement=$_departement;
    }
    public function getDepartement()
    {
        return $this->departement;
    }

    public function setMontant($_montant)
    {
        $this->montant=$_montant;
    }
    public function getMontant()
    {
        return $this->montant;
    }

    public function setNom($_nom)
    {
        $this->nom=$_nom;
    }
    public function getNom()
    {
        return $this->nom;
    }

    public function setMotif($_motif)
    {
        $this->motif=$_motif;
    }
    public function getMotif()
    {
        return $this->motif;
    }
    public function setAccepted()
    {
        $id=$this->getId();
        $req=$this->connexion->prepare("UPDATE demandes SET accepted='1' WHERE id=:id");
        $req->bindParam(':id',$id);
        $req->execute();
    }
    public function list()
    {
        $req=$this->connexion->prepare("SELECT * FROM demandes WHERE accepted='0'");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        return $req->fetchAll();
    }
    public function one()
    {
        $req=$this->connexion->prepare("SELECT * FROM demandes WHERE accepted='1' AND id=:id");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->bindParam(':id',$this->id);
        $req->execute();
        return $req->fetch();
    }
    public function listAccepted()
    {
        $req=$this->connexion->prepare("SELECT * FROM demandes WHERE accepted='1'");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        return $req->fetchAll();
    }
    public function insert(Demandes $demandes)
    {
        parent::creating($demandes);
        return true;
    }
    public function update(Demandes $demandes)
    {
        parent::updating($demandes);
        return true;
    }
    public function delete(Demandes $demandes)
    {
        parent::deleting($demandes);
        return true;
    }
}
?>
