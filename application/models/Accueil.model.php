<?php
include_once CONFIG.'Model.php';
class Accueils extends Model
{
    public $id,$titre,$image,$dateInsertion,$dateModification,$idAdmin;

    function __construct()
    {
        parent::__construct();
        parent::$class="accueils";
    }
    public function setId($_id)
    {
        $this->id=$_id;
    }
    public function getId()
    {
        return $this->id;
    }
    
    public function setDateInsertion($_dateInsertion)
    {
        $this->dateInsertion=$_dateInsertion;
    }
    public function getDateInsertion()
    {
        return $this->dateInsertion;
    }

    public function setDateModification($_dateModification)
    {
        $this->dateModification=$_dateModification;
    }
    public function getDateModification()
    {
        return $this->dateModification;
    }

    public function setIdAdmin($_idAdmin)
    {
        $this->idAdmin=$_idAdmin;
    }
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }

    public function setTitre($_titre)
    {
        $this->titre=$_titre;
    }
    public function getTitre()
    {
        return $this->titre;
    }
    public function setImage($_image)
    {
        $this->image=$_image;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function list()
    {
        return parent::reading(new Accueils());
    }
    public function insert(Accueils $accueils)
    {
        parent::managing($accueils,$_FILES['image']);
        return true;
    }
    public function update(Accueils $accueil)
    {
        $accueil->setImage(null);
        parent::updating($accueil);
        return true;
    }
    public function delete(Accueils $accueil)
    {
        parent::deleting($accueil,"image");
        return true;
    }
}
?>
