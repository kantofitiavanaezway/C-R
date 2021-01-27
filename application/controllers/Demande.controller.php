<?php
include_once CONFIG.'Controller.php';
require_once MODELS.'Demande.model.php';
class Demande extends Controller
{
    protected $model=null;
    function __construct()
    {
        parent::__construct();
        if($this->model==null)
        {
            parent::setModel(new Demandes());
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
    public function accepted_list()
    {
        echo json_encode($this->model->listAccepted());
    }
    public function create()
    {
        if(isset($_POST['departement']) || isset($_POST['nom']) || isset($_POST['motif']) || isset($_POST['montant']))
        {
            $data=new Demandes();
            $data->setDepartement(htmlspecialchars($_POST['departement']));
            $data->setNom(htmlspecialchars($_POST['nom']));
            $data->setMotif(htmlspecialchars($_POST['motif']));
            $data->setMontant(htmlspecialchars($_POST['montant']));
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
        $data=new Demandes();
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
        $data=new Demandes();
        $data->setDepartement(htmlspecialchars($_POST['departement']));
        $data->setNom(htmlspecialchars($_POST['descripnomtion']));
        $data->setMotif(htmlspecialchars($_POST['motif']));
        $data->setMontant(htmlspecialchars($_POST['montant']));
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