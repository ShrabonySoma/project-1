<?php
// initialize units
$units = 150;

// check units to make bill
if($units <= 50)
{
   $bill = $units * 3.50;
   echo $bill;
} elseif($units <= 100)
{
   $bill = 50 * 3.50 + ($units - 50) * 4.0;
   echo $bill;
}elseif($units <= 200)
{
   $bill = 50 * 3.50 + 50*  4.00 + ($units - 100) * 5.20;
   echo $bill;
}else{
    $bill = 50* 3.50 + 50 * 4.00 + 100 * 5.20 + ($units - 200) * 6.50;
    echo $bill;
}
