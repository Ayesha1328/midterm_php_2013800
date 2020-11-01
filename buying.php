<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'PHP/functions.php';

createPageHeader('Products');
    
   
    
    
    // defining variables and set to empty values
    
    $code = $fname = $lname =$city = $comment = $price = $quantity = "";
    $codeerror = $fnameerror = $lnameerror =$cityerror = $commenterror = $priceerror = $quantityerror = "";
    
    
    //isset function checks to see if the items has been set
    
    if(isset($_POST['submit'])){
    
    $code = htmlspecialchars($POST['code']);
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $city = htmlspecialchars($_POST['city']);
    $comment = htmlspecialchars($_POST['comment']);
    $price = htmlspecialchars($POST['price']);
    $quantity = htmlspecialchars($_POST['quantity']);

    //If statement for error codes
    
    if(mb_strlen($code) > PRODUCT){
        $codeerror = "Product code can not contain more than ".PRODUCT." characters";
    }
    else{
         if(mb_strlen($code) == 0){
        $codeerror = "Product code Cannot be empty";
    }
    }
    
    
    if(mb_strlen($fname) > FNAMESIZE){
        $fnameerror = "First name can not contain more than ".FNAMESIZE." characters";
    }
    else{
        if(mb_strlen($fname) == 0){
             $fnameerror = "First name can not empty";
        }
    }
    
    
    if(mb_strlen($lname) > LNAMESIZE){
        $lnameerror = "Last name can not contain more than ".LNAMESIZE." characters";
    }
    else{
        if(mb_strlen($lname) == 0){
             $lnameerror = "Last name can not empty";
        }
    }

    if(mb_strlen($city) > CITYSIZE){
        $cityerror = "City can not contain more than ".CITYSIZE." characters";
    }
    else{
        if(mb_strlen($city) == 0){
             $cityerror = "City can not empty";
        }
    }
    
    if(mb_strlen($comment) > COMMENTSIZE){
        $commenterror = "Comments can not contain more than ".COMMENTSIZE." characters";
    }
    
      
      
    if(mb_strlen($codeerror) == 0 && mb_strlen($fnameerror)== 0 && mb_strlen($lnameerror)== 0 &&mb_strlen($cityerror)== 0 && mb_strlen($commenterror)== 0 ){
          header('Location:customer-success.php');
          $sub_total = $price * $quantity;
          $taxes = $sub_total * 12.05;
          $grand_total = $sub_total + $taxes;
          round($grand_total, 2);
          exit();

      }
    
 
    
//     if (!preg_match("/[-0-9a-zA-Z.+]+@[-0-9a-zA-Z.+]+.[a-zA-Z]{2,4}/", $emailAddress)){    
//     //Email address is invalid.
//}
    }
       

?>
    

        <form method ="POST" action ="buying.php">
            Product Code:
            <input type="text" name="code" value="<?php echo $code;?>">
            <span class="red"><?php echo $codeerror?></span>
            <br>
            First Name:
            <input type="text" name="fname" value="<?php echo $fname;?>">
            <span class="red"><?php echo $fnameerror?></span>
            <br>
            Last Name:
            <input type="text" name="lname" value="<?php echo $lname;?>">
            <span class="red"><?php echo $lnameerror?></span>
            <br>
            City:
            <input type="text" name="city" value="<?php echo $city;?>">
            <span class="red"><?php echo $cityerror?></span>
            <br>
            Comment:
            <textarea name="comment" rows="5" cols="40"></textarea>
            <br>
           
            
            <br>
            <br>
            
            <input type="submit" name="submit" value="Save">
            <input type="reset" name="clear" value="Clear">
                   
        </form>
<?php

   createPageFooter();
   
  ?>