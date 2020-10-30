<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//creating header funtion without using echo
function createPageHeader($title)
{   #common HTML page Header
    
    displayNavigationMenu();
    ?> <!DOCTYPE HTML>
            <html>
            <head>
                <meta charset=\"UTF-8\">
                <title><?php echo $title; ?></title>
                <!-- comment --><link rel="stylesheet" href="<?php echo FILE_CSS; ?>">
            </head>
            <body>
        
    <?php
        
}


//function for CSS folder
define('FOLDER_CSS', 'CSS/');
define('FILE_CSS', FOLDER_CSS.'style.css');

//functions for Pages
define('PAGE_HOME', 'home.php');
define('PAGE_BUYING', 'buying.php');
define('PAGE_ORDERS', 'orders.php');


//creating footer function without using echo
function createPageFooter()
{   #common HTML page Footer
    ?>
            </body>
            </html>
    
    <?php
    displayCopyright();
}

//function to display copyright
function displayCopyright(){
    
    echo '<br><br>';
    echo "<span id='copyright'> &copy; Ayesha Begum Shaik (2013800) ".date("Y")."</span>";
    
}


//function for navigation menu
function displayNavigationMenu(){
    
    echo '&nbsp<a href = " '.PAGE_HOME.'">HOME</a>';
    echo '&nbsp<a href = "'.PAGE_BUYING.'">PRODUCTS</a>';
    echo '&nbsp<a href = "'.PAGE_ORDERS.'">ORDERS</a>';
    
}

?>