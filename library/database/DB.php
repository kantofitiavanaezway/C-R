<?php 
class DB
{
    private static $connex=null;
    public static function getConnexion()
    {
        include_once CONFIG.'config.php';
        try {
            self::$connex=new PDO(SERVER.":host=".HOST.";dbname=".DBNAME,USER,MDP);
            self::$connex->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return self::$connex;
		} catch (Exception $e) {
			$e->getMessage();
        }
        return null;
    }
}
?>