<?php

include_once 'Core/IModel.php';
include_once 'Core/IController.php';
include_once 'Core/Loader.php';


$url = isset($_GET["url"]) ? $_GET["url"] : null;

$HomePage = null;

 
if (isset($_POST['action'])) {

    include_once 'Controllers/Index.php';
    if ($HomePage == null){
        $HomePage = new IndexController(); }

    if ($_POST['action'] == "GetNews") {
        $HomePage->getNewsByID($_POST['NewsID']);
    } else if ($_POST['action'] == "AddComment") {
        $HomePage->addComment($_POST['NewsID'],$_POST['Name'], $_POST['Comment']);
    }
     else if ($_POST['action'] == "UpComment") {
        $HomePage->upComment($_POST['CommentID']);
    }
     else if ($_POST['action'] == "DownComment") {
        $HomePage->downComment($_POST['CommentID']);
    }
}

if ($url != null) {
    $url = rtrim($url, "/");
    $url = explode("/", $url);

    include_once 'Controllers/' . $url[0] . '.php';

    if ($url[0] == "index") {
    if ($HomePage == null){
        $HomePage = new IndexController(); }
        $HomePage->Index();
    } else
        {$url[0] = $url[0] . "Controller"; }

    $callRequestedController = new $url[0]();

    if (isset($url[2])) {
        $callRequestedController->$url[1]($url[2]);
    } else if (isset($url[1])) {

        $callRequestedController->{$url[1]}();
    }
} else {
    include_once 'Controllers/Index.php';
    if ($HomePage == null){
        $HomePage = new IndexController(); }
    $HomePage->Index();
}