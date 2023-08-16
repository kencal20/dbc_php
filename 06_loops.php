<?php
for( $c = 0; $c <=10; $c++)
{
    echo $c ,'<br/>';
} 

$cart = array('Indomie','Sneakers','Biscuits');
//for loop
for( $i = 0; $i<count($cart);$i++)
{
echo $i,' ';
}
// foreach loop
foreach($cart as $t)
{
    echo $t ,'<br/>';
}
//looping through associative arrays
$student =[

    'Name'=>'Ama',
    'DOB'=>"29/10/2001",
    'Contact'=>'025855462'
];

foreach($student as $t => $student)
{
    echo $student,'<br/>';
}

foreach($cart as $t =>$cart )
{
    echo $t,'=>',$cart,'<br/>';
}

$a=0;
while ($a < 10) {

   echo $a;
   $a++;
}

// do {
//     echo $a;
//     $a++;
// } while ($a <= 10);
// ?>