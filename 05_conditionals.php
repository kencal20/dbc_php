<?php
//Decision Making(If,coalesce,Switch)
$score = '<input/>';
if ($score >= 100) {
    echo 'Pass';
} elseif ($score == 0) {
    echo 'fail';
} else {
    echo 'Try again';
}
echo '<br/>';
// Ternary Operator
$age = 15;
echo !empty($age) ? $age : 'Age is empty';

echo '<br/>';

$sal = null;
echo $sal ?? 'null';

echo '<br/>';
//Switch
$day = 'Friday';
switch ($day) {
    case 'Monday';
        echo 'Start of week';
        break;
    case 'Friday';
        echo 'End of school week';
        break;
    default:
        echo 'holiday';
        break;
}
