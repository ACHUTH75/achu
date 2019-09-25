<?.php
function openfun()
{
	$dbhost="local host";
	$dbuser="root";
	$dbpass="1234"
	$db "baba";
	
	$conn= new mysqli($dbhost,$dbuser,$dbpass,$db) or die("connection failued:/n.$conn->error");
	return $conn;
}
function Closecon($conn)
{
	$conn->close();
}
?>