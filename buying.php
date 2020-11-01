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
    
    $code = htmlspecialchars($_POST['code']);
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $city = htmlspecialchars($_POST['city']);
    $comment = htmlspecialchars($_POST['comment']);
    $price = htmlspecialchars($_POST['price']);
    $quantity = htmlspecialchars($_POST['quantity']);

    //If statement for error codes
    
    if(mb_strlen($code) > PRODUCT){
        $codeerror = "Product code can not contain more than ".PRODUCT." characters";
    }
    else{
         if(mb_strlen($code) == 0){
        $codeerror = "Product code Cannot be empty";
    }
        if(strtoupper(substr($code, 0,1)) != 'P'){
            $codeerror = "Invalid product code";
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
    
    if(!is_numeric($price) or (int)$quantity > 0){
        $priceerror = "Invalid Price";
    }
    elseif(($price) > 10000 ){
        $priceerror = 'Price cannot be greater than 10000$';
    }
    
    if(!is_numeric($quantity) or !((int)$quantity == (float)$quantity)){
                $quantityerror= "Invalid quantity";
              
            }
        elseif(($quantity) < 0 or ($quantity) > 99){
                $quantityerror = 'Quantity must in between 0  and 99';
                
            }
    
            
            
    if(mb_strlen($codeerror) == 0 && mb_strlen($fnameerror)== 0 && mb_strlen($lnameerror)== 0 &&mb_strlen($cityerror)== 0 && mb_strlen($commenterror)== 0 && is_numeric($priceerror) == 0 && is_numeric($quantityerror) == 0 ){
          
          $sub_total = $price * $quantity;
          $taxes = $sub_total * 12.05;
          $grand_total = round($sub_total + $taxes,2);

          
          $product = array($code,$fname, $lname, $city, $comment, $price, $quantity, $sub_total, $taxes, $grand_total );
          
          $productStr = json_encode($product);
          
          $myfile = fopen("text.txt", "a") or die("File not found");
      
         fwrite($myfile, "\r\n".$productStr);

         fclose($myfile);
         header('Location:orders.php');
          
          exit();

      }
    
 
    
//     if (!preg_match("/[-0-9a-zA-Z.+]+@[-0-9a-zA-Z.+]+.[a-zA-Z]{2,4}/", $emailAddress)){    
//     //Email address is invalid.
//}
    }
       

?>
    

    <form method ="POST" class="myform" action ="buying.php">
        <div class="row">
            <div class="col-25">
                <label for="code">Product Code</label>
            </div>
            <div class="col-75">
                <input type="text" id="code" name="code"  value="<?php echo $code;?>">
                <span class="red"><?php echo $codeerror?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="fname">First Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="fname" name="fname"  value="<?php echo $fname;?>">
            <span class="red"><?php echo $fnameerror?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="lname" value="<?php echo $lname;?>">
            <span class="red"><?php echo $lnameerror?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="city">City</label>
            </div>
            <div class="col-75">
                <input type="text" id="city" name="city" value="<?php echo $city;?>">
            <span class="red"><?php echo $cityerror?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="comment">Comment</label>
            </div>
            <div class="col-75">
                <textarea name="comment" rows="5" cols="40"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="price">Price</label>
            </div>
            <div class="col-75">
                <input type="text" id="price" name="price" value="<?php echo $price;?>">
            <span class="red"><?php echo $priceerror?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="qantity">Quantity</label>
            </div>
            <div class="col-75">
                <input type="text" id="quantity" name="quantity" value="<?php echo $quantity;?>">
            <span class="red"><?php echo $quantityerror?></span>
            </div>
        </div>
          
        <br>
        <br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" name="clear" value="Clear">
                   
        </form>
<?php
createPageFooter();

?>