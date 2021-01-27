<?php
include_once CONFIG.'Controller.php';
require_once MODELS.'Admin.model.php';
class Admin extends Controller
{
    protected $model=null;
    function __construct()
    {
        parent::__construct();
        if($this->model==null)
        {
            parent::setModel(new Admins());
            $this->model=parent::getModel();
        }
        else
        {
            $this->model=parent::getModel();
        }
    }

    public function index()
    {
        $title="Admin|C. R.";
        include VIEWS_BACK_ADMIN.'sign-in.php';
    }
    
    public function list()
    {
        echo json_encode($this->model->list());
    }
    public function create()
    {
        $data=new Admins();
        $data->setNomUtilisateur(htmlspecialchars($_POST['nomUtilisateur']));
        $data->setMDP(htmlspecialchars($_POST['mdp']));
        if($this->model->insert($data))
        {
            echo 'success';
        }
        else
        {
            echo 'Erreur de téléchargement d\'un fichier';
        }
    }

    public function delete()
    {
        $data=new Admins();
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
        $data=new Admins();
        $data->setNomUtilisateur(htmlspecialchars($_POST['nomUtilisateur']));
        $data->setMDP(htmlspecialchars($_POST['mdp']));
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
    public function login()
    {
        $data=new Admins();
        $data->setNomUtilisateur(htmlspecialchars($_POST['nomUtilisateur']));
        $data->setMDP(htmlspecialchars($_POST['mdp']));

        if($this->model->login($data))
        {
            echo 'success';
        }
        else
        {
            echo '!success';
        }
    }
    public function logout()
    {
        session_destroy();
        header("location:".URL);
    }
}  
?>