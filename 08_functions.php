<?php

function addnumbers()
{
    echo $total = 2 + 3 ,'<br/>'; 
}

function register($name, $dob)
{
    echo 'Student Name is ', $name,'  ';
    echo 'Date of birth is ', $dob;
}
// function call
addnumbers();
register('Ama', '04-02-2023');
