<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signinController
 *
 * @author sergiok
 */
class SigninController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function defaultAction() {
        
        $view = new DocumentView('signin', "Registrarse");
        
        $view->addCSS('/styles/font-awesome.min.css');
        $view->addCSS('/styles/signin.css');
        $view->addCSS('/styles/base-admin-2.css');
        $view->addCSS('/styles/base-admin-2-responsive.css');
        $view->addCSS('/styles/jquery-ui-1.10.0.custom.min.css');
        $view->addCSS('/styles/bootstrap-responsive.css');
        
        $view->addJS('/scripts/libs/jquery-ui-1.10.0.custom.min.js');        
        $view->addJS('/scripts/libs/app.js');
        
        
        echo $view;
    }

    
    

}

?>
