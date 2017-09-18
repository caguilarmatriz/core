<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$target_path = "C:\Users\Proyecto Consultoría\Documents\CoreDocs\_";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
        echo "El archivo ". basename( $_FILES['uploadedfile']['name']). " ha sido subido";
        sleep(5);
    } else{
        echo "Ha ocurrido un error, trate de nuevo!";
    }    
   header("location: panel.html");
?>
