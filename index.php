<?php
   include('calcCost.php');
   ?>
<!DOCTYPE HTML>
<html lang="en">
   <head>
      <title>Your Household Expenses</title>
      <meta charset='utf-8'>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script>
      <script  src="index.js"></script>
   </head>
   <body>
      <div class="header">
         <h2>Your Household Expenses</h2>
      </div>
      <div class="parent2">
         <div class="test1"><i class="fa fa-archive fa-2x" title="Project 4" ></i></div>
         <div class="test2"><i class="fa fa-archive fa-2x" title="Project 3"></i></div>
         <div class="test3"><a href="index.php"><i class="fa fa-archive fa-2x" title="Project 2"></i></a></div>
         <div class="test4"><a href="https://p1-faisalbaz.000webhostapp.com/" target="_blank"><i class="fa fa-archive fa-2x" title="Project 1"></i></a></div>
         <div class="mask2"><i class="fa fa-home fa-5x" ></i></div>
      </div>
      <form action="calcCost.php" method="post" >
         <div class="input-group">
            Taxable Quantity:
         </div>
         <div class="input-group">
            <span class='spanText'>Enter only numeric value here.</span>
            <input type='text' name='productQty' value="<?php echo $productQty; ?>" size="10">
            <span class='spanText'>*</span>
         </div>
         <div class="input-group">
            Cost: 
         </div>
         <div class="input-group">
            <input type="text" name="productPrice"  value="<?php echo $productPrice; ?>" size="10" />
            <span class='spanText'>*</span>
         </div>
         <div class="input-group">
            State Tax Rate:
         </div>
         <div class="input-group">
            <span class='spanText'>Enter your State Tax Rate here.</span>
            <input type="text" name="StateTaxRate"  value="<?php echo $StateTaxRate; ?>" size="10" />
            <span class='spanText'>*</span>
         </div>
         <div class="input-group">
            Non Taxable Quantity:
         </div>
         <div class="input-group">
            <span class='spanText'>Enter only numeric value here.</span>
            <input type='text' name='productQtyNT' value="<?php echo $productQtyNT; ?>" size="10">
            <span class='spanText'>*</span>
         </div>
         <div class="input-group">
            Cost: 
         </div>
         <div class="input-group">
            <input type="text" name="productPriceNT"  value="<?php echo $productPriceNT; ?>" size="10" />
            <span class='spanText'>*</span>
         </div>
         <div class="input-group">
            <label>Terms and Conditions</label>
            <textarea style="resize: none;" rows="5" cols="45" name="terms" readonly >This application is designed as part of Project 2 for CSCI E-15.</textarea>
         </div>
         <div class="container">
            <section>
               <input id="permitted" type="checkbox">
               <label for="permitted" class="side-label">In order to continue,accept our terms and conditions.</label>
               <button type="submit" class="input-group">Household Cost</button>
            </section>
         </div>
         <input type="hidden" name="formSubmitted" value="true" />
      </form>
   </body>
</html>