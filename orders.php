<?php

 include 'PHP/functions.php';

    createPageHeader('Home');


   
    echo "<p>Your product added successfully</p>";
  ?>

 <div  class="order">
<table> 
    <tr>
        <th>Product Code </th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>City</th>
        <th>Comment</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Sub Total</th>
        <th>Taxes</th>
        <th>Grand Total</th>
            
    </tr>
    <?php
   
    $file = fopen('text.txt','r');
    while(!feof($file)){
        $order = json_decode(fgets($file));
    
    
    ?>
    <tr>
        <td><?php echo $order[0]?></td>
        <td><?php echo $order[1]?></td>
        <td><?php echo $order[2]?></td>
        <td><?php echo $order[3]?></td>
        <td><?php echo $order[4]?></td>
        <td><?php echo $order[5]?> $</td>
        <td><?php echo $order[6]?></td>
        <td class="<?php 
        checkclass($order[7]);
        echo  $GLOBALS['classforcolor']?>"><?php echo $order[7]?> $</td>
        <td><?php echo $order[8]?></td>
        <td><?php echo $order[9]?></td>
    </tr>
    <?php }?>
</table>
 </div>
    
<?php 
    createPageFooter();

?>
