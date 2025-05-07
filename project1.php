<?php 
//initialize Number
$Number = 15;
// check the number is positive or negative
// check the number is even or odd

if($Number > 0)
{ 
  if($Number %2 === 0)
  {
    echo("The Number $Number is positive and Even Number");
  }else{
    echo("The Number $Number is positive and Odd number");
  }
}elseif ( $Number < 0  )
{
  if ($Number %2 === 0)
  {
    echo("The Number $Number is Negative and Even Number");
  }else{
    echo("The Number $Number is Negative and Odd number");
  } 
}else
 {
    echo("The Number $Number is zero");
 }
?>