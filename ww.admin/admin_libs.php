<?php
require $_SERVER['DOCUMENT_ROOT'].'/MyCms/ww.incs/basics.php';

function is_admin(){
    if(!isset($_SESSION['userdata'])) return false;
    return(
        isset(
            $_SESSION['userdate']['groups']['_administrators']
        ) ||
        isset(
            $_SESSION['userdate']['groups']['_superadministrators']
        )
    );
}
if(!is_admin()){
    require SCRIPTBASE.'MyCms/ww.admin/login/login.php';
    exit;
}