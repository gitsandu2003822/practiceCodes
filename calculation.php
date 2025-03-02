<?php
// Get input from the user
$unitprice = readline("Enter unit price: ");
$qty = readline("Enter quantity: ");

// Calculate total price
$total = $unitprice * $qty;

// Display the result
echo "Total: " . $total . "\n";
?>
