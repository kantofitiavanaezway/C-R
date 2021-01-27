<?php
require_once DATABASE.'DB.php';
include_once CONFIG.'Model.php';
class Signatures extends Model
{
    public $id,$idUser,$idDemande,$date;
    private $connexion=null;

    function __construct()
    {
        parent::__construct();
        parent::$class="signatures";
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

    public function setIdDemande($_idDemande)
    {
        $this->idDemande=$_idDemande;
    }
    public function getIdDemande()
    {
        return $this->idDemande;
    }

    public function setIdUser($_idUser)
    {
        $this->idUser=$_idUser;
    }
    public function getIdUser()
    {
        return $this->idUser;
    }

    public function list()
    {
        //return parent::reading(new Signatures());
        $req=$this->connexion->prepare("SELECT * FROM demandes");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        return $req->fetchAll();
    }
    public function insert(Signatures $signatures)
    {
        parent::creating($signatures);
        return true;
    }
    public function alreadyValid(){
        $_idUser=$this->getIduser();
        $_idDemande=$this->getIdDemande();
        $req=$this->connexion->prepare("SELECT * FROM signatures WHERE idUser=:idUser AND idDemande=:idDemande");
        $req->bindParam(':idUser',$_idUser);
        $req->bindParam(':idDemande',$_idDemande);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        $results=$req->fetchAll();
        if(count($results)==0) return false;
        else
        {
            return true;
        }
    }
    public function getCountSignature($_idDemande){
        
        $req=$this->connexion->prepare("SELECT count(s.id) as nb FROM signatures as s JOIN demandes as d ON d.id=s.idDemande WHERE d.id=:idDemande");
        $req->bindParam(':idDemande',$_idDemande);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        return $req->fetch()->nb;
    }
    public function allRequestValidById($_idDemande){
        $req=$this->connexion->prepare("SELECT s.id, s.idUser, s.idDemande, s.date FROM signatures as s JOIN demandes as d ON d.id=s.idDemande WHERE s.idDemande=:idDemande");
        $req->bindParam(':idDemande',$_idDemande);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        return $req->fetchAll();
    }

    public function allRequestValidAll($_idDemande){
        $req=$this->connexion->prepare("SELECT count(s.id) as nb FROM signatures as s JOIN demandes as d ON d.id=s.idDemande WHERE s.idDemande=:idDemande");
        $req->bindParam(':idDemande',$_idDemande);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        return $req->fetch()->nb;
    }

    public function requestFinished($_idDemande){
        $req=$this->connexion->prepare("SELECT u.id,u.user,s.date FROM users as u JOIN signatures as s ON u.id=s.idUser WHERE s.idDemande=:idDemande");
        $req->bindParam(':idDemande',$_idDemande);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        return $req->fetchAll();
    }
    public function update(Signatures $signatures)
    {
        parent::updating($signatures);
        return true;
    }
    public function delete(Signatures $signatures)
    {
        parent::deleting($signatures);
        return true;
    }
    public function login(IConnect $signatures)
    {
        return parent::connecting($signatures);
    }
}
?>
