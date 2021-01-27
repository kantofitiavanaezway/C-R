<?php
include_once CONFIG.'Controller.php';
require_once MODELS.'Atout.model.php';
class Atout extends Controller
{
    protected $model=null;
    function __construct()
    {
        parent::__construct();
        if($this->model==null)
        {
            parent::setModel(new Atouts());
            $this->model=parent::getModel();
        }
        else
        {
            $this->model=parent::getModel();
        }
    }

    public function index()
    {
        $title="Admin|Atouts";
        include VIEWS_BACK_ACCUEIL.'home.php';
    }
    
    public function list()
    {
        echo json_encode($this->model->list());
    }
    public function create()
    {
        if(isset($_POST['titre']) || isset($_POST['description']) || isset($_POST['lien']) || isset($_POST['icon']))
        {
            $data=new Atouts();
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
        $accueil=new Atouts();
        $accueil->setId($_POST['id']);
        if($this->model->delete($accueil))
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
        $data=new Atouts();
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