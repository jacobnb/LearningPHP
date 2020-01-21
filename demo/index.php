<?php
include("./include/header_1.inc");
// Title needs to be different from SEO
echo'
    <title>First PHP Page</title>
';
include("./include/header_2.inc");
/* A variable and array */
$num = 5;
$num2 = 10;
$mult = $num*$num2;
echo'
<h1>The results of the operation = ' . $mult . '</h1>';
$states = array('VT', 'NH', 'ME');
$names = array('VT'=>'Vermont', 'NH'=>'New Hampshire', 'ME'=>'Maine');
// associative array
$exams = array('exam1' => 89, 'exam2' => 90, 'exam3' => 100);
echo'<h1>'.$states[0].'</h1>';
print_r($states);
// echo'<h1>'.$exams.'</h1>';
echo'<table><tr><td>State Name</td><td>State Abbr.</td></tr>';
    foreach ($states as $x) {
        echo '<tr><td>'.$names[$x].'</td><td>'.$x.'</td></tr>';
    }
echo '</table>';
   
echo'
</div> <!-- id=container -->';
include("./include/footer.inc");
?>