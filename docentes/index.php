<?php
@session_start();
if(!isset($_SESSION['user@metodista']))
    header("location: /".$config['rutaBase']."/");
elseif($_SESSION['role'] != 'docentes')
    header("location: ".$_SESSION['location']);

?>