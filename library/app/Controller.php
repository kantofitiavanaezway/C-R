<?php
    require_once CONFIG.'Model.php';
    class Controller
    {
        private $model=null;
        function __construct()
        {
            $this->model=new Model();
        }
        protected function getModel()
        {
            return $this->model;
        }
        protected function setModel($_model)
        {
            $this->model=$_model;
        }
    }
?>