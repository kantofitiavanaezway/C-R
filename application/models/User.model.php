<?php
require_once DATABASE.'DB.php';
include_once CONFIG.'Model.php';
class Users extends Model
{
    public $id,$user,$mdp,$date,$departement;
    private $connexion=null;

    function __construct()
    {
        parent::__construct();
        parent::$class="users";
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

    public function setMdp($_mdp)
    {
        $this->mdp=$_mdp;
    }
    public function getMdp()
    {
        return $this->mdp;
    }

    public function setUser($_user)
    {
        $this->user=$_user;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function list()
    {
        return parent::reading(new Demandes());
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
    public function login(IConnect $admins)
    {
        return parent::connecting($admins);
    }

    public function One()
    {
        $_user=$this->getUser();
        $_mdp=$this->getMdp();
        $req=$this->connexion->prepare("SELECT * FROM users WHERE user=:user AND mdp=:mdp");
        $req->bindParam(':user',$_user);
        $req->bindParam(':mdp',$_mdp);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $req->execute();
        $results=$req->fetchAll();
        if(count($results)==0) return false;
        else
        {
            $_SESSION["id-user"]=$results[0]->id;
            $_SESSION["user-user"]=$results[0]->user;
            return true;
        }
    }
}
?>
