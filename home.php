<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    include 'PHP/functions.php';

    createPageHeader('Home');
    
   
    
    echo '<div class ="tagline" Find the Perfect Gift>';
    
    
    shuffle($advertisingJewellery);
   
    
    echo '<br><br><img class="advertising" src="'.$advertisingJewellery[0].'">';
    
    
    createPageFooter();

?>
   