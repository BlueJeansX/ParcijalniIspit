<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


if (empty($_POST['nova'])) {
    echo "Ne smije biti prazno polje";
} else {

    //Spremi dobiveni formdata u array
    $formdata = array(
        'nova' => $_POST['nova']
    );

    // encodes the array into a string in JSON format
    // Transformiranje u JSON
    $formdata = json_encode($formdata);
// Zapisivanje novih podataka u datoteku
    file_put_contents(__DIR__ . '/rijeci.json', $formdata);

    //ovaj echo dolje se vjerojatno izvrši u milisekundi pa se ni ne vidi... 
    echo "Uspješno ste sačuvali novu riječ u datoteku!";

    header("Location: index.php");
}
  
  
  
 
  
  
  
  


