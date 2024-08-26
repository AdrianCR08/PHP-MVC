<?php
class viewModel{
    /*
     * Model to get the views
     */
    protected static function getViewsModel($view){
        $whiteList = ["home", "client-list"];
        if (in_array($view, $whiteList)){
            if (is_file("./view/content/".$view."-view.php")){
                $content ="./view/content/".$view."-view.php";

            } else{
                $content = "404";

            }

        } else if ($view == "login" || $view == "index"){
            $content = "login";
        } else{
            $content="404";
        }

    }
}