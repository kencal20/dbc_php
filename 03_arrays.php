<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $cart = array('indomie','Benz','BMW');
    print_r($cart);
    echo '<br/>', $cart[0],' ',$cart[1],' ',$cart[2];

    $subjects = [];
    $subjects[0]='maths';
    $subjects[1]='English';
    echo '<br/>';
    print_r( $subjects);
  
    $student =[

        'Name'=>'Ama',
        'DOB'=>"29/10/2001",
        'Contact'=>'025855462'
    ];
    echo '<br/>';
    echo $student['Name'] ,' - ', $dbcstudent['Contact'], '<br/>';
    $dbcstudent =[
        [
        'Name'=>'Ama',
        'DOB'=>"29/10/2001",
        'Contact'=>'025855462'
        ],
        
        [
        'Name'=>'KOFI',
        'DOB'=>"29/10/2001",
        'Contact'=>'025855462'
        ]
    ];

    echo $dbcstudent[0]['Contact'],'<br/>';
    echo $dbcstudent[1]['Contact'],'<br/>';

    echo 'Count Number of items in the array <br/>';
    echo count($cart),'<br/>';
    array_push($cart,'Laptop');
    print_r($cart);
    echo '<br/>';


    echo 'Remove items from array <br/>';
    array_pop($cart);
    print_r ($cart);

    echo 'add item @  any index of an array';
    array_unshift($cart,'Gob3');
    print_r ($cart);

    echo 'remove item @ any index in an array <br/>';
    unset($cart[3]);

    ?>
</body>
</html>