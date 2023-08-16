<?php

function addnumbers()
{
    echo $total = 2 + 3, '<br/>';
}

function register($name, $dob)
{
    echo 'Student Name is ', $name, '  ';
    echo 'Date of birth is ', $dob;
}

function calElevy($amt)
{
    $eLevyTax = 1 / 100;
    $amtCharged = $eLevyTax * $amt;

    return $amtCharged;
}
$Salary = function ($takehomeAmt)
  {
    $rent = 20 / 100 * $takehomeAmt;

    return $takehomeAmt + $rent;

  };
  
// function call
addnumbers();
register('Ama', '04-02-2023');

echo '<br/>', 'Elevy = ', calElevy(200);

echo '<br/> Amount to take home ', $Salary(500);

?>