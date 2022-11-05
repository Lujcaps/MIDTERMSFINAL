<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vendo Machine</title>
   </head>
   <body>
      <h2>Vendo Machine</h2>
      
      <?php
         $arrDrinks = array('Coke' => 15, 'Sprite' => 20, 'Royal' => 20, 'Pepsi' => 15, 'Mountain Dew' => 20,);
         $arrSizes = array('Regular Size' => 'Regular', 'Up-size (add ₱5)' => 'Up-size', 'Jumbo (add ₱10)' => 'Jumbo');
         ?>

      <form method="POST">
         <fieldset style="width: 370px;">
            <legend>Products:</legend>
            <?php
               if(isset($arrDrinks)){
                   foreach ($arrDrinks as $Dkey => $Dvalue) {
                       echo "<input type='checkbox' name='Dcheckbox[". $Dkey ."]' value='". $Dvalue ."'>
                       <label>". $Dkey. " - ₱". $Dvalue."</label><br>";
                   }
               }
               ?>
         </fieldset>

         <fieldset style="display: inline-block;">
            <legend>Options:</legend>
            <label for="Selectsize">Size</label>
            <select name="Selectsize" id="Selectsize">
            <?php
               if (isset($arrSizes)) {
                   foreach ($arrSizes as $Skey => $Svalue) {
                       echo "<option value='". $Svalue."'>". $Skey."</option>";
                   }
                }
               ?>
            </select>

            <label for="Quantity">Quantity</label>
            <input type="number" name="Quantity" id="Quantity" min="0" max="100" value="0">
            <button type="submit" name="Process">Check Out</button>
         </fieldset>
      </form>
      <?php
         if (isset($_POST['Process'])) {
         
             if(isset($_POST['Dcheckbox']) and isset($_POST['Selectsize'])){
         
                 $Qty = $_POST['Quantity'];
                 $size = $_POST['Selectsize'];
                 $process = $_POST['Dcheckbox'];

                 if ($Qty == 1) {
                     $set = "piece";   
                 }
                 else{
                     $set = "pieces";   
                 }
         
                 if ($size == 'Regular') {
                     $addons = 0;   
                 }
                 elseif ($size == 'Up-size') {
                     $addons = 5;  
                 }
                 elseif ($size == 'Jumbo') {
                     $addons = 10;  
                 }
                 echo '<hr>';
                 echo "<h3>Purchase Summary</h3>";
                 
                 foreach ($process as $Pkey => $Pvalue) {
                     echo
                     "<ul>
                         <li>" . $Qty ."  ". $set ." of ". $size ." ". $Pkey ." amounting to ₱" . $Totalval =
                         intval($Pvalue) * intval($Qty) + ($addons * intval($Qty)) .
                         "</li>
                     </ul>";
                 }
                     $Totalitems = ($Qty * sizeof($process));
                     $grandTotal = (array_sum($process) + $addons * $Qty) * $Qty;
         
                     echo "<label><b>Total number of items:</b> </label>". $Totalitems ."<br>";
                     echo "<label><b>Total number amount:</b> </label>". $grandTotal;
                    
             }
             else{
                echo '<hr>';
                echo "No Selected product; please try again.";
             }
         }
         ?>
   </body>
</html>