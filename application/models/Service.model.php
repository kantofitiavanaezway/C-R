<?php
include_once CONFIG.'Model.php';
class Services extends Model
{
    public $id,$titre,$description,$icon,$lien,$dateInsertion,$dateModification,$idAdmin,$image;

    function __construct()
    {
        parent::__construct();
        parent::$class="services";
    }
    public function setId($_id)
    {
        $this->id=$_id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setImage($_image)
    {
        $this->image=$_image;
    }
    public function getImage()
    {
        return $this->image;
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
    public function setDescription($_description)
    {
        $this->description=$_description;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setLien($_lien)
    {
        $this->lien=$_lien;
    }
    public function getLien()
    {
        return $this->lien;
    }

    public function setIcon($_icon)
    {
        $this->icon=$_icon;
    }
    public function getIcon()
    {
        return $this->icon;
    }
    public function list()
    {
        return parent::reading(new Services());
    }
    public function insert(Services $services)
    {
        parent::managing($services,$_FILES['image']);
        return true;
    }
    public function update(Services $services)
    {
        parent::updating($services);
        return true;
    }
    public function delete(Services $services)
    {
        parent::deleting($services,"image");
        return true;
    }
}
?>
