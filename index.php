<?php
require_once "./config/App.php";
require_once "./controller/viewController.php";

$template = new viewController();
echo $template->getTemplateController();