<?php
function deleteEntry($id){
	//your code goes here
	$sql_query="DELETE FROM users WHERE user_id=".$id;
	mysql_query($sql_query);
}


//Solution code(copy into deleteEntry)
//$sql_query="DELETE FROM users WHERE user_id=".$id;
//mysql_query($sql_query);
?>

