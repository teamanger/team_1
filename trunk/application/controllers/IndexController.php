<?php

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function defaultAction() {
        
        $view = new DocumentView('home', "Football para todos");
        
        $view->addCSS('/styles/font-awesome.min.css');
        $view->addCSS('/styles/dashboard.css');
        $view->addCSS('/styles/base-admin-2.css');
        $view->addCSS('/styles/base-admin-2-responsive.css');
        $view->addCSS('/styles/jquery-ui-1.10.0.custom.min.css');
        $view->addCSS('/styles/bootstrap-responsive.css');
        
        
        $view->addJS('/scripts/libs/jquery-ui-1.10.0.custom.min.js');

        $view->addJS('/scripts/libs/flot/jquery.flot.js');
        $view->addJS('/scripts/libs/flot/jquery.flot.pie.js');
        $view->addJS('/scripts/libs/flot/jquery.flot.resize.js');
        
        $view->addJS('/scripts/libs/app.js');
        $view->addJS('/scripts/libs/area.js');
        $view->addJS('/scripts/libs/donut.js');

        echo $view;
    }

}

?>