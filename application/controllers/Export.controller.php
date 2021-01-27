<?php
require_once MODELS . 'Export.model.php';
class Export
{
    private $models = null;
    function __construct()
    {
        $this->models = new Exports();
    }
    public function export()
    {
        $this->models = new Exports();
        $this->models->setId($_POST['id']);
        $this->models->setHTML($_POST['html']);
        $this->models->export();
    }
}