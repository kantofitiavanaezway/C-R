<?php
//chemin du fichier externe
define('PUBLICS', dirname(__FILE__) . DIRECTORY_SEPARATOR . "assets" . DIRECTORY_SEPARATOR);

//chemin du fichier externe client
define('PUBLICS_FRONT', PUBLICS . "front" . DIRECTORY_SEPARATOR);

//chemin du fichier externe librairie
define('PUBLICS_LIBS', PUBLICS . "library" . DIRECTORY_SEPARATOR);

//chemin du fichier externe librairie
define('PUBLICS_LIBS_OWL_CAROUSEl', PUBLICS_LIBS . "owl.carousel" . DIRECTORY_SEPARATOR);

//chemin du fichier externe client
define('PUBLICS_FRONT_CSS', PUBLICS_FRONT . "css" . DIRECTORY_SEPARATOR);

//chemin du fichier externe client
define('PUBLICS_FRONT_JS', PUBLICS_FRONT . "js" . DIRECTORY_SEPARATOR);

//chemin du fichier externe client
define('PUBLICS_FRONT_FONTS', PUBLICS_FRONT . "fonts" . DIRECTORY_SEPARATOR);

//chemin du fichier externe client
define('PUBLICS_FRONT_IMG', PUBLICS_FRONT . "img" . DIRECTORY_SEPARATOR);


//chemin du fichier externe admin
define('PUBLICS_BACK', PUBLICS . "back" . DIRECTORY_SEPARATOR);

//chemin du repertoire
define('LIBRARIES', dirname(__FILE__) . DIRECTORY_SEPARATOR . "library" . DIRECTORY_SEPARATOR);

//chemin du config de BD
define('DATABASE', LIBRARIES . "database" . DIRECTORY_SEPARATOR);


define('FPDF', LIBRARIES . "fpdf" . DIRECTORY_SEPARATOR);

define('DOMPDF', LIBRARIES . "dompdf" . DIRECTORY_SEPARATOR);

//chemin du config de l'application config
define('CONFIG', LIBRARIES . "app" . DIRECTORY_SEPARATOR);

//chemin du config de l'interface
define('INTERFACES', CONFIG . "interfaces" . DIRECTORY_SEPARATOR);

//chemin de l'application (ato ny fonctionalité-n'ny application antsika rehera)
define('PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR . "application" . DIRECTORY_SEPARATOR);

//controlleurs 
define('CONTROLLERS', PATH . "controllers" . DIRECTORY_SEPARATOR);
//models
define('MODELS', PATH . "models" . DIRECTORY_SEPARATOR);
//vues
define('VIEWS', PATH . "views" . DIRECTORY_SEPARATOR);

//vues front
define('VIEWS_FRONT', VIEWS . "front" . DIRECTORY_SEPARATOR);

//vues back
define('VIEWS_BACK', VIEWS . "back" . DIRECTORY_SEPARATOR);
//vues back accueil
define('VIEWS_BACK_ACCUEIL', VIEWS_BACK . "accueil" . DIRECTORY_SEPARATOR);
//vues back accueil
define('VIEWS_BACK_SERVICES', VIEWS_BACK . "service" . DIRECTORY_SEPARATOR);
//vues back accueil
define('VIEWS_BACK_ADMIN', VIEWS_BACK . "admin" . DIRECTORY_SEPARATOR);

//vues back accueil
define('VIEWS_BACK_PAGE', VIEWS_BACK . "page" . DIRECTORY_SEPARATOR);
//vues back accueil
define('VIEWS_ERROR', LIBRARIES . "error" . DIRECTORY_SEPARATOR);

include_once CONFIG . 'config.php';
include_once CONFIG . 'routes.php';


if (defined('MODE')) {
    $class = ucfirst(MODE);
    if (in_array(MODE, $valid_url)) {
        if (file_exists(CONTROLLERS . $class . '.controller.php')) {
            require_once CONTROLLERS . $class . '.controller.php';
            $controller = new $class;
            if (defined('ACTION')) {
                if (in_array(ACTION, $valid_action)) {
                    call_user_func(array($controller, ACTION));
                }
            } else {
                $controller->index();
            }
        }
    }
} else {
    require CONTROLLERS . 'Page.controller.php';
    $controller = new Page();
    $controller->index();
}