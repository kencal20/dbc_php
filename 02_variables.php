<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>

<body>
    <?php
    // Data types: String , Number ,Date, LOB,Objects,resources
    //variables are started with the $ sign
    $Student_Name = 'Kenneth';
    $Amt = 200;

    echo $Student_Name, ' ', $Amt, '<br/>';
    echo $Amt + 900, '<br/>';
    $total = $Amt + 900;
    echo 'The result is =', $total, '<br/>';

    //define stand for const in php
    define('program', 'DBC');
    echo (program);

    // Echoing without concating
    echo "The student name is $Student_Name <br>";
    echo "The student name is {$Student_Name}";


    ?>
</body>

</html>