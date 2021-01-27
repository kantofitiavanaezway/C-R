<?php
    require_once DATABASE.'DB.php';
    require_once INTERFACES.'ICreate.php';
    require_once INTERFACES.'IRead.php';
    require_once INTERFACES.'IUpdate.php';
    require_once INTERFACES.'IDelete.php';
    require_once INTERFACES.'IConnect.php';
    require_once INTERFACES.'IManage.php';
    class Model  implements ICreate,IRead,IUpdate,IDelete,IConnect
    {
        private $connexion=null;
        public static $class=null;
        function __construct()
        {
            $this->connexion=DB::getConnexion();
        }
        private function getCountOfFile()
        {
            $sql= $this->connexion->prepare("SELECT COUNT(*) as nb FROM ".self::$class);
            $sql->setFetchMode(PDO::FETCH_OBJ);
            $sql->execute();
            return ($sql->fetch()->nb+1);
        }
        private function isUploaded($directory,$image)
        {
            $file="";
            if(isset($_POST['titre'])) $this->nom=join("_",explode("'",$_POST['titre']));
            else if(isset($_POST['nom'])) $this->nom=join("_",explode("'",$_POST['nom']));
            $file = $directory . basename($image["name"]);
            $status = 1;
            $type = strtolower(pathinfo($file,PATHINFO_EXTENSION));
            if(isset($_POST["submit"])) {
                $check = getimagesize($image["tmp_name"]);
                if($check !== false) {
                    $status = 1;
                } else {
                    $status = 0;
                }
            }
            if (file_exists($file)) {
                $status = 0;
            }
            if ($_FILES['image']["size"] > 50000000000) {
                $status = 0;
            }
            if($type != "jpg" && $type != "png" && $type != "jpeg" && $type != "gif" ) {
                $status = 0;
            }
            if ($status == 0) {
                return false;
            } 
            else 
            {
                if (move_uploaded_file($image["tmp_name"], $file)) {
                    rename($directory.basename($image["name"]),$directory.$this->getCountOfFile()."-".strtolower(join("-",explode(" ",$this->nom)).".".$type));
                    $this->file=$this->getCountOfFile()."-".strtolower(join("-",explode(" ",$this->nom))).".".$type;
                    return true;
                } else {
                    return false;
                }
            }
        }
        private function isDeleted($chemin,$file)
        {
            if(file_exists($chemin.$file))
            {
                if (unlink($chemin.$file))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        private function getNameOfFile($id)
        {
            $sql= $this->connexion->prepare("SELECT image FROM ".self::$class." WHERE id=:id");
            $sql->bindParam(':id',$id);
            $sql->setFetchMode(PDO::FETCH_OBJ);
            $sql->execute();
            return $sql->fetch()->image;
        }
        public function isExists(IRead $data)
        {
            $references=array();
            $req="SELECT * FROM ".self::$class." WHERE ";
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id" && !is_null($value))
                    {
                        $req.=" ".$key."=:".$key." AND";
                        $references[":".$key]=(string)$value;
                    }
                }
            }
            $req=trim($req," AND");
            $req=$this->connexion->prepare($req);
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id" && !is_null($value))
                    {
                        $req->bindParam(':'.$key,$references[":".$key]);
                    }
                }
            }
            $req->execute();
            if(count($req->fetchAll())==0) return false;
            return true;
        }
        public function creating(ICreate $data,$image=null)
        {
            if(!is_null($image))
            {
                if($this->isUploaded(PUBLICS_IMG.self::$class.DIRECTORY_SEPARATOR,$_FILES['image']))
                {
                    $data->setImage($this->file);
                }
            }
            $req="INSERT INTO ".self::$class;
            $champ="(";
            $values="VALUES(";
            $references=array();
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id" && $value!=null)
                    {
                        $champ.=$key.",";
                        $values.=":".$key.",";
                        $references[":".$key]=(string)$value;
                    }
                }
            }
            $champ=trim($champ,",").") ";
            $values=trim($values,",").")";
            $req=$req.$champ.$values;
            $req=$this->connexion->prepare($req);
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id" && $value!=null)
                    {
                        $req->bindParam(':'.$key,$references[":".$key]);
                    }
                }
            }
            $req->execute();
        }
        public function managing(ICreate $data,$image=null)
        {
            if(!is_null($image))
            {
                if($this->isUploaded(PUBLICS_IMG.self::$class.DIRECTORY_SEPARATOR,$_FILES['image']))
                {
                    $data->setImage($this->file);
                }
            }
            $req="INSERT INTO ".self::$class;
            $champ="(";
            $values="VALUES(";
            $references=array();
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id")
                    {
                        if($key=="dateInsertion" || $key=="dateModification")
                        {
                            $champ.=$key.",";
                            $values.="current_timestamp(),";
                        }
                        else
                        {
                            $champ.=$key.",";
                            $values.=":".$key.",";
                            $references[":".$key]=(string)$value;
                        }
                    }
                }
            }
            $champ=trim($champ,",").") ";
            $values=trim($values,",").")";
            $req=$req.$champ.$values;
            $req=$this->connexion->prepare($req);
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id")
                    {
                        if($key=="idAdmin")
                        {
                            $req->bindParam(':'.$key,$_SESSION["id"]);
                        }
                        else if($key=="dateInsertion" || $key=="dateModification")
                        {

                        }
                        else
                        {
                            $req->bindParam(':'.$key,$references[":".$key]);
                        }
                    }
                }
            }
            $req->execute();
        }
        public function reading(IRead $data)
        {
            $req="SELECT * FROM ".self::$class;
            $req=$this->connexion->prepare($req);
            $req->setFetchMode(PDO::FETCH_OBJ);
            $req->execute();
            return $req->fetchAll();
        }
        public function updating(IUpdate $data)
        {
            $references=array();
            $req="UPDATE ".self::$class." SET ";
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id" && !is_null($value))
                    {
                        $req.=$key."=:".$key.",";
                        $references[":".$key]=(string)$value;
                    }
                }
            }
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key=="id")
                    {
                        $req=trim($req,",");
                        $req.=" WHERE id=:id";
                        $references[":id"]=(string)$value;
                    }
                }
            }
            $req=$this->connexion->prepare($req);
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id" && !is_null($value))
                    {
                        $req->bindParam(':'.$key,$references[":".$key]);
                    }
                    if($key=="id")
                    {
                        $req->bindParam(':id',$references[":".$key]);   
                    }
                }
            }
            $req->execute();
        }
        public function deleting(IDelete $data,$image=null)
        {
            $req="DELETE FROM ".self::$class." WHERE id=:id";
            $references=array();
            $req=$this->connexion->prepare($req);
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key=="id")
                    {
                        $req->bindParam(':id',$value);
                        if(!is_null($image)) 
                        {
                            if($this->isDeleted(PUBLICS_IMG.self::$class.DIRECTORY_SEPARATOR,$this->getNameOfFile($value)))
                            {
                                $req->execute();
                            }
                        }
                        else
                        {
                            $req->execute();
                        }
                        break;
                    }
                }
            }
        }
        public function connecting(IConnect $data)
        {
            $references=array();
            $req="SELECT * FROM ".self::$class." WHERE ";
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id" && !is_null($value))
                    { 
                        $req.=" ".$key."=:".$key." AND";
                        $references[":".$key]=(string)$value;
                    }
                }
            }
            $req=trim($req," AND");
            $req=$this->connexion->prepare($req);
            foreach($data as $key => $value)
            {
                if(!is_object($value))
                {
                    if($key!="id" && !is_null($value))
                    {
                        $req->bindParam(':'.$key,$references[":".$key]);
                    }
                }
            }
            $req->execute();
            $req->setFetchMode(PDO::FETCH_OBJ);
            $results=$req->fetchAll();
            if(count($results)==0) return false;
            else
            {
                // foreach ($results as $a) {
                //     $_SESSION["id"]=$a->id;
                //     $_SESSION["user"]=$a->nomUtilisateur;
                // }
                return true;
            }
        }
        public function readingOfId(Iread $data,$_id)
        {

        }
    }
?>