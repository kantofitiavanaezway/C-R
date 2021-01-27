<?php
include_once CONFIG . 'Controller.php';
require_once MODELS . 'Accueil.model.php';
class Accueil extends Controller
{
    protected $model = null;
    function __construct()
    {
        parent::__construct();
        if ($this->model == null) {
            parent::setModel(new Accueils());
            $this->model = parent::getModel();
        }
        $this->model = parent::getModel();
    }

    public function test()
    {
        return true;
    }
    public function index()
    {
        $title = "Admin|Accueil";
        include VIEWS_BACK . 'index.php';
    }
    public function container()
    {
        include VIEWS_BACK_ACCUEIL . 'home.php';
    }

    public function list()
    {
        echo json_encode($this->model->list());
    }
    public function listSlide()
    {
        $data = $this->model->list();
        include VIEWS_BACK_ACCUEIL . 'list.php';
    }
    public function create()
    {
        if (isset($_POST['titre']) || isset($_POST['image'])) {
            $data = new Accueils();
            $data->setTitre(htmlspecialchars($_POST['titre']));
            if ($this->model->insert($data)) {
                echo 'success';
            } else {
                echo 'Erreur de téléchargement d\'un fichier';
            }
        } else {
            echo "Champ incorrect";
        }
    }

    public function delete()
    {
        $accueil = new Accueils();
        $accueil->setImage(null);
        $accueil->setTitre(null);
        $accueil->setId($_POST['id']);
        if ($this->model->delete($accueil)) {
            echo 'success';
        } else {
            echo '!success';
        }
    }
    public function update()
    {
        if (isset($_POST['edit-title']) || isset($_POST['slide-id'])) {
            $data = new Accueils();
            $data->setId(htmlspecialchars($_POST['slide-id']));
            $data->setTitre(htmlspecialchars($_POST['edit-title']));
            if ($this->model->update($data)) {
                echo 'success';
            } else {
                echo 'Erreur de modfication';
            }
        } else {
            echo "Champ incorrect";
        }
    }
}