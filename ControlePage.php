<?php 
$error= array();
$inputs= array();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $name => $value) {
        if (empty($_POST[$name])) {
            $error[$name]= $name_error;
            $name_error= "ERROR: leeg veld";
        } else {
            $input_form = trimmen($value);
            if(!preg_match("/^[a-zA-Z-' ]*$/", $input_form)){
                $name_error= "ERROR: tekst mag alleen letters en spatie bevatten";
                $error[$name]= $name_error;
            } 
            $inputs[$name]= $input_form;
        }
    }
}

function trimmen($parameter) {
    $parameter = trim($parameter);
    $parameter = stripcslashes($parameter);
    $parameter = htmlspecialchars($parameter);
    return $parameter;
}

?>