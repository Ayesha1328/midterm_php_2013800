<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//creating header funtion without using echo
function createPageHeader($title)
{   #common HTML page Header
    
    
    ?> <!DOCTYPE HTML>
            
            <head>
                <meta charset=\"UTF-8\">
                <title><?php echo $title; ?></title>
                 <link rel="stylesheet" href="<?php echo FILE_CSS; ?>">
            
            </head>
            <body>
                <header class="container">
                    <div class ="child1">
                     <?php
                        displaylogo();
                      ?>
                       
                    </div>
                    <div class ="child2">
                        <?php
                        displayNavigationMenu();
                        ?>
                    </div>
                </header>
    
    <?php
          
}

function displayLogo(){
    
    echo '<br><br><img id="gj" src = " '.PICTURE_LOGO.'">';
    
}

//function for images folder
define('FOLDER_IMAGES', 'images/');
define('PICTURE_RING1', FOLDER_IMAGES."ring1.jpg");
define('PICTURE_RING2', FOLDER_IMAGES."ring2.png");
define('PICTURE_RING3', FOLDER_IMAGES."ring3.jpg");
define('PICTURE_RING4', FOLDER_IMAGES."ring4.jpg");
define('PICTURE_RING5', FOLDER_IMAGES."ring5.jpg");
define('PICTURE_CHAIN1', FOLDER_IMAGES."c1.jpg");
define('PICTURE_CHAIN2', FOLDER_IMAGES."c2.jpg");
define('PICTURE_B1', FOLDER_IMAGES."b1.jpg");
define('PICTURE_B2', FOLDER_IMAGES."b2.jpg");
define('PICTURE_B3', FOLDER_IMAGES."b3.jpg");
define('PICTURE_B4', FOLDER_IMAGES."b4.jpg");
define('PICTURE_LOGO', FOLDER_IMAGES."logo.png");



//creating an array for the other electronics by declaring global variable
$advertisingJewellery = array(PICTURE_RING1, PICTURE_CHAIN2, PICTURE_B2, PICTURE_RING4, PICTURE_RING2 );

//function for CSS folder
define('FOLDER_CSS', 'CSS/');
define('FILE_CSS', FOLDER_CSS.'style.css');

//functions for Pages
define('PAGE_HOME', 'home.php');
define('PAGE_BUYING', 'buying.php');
define('PAGE_ORDERS', 'orders.php');

// functions for buying page

define('PRODUCT', 12);
define('FNAMESIZE', 20);
define('LNAMESIZE', 20);
define('CITYSIZE', 8);
define('COMMENTSIZE', 200);

//creating footer function without using echo
function createPageFooter()
{   #common HTML page Footer
    
    echo '<div class = "footer">';
     displayCopyright();
    ?>
               
            </body>
            
    
    <?php
    
   
   
}

//function to display copyright
function displayCopyright(){
    
    echo "<span id='copyright'> &copy; Ayesha Begum Shaik (2013800) ".date("Y")."</span>";
    
}


//function for navigation menu
function displayNavigationMenu(){
    
    echo '<div class = "topnav">';
    echo '&nbsp<a href = " '.PAGE_HOME.'">HOME</a>';
    echo '&nbsp<a href = "'.PAGE_BUYING.'">PRODUCTS</a>';
    echo '&nbsp<a href = "'.PAGE_ORDERS.'">ORDERS</a>';
    
}

?>