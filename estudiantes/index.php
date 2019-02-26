<?php
@session_start();
if(!isset($_SESSION['user@metodista'])){
    header("location: /".$config['rutaBase']."/");
}elseif($_SESSION['role'] != 'estudiantes'){
    header("location: ".$_SESSION['location']);
}
?>