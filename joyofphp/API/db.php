 <?php
$servername = "sql201.infinityfree.com";
$username = "if0_36349069";
$password = "onemillionfrogs";

$mysqli = new mysqli('$servername', '$username', '$password', 'Cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("Cars");
 
?>