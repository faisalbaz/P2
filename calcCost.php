<?php 

$StateTaxRate = "";
$productQty ="";
$productPrice ="";
$productQtyNT = "";
$productPriceNT ="";

function householdCost ($productQty, $productPrice, $productQtyNT, $productPriceNT){
global $StateTaxRate;
	$totalCost = ($productQty * $productPrice) + ($productQtyNT * $productPriceNT) ; 
	$taxrate = ($StateTaxRate / 100) + 1;
	$totalCost = $totalCost * $taxrate; 
	$totalCost = number_format ($totalCost, 2); 
	return $totalCost; 
} 

if (isset($_POST['submitted'])){
	
	if ( is_numeric($_POST['productQty']) & is_numeric($_POST['productPrice']) & is_numeric($_POST['productQtyNT'])  & is_numeric($_POST['productPriceNT'])){
		
		$totalCost = householdCost($_POST['productQty'], $_POST['productPrice'],$_POST['productQtyNT'],$_POST['productPriceNT']);
		echo '<h1> Your total household Spendings:</h1>';
		 echo "<h3> Total: $$totalCost</h3>";
	} else { 
		echo '<p>Only enter numeric product quantities and product price.</p>';
	}
}

?>