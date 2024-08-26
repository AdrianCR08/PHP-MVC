<?php
class viewModel{
    /*
     * Model to get the views
     */
    protected static function getViewsModel($view){
        $whiteList = [];
        if (in_array($view, $whiteList)){
            if (is_file("./view/content/".$view."-ui.php")){
                $content ="./view/content/".$view."-ui.php";

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