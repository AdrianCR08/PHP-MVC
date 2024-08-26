<?php
require_once __DIR__ . '/../model/viewModel.php';
class viewController extends viewModel {
    /*
     * Controller to get the template
     */
    public function getTemplateController(){
        return require_once "./view/Template.php";
    }


    /*
     * Controller to get views
     */
    public function getViewController(){
        if (isset($_GET['views'])){
            $path = explode("/", $_GET['views']);
            $response = viewModel::getViewsModel($path[0]);
        } else{
            $response = "login";

        }
        return $response;
    }
}
