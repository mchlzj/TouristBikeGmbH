<?php 

function redirect($page = FALSE, $message = NULL, $messageType = NULL){
    if(is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    if($message != NULL) {
        $_SESSION['message'] = $message;
    }

    if($messageType != NULL) {
        $_SESSION['messageType'] = $messageType;
    }

    header('location: '.$location);
    exit;
}

function displayMessage(){
    if(!empty($_SESSION['message'])) {
        $message = $_SESSION['message'];

        if(!empty($_SESSION['messageType'])) {
            $messageType = $_SESSION['messageType'];
            if($messageType == 'error') {
                echo '<h1>' . $message . '</h1>';
            } else {
                echo '<h1>' . $message . '</h1>';
            }
        }

        unset($_SESSION['message']);
        unset($_SESSION['messageType']);
    } else {
        echo ' ';
    }
}