<?php
include_once CONFIG.'Controller.php';
require_once MODELS.'User.model.php';
class User extends Controller
{
    protected $model=null;
    function __construct()
    {
        parent::__construct();
        if($this->model==null)
        {
            parent::setModel(new Users());
            $this->model=parent::getModel();
        }
        else
        {
            $this->model=parent::getModel();
        }
    }
    public function login()
    {
        $data=new Users();
        $data->setUser(htmlspecialchars($_POST['user']));
        $data->setMdp(htmlspecialchars($_POST['mdp']));
        if($this->model->login($data))
        {
            $data->One();
            echo 'success';
        }
        else
        {
            echo '!success';
        }
    }
    public function list()
    {
        echo json_encode($this->model->list());
    }
    public function create()
    {
        if(isset($_POST['departement']) || isset($_POST['user']) || isset($_POST['mdp']))
        {
            $data=new Users();
            $data->setDepartement(htmlspecialchars($_POST['departement']));
            $data->setUser(htmlspecialchars($_POST['user']));
            $data->setMdp(htmlspecialchars($_POST['mdp']));
            if($this->model->insert($data))
            {
                echo 'success';
            }
            else
            {
                echo 'Erreur de téléchargement';
            }
        }
        else
        {
            echo "Champ incorrect";
        }
    }

    public function delete()
    {
        $data=new Users();
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
        $data=new Users();
        $data->setDepartement(htmlspecialchars($_POST['departement']));
        $data->setUser(htmlspecialchars($_POST['user']));
        $data->setMdp(htmlspecialchars($_POST['mdp']));
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