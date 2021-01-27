<?php
include_once CONFIG.'Controller.php';
require_once MODELS.'Service.model.php';
class Service extends Controller
{
    protected $model=null;
    function __construct()
    {
        parent::__construct();
        if($this->model==null)
        {
            parent::setModel(new Services());
            $this->model=parent::getModel();
        }
        else
        {
            $this->model=parent::getModel();
        }
    }

    public function index()
    {
        $title="Admin|Services";
        include VIEWS_BACK_ACCUEIL.'home.php';
    }
    public function container()
    {
        include VIEWS_BACK_SERVICES.'home.php';
    }
    
    public function list()
    {
        echo json_encode($this->model->list());
    }
    public function listService()
    {
        $data=$this->model->list();
        include VIEWS_BACK_SERVICES.'list.php';
    }
    public function create()
    {
        if(isset($_POST['titre']) || isset($_POST['description']) || isset($_POST['lien']) || isset($_POST['icon']))
        {
            $data=new Services();
            $data->setTitre(htmlspecialchars($_POST['titre']));
            $data->setDescription(htmlspecialchars($_POST['description']));
            $data->setLien(htmlspecialchars($_POST['lien']));
            $data->setIcon(htmlspecialchars($_POST['icon']));
            if($this->model->insert($data))
            {
                echo 'success';
            }
            else
            {
                echo 'Erreur de téléchargement d\'un fichier';
            }
        }
        else
        {
            echo "Champ incorrect";
        }
    }

    public function delete()
    {
        $data=new Services();
        $data->setId($_POST['id']);
        if($this->model->delete($data))
        {
            echo 'success';
        }
        else
        {
            echo '!success'; 
        }
    }
    public function update()
    {
        $data=new Services();
        $data->setTitre(htmlspecialchars($_POST['titre']));
        $data->setDescription(htmlspecialchars($_POST['description']));
        $data->setLien(htmlspecialchars($_POST['lien']));
        $data->setIcon(htmlspecialchars($_POST['icon']));
        $data->setId(htmlspecialchars($_POST['id']));

        if($this->model->update($data))
        {
            echo 'success';
        }
        else
        {
            echo 'Erreur de modfication';
        }
    }
}  
?>