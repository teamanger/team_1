<?php

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    
    
    public function defaultAction() {
        $view = new DocumentView('login', "Football para todos");
        $view->addCSS('/styles/styles.css');
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
    public function loginAction(){
        $inputs = new DataInput($_POST);
        if($inputs->validate('email', 'email') && $inputs->validate('password','string')){
            
        }
        
    }

}

?>