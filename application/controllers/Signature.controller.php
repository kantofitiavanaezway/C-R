<?php
include_once CONFIG.'Controller.php';
require_once MODELS.'Signature.model.php';
require_once MODELS.'Demande.model.php';
class Signature extends Controller
{
    protected $model=null;
    function __construct()
    {
        parent::__construct();
        if($this->model==null)
        {
            parent::setModel(new Signatures());
            $this->model=parent::getModel();
        }
        else
        {
            $this->model=parent::getModel();
        }
    }
    public function list()
    {
        echo json_encode($this->model->list());
    }
    public function countSignature(){
        echo count($this->model->allRequestValidById($_GET['request_id']));
    } 
    
    public function finished(){
        echo json_encode($this->model->requestFinished($_GET['demande']));
    }
    
    public function create()
    {
        if(isset($_POST['demande']))
        {
            $data=new Signatures();
            $data->setIdUser($_SESSION['id-user']);
            $data->setIdDemande($_POST['demande']);
            if($data->alreadyValid()){
                echo 'ok';
            }
            else{
                if($this->model->insert($data))
                {
                    echo 'success';
                    if($this->model->getCountSignature($_POST['demande'])=="3"){
                        $demande=new Demandes();
                        $demande->setId($_POST['demande']);
                        $demande->setAccepted();
                    }
                }
                else
                {
                    echo 'Erreur de téléchargement';
                }
            }
        }
        else
        {
            echo "Champ incorrect";
        }
    }

    public function delete()
    {
        $data=new Signatures();
        $data->setIdUser('');
        $data->setIdDemande('');
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
        $data=new Signatures();
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