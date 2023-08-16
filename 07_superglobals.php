<?php
// var_dump($_SERVER)
echo $_GET['course'], "<br/>";

echo $_GET['duration'], "<br/>";

/*Check if  submit button is clicked with the name submit, then store form
elements to Variable
*/
if (isset($_POST['submit'])) {
    //Assign form Name to Variable
    /*
    $name =  $_POST['personName'];
    $dob  =  $_POST['DOB'];

    echo $name, '  ',  $dob;
    */
    //Sanitizing data in the form method method 1
    /*
    $name = htmlspecialchars($_POST['personName']);
    $dob  = htmlspecialchars($_POST['DOB']);
    echo $name, '<br>';
    */

    //method 2
    /*
    $name = fILTER_INPUT(INPUT_POST, 'personName', FILTER_SANITIZE_SPECIAL_CHARS);
    $dob = fILTER_INPUT(INPUT_POST, 'DOB', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
    */

    //method 3

    $name = filter_var($_POST['personName'], FILTER_SANITIZE_SPECIAL_CHARS);
    $dob = filter_var($_POST['DOB'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name,'  ' ,$dob,'<br/>';
}

?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?course='DBC'&duration='200'">Click ME</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <p>Enter Name <input type="text" name="personName" /></p>

    <p>Enter Date <input type="Date" name="DOB" /></p>

    <input type="submit" name="submit" value="Register" />

</form>