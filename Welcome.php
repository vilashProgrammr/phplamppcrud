<?php
function deleteEntry($id){
	//your code goes here
	//added 25/1 dj 7777
	$sql_query="DELETE FROM users WHERE user_id=".$id;
	mysql_query($sql_query);
}


//Solution code(copy into deleteEntry)
//$sql_query="DELETE FROM users WHERE user_id=".$id;
//mysql_query($sql_query);
?>

