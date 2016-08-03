// bit.ly link = http://bit.ly/2aPoLOr
<?php
try 
{
	/**
	* @param the first ??? would be a host name, For example: localhost
	* @param the second ??? would be the dbname which would most likely be $Local
	* @param the third ??? is the username
	* @param the fourth ??? is the password
	*/
	$sql_connection = new PDO('mysql:host=???:3306;dbname=???, ??? , ???);')
}
catch(PDOException $e)
{
	// An Error occured in the connection
}
$stmt = ""; //Sql statement
// The prepare statement helps with sql injection prevention. Even when hardcoding sql commands, I still like the prepare it.
$stmt_execute = $sql_connection->prepare($stmt);
// Made an if statement to check for errors.
if($stmt_execute->execute())
{
	$return_array = $stmt_execute->fetch(PDO::FETCH_ASSOC);
	$num_rows = $stmt_execute->num_rows();	
}
else 
{
	// An error occured in the statement
}
?>
