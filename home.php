<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    include 'PHP/functions.php';

    createPageHeader('Home');
    
   
    
    
//    shuffle($advertisingJewellery);
    $index = rand(0,count($advertisingJewellery)-1);
            
    if($index == 0){
        $sale = "sale";
    }       
    
    echo '<div class = "image"><a href="https://newegg.ca"><img class = "advertising center '.$sale.'" src="'.$advertisingJewellery[$index].'"></a></div>';
        
    
    
    createPageFooter();

?>
   