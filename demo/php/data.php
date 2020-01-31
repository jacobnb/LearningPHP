<?php
include("../include/header_1.inc");
echo '
<title>Data Display Example</title>
';
include("../include/header_2.inc");
echo"<form action='#' method='post' name='data'>
First name: <input name='fn'/>
Last name: <input name ='ln'/>
<input type='submit' value='Check Data' names='s'/>
<input type='reset' value='Clear Data' name='r'/>
</form>";

// if(isset($_POST['fn']) && isset($_POST['ln']))
// {
// 	echo'<h1>The variable is set.</h1>';
// }
// else{
// 	echo'<h1>No Variable found.</h1>';
// }
function form_control($name){
	return !empty($_POST[$name]) and isset($_POST[$name]);
}
if(form_control('fn') and form_control('ln')){
	echo"
	<div id=\"feedback\">
	Hello ".$_POST['fn'].' '.$_POST['ln']." thanks for your data.
	</div>";
}
/* 
	htmlspecialchars() - convert special chars to ascii so no script attacks.
	trim() - trim beggining and trailing whitespace.
	
*/
include("../include/footer.inc");
?>