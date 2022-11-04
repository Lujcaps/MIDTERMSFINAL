<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Vendo machine</title>
</head>
<body>
<h1>Vendo Machine</h1>

<form method = "get">
 <fieldset class="fieldset">
  <legend >Product</legend>
  <input type="checkbox" name="sodas[]" id="sodasCoke" value = "Coke" > <label for = "sodasCoke">Coke - ₱15</label><br>
  <input type="checkbox" name="sodas[]" id="sodasSprite" value = "Sprite"> <label for = "sodasSprite">Sprite - ₱20</label><br>
  <input type="checkbox" name="sodas[]" id="sodasRoyal" value = "Royal"> <label for = "sodasRoyal">Royal - ₱20</label><br>
  <input type="checkbox" name="sodas[]" id="sodasPepsi" value = "Pepsi"> <label for = "sodasPepsi">Pepsi - ₱15</label><br>
  <input type="checkbox" name="sodas[]" id="sodasMountaindew" value = "Mountaindew"> <label for = "sodasMountaindew">Mountain Dew - ₱20</label><br>
  
</fieldset>
<fieldset class="fieldset">
  <legend>Options</legend>
  <label for="size">Size:</label>
<select name="size[]" id="sizes">
  <option value="Regular">Regular </option>
  <option value="UpSize">Up-Size (add ₱5)</option>
  <option value="Jumbo">Jumbo (add ₱10)</option>
</select>

<label for="QtySoda"> Quantity: </label>
<input type="number" name="QtySoda" id="QtySoda" min="1" max="9999">
<input type="submit" name="CheckOutbtn" value ="Check Out">
</fieldset>
</form>

<?php
 if(isset($_GET['CheckOutbtn'])) {
    if(empty($_GET['sodas'])){
        echo '<hr>';
        echo '<b>No Selected Product, Try Again</b>';
    }
    }
error_reporting(0);
if(isset($_GET['CheckOutbtn']) &&
       isset($_GET['sodas']) && 
       isset($_GET['size']) && 
       isset($_GET['QtySoda'])){
echo '<hr>';
// echo '<b>No Selected Product, Try Again</b> <br>';
echo '<b>Purchase Summary:</b> <br>';

        $arrSoda = $_GET['sodas'];
        $arrSize = $_GET['size'];
        $SodaQty = $_GET['QtySoda'];

        foreach($arrSoda as $key => $SodaValue){
            foreach($arrSize as $key => $SizeValue){

                if (($SodaValue == "Coke")&&($SizeValue == "Regular")){
                    $coke = 15 * $SodaQty;
                    $QtyCoke = $SodaQty;

                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }      
                                  
                }
              
               


                if (($SodaValue == "Sprite")&&($SizeValue == "Regular")){
                    $sprite = 20 * $SodaQty;
                    $QtySprite = $SodaQty;
                    if($SodaQty > 1){
                        echo '&#9; <li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }      
                                 
                }


                if (($SodaValue == "Royal")&&($SizeValue == "Regular")){
                    $royal = 20 * $SodaQty; 
                    $QtyRoyal = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }    
                                   
                }
                if (($SodaValue == "Pepsi")&&($SizeValue == "Regular")){
                    $pepsi = 15 * $SodaQty;
                    $QtyPepsi = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }    
                                      
                }
                if (($SodaValue == "Mountaindew")&&($SizeValue == "Regular")){
                    $MountainDew = 20 * $SodaQty;
                    $QtyMountaindew = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }    
                     
                }

                
                if (($SodaValue == "Coke")&&($SizeValue == "UpSize")){
                    $coke = 20*$SodaQty;
                    $QtyCoke = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }    
                                      
                }


                if (($SodaValue == "Sprite")&&($SizeValue == "UpSize")){
                    $sprite =25*$SodaQty; 
                    $QtySprite = $SodaQty;

                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }   
                                 
                }
                if (($SodaValue == "Royal")&&($SizeValue == "UpSize")){
                    $royal = 25*$SodaQty; 
                    $QtyRoyal = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }   
                                      
                }
                if (($SodaValue == "Pepsi")&&($SizeValue == "UpSize")){
                    $pepsi = 20 * $SodaQty;
                    $QtyPepsi = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }   
                                         
                }
                if (($SodaValue == "Mountaindew")&&($SizeValue == "UpSize")){
                    $MountainDew = 25 * $SodaQty;
                    $QtyMountaindew = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }   
                       
                }

                if (($SodaValue == "Coke")&&($SizeValue == "Jumbo")){
                    $coke = 25 * $SodaQty; 
                    $QtyCoke = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$coke,'</li> <br>';
                    }   
                                    
                }
                if (($SodaValue == "Sprite")&&($SizeValue == "Jumbo")){
                    $sprite = 30 * $SodaQty;
                    $QtySprite = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$sprite,'</li> <br>';
                    }   
                                  
                }
                if (($SodaValue == "Royal")&&($SizeValue == "Jumbo")){
                    $royal= 30 * $SodaQty; 
                    $QtyRoyal = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$royal,'</li> <br>';
                    }   
                                      
                }
                if (($SodaValue == "Pepsi")&&($SizeValue == "Jumbo")){
                    $pepsi= 25 * $SodaQty;
                    $QtyPepsi = $SodaQty; 
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$pepsi,'</li> <br>';
                    }   
                                      
                }
                if (($SodaValue == "Mountaindew")&&($SizeValue == "Jumbo")){
                    $MountainDew = 30 * $SodaQty;
                    $QtyMountaindew = $SodaQty;
                    if($SodaQty > 1){
                        echo '<li> ',$SodaQty,' ','pieces of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }
                    else
                    {
                    echo '<li> ',$SodaQty,' ','piece of ',$SizeValue,' ',$SodaValue,' amounting to ',' ₱ ',$MountainDew,'</li> <br>';
                    }   
                      
                }
            }
        }
        

        $TotalAmnt = $coke + $sprite + $royal + $pepsi + $MountainDew;
        $TotalSoda = $QtyCoke + $QtySprite + $QtyRoyal + $QtyPepsi +  $QtyMountaindew;
        echo '<b>Total Number of Items: </b>',$TotalSoda,'<br>';
        echo '<b>Total Amount: </b>',$TotalAmnt ,'<br>';
        
    }

   

    

?>

</body>
</html>