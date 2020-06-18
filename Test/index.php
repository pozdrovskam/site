<?php
//Connect to DB
 $db = mysqli_connect('sql.pozdrovska.tld','root','root','database_name')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
//Performing
$query = "SELECT * FROM table_name";
mysqli_query($db, $query) or die('Error querying database.');

//Put the data on the page
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['first_name'] . ' ' . $row['last_name'] . ': ' . $row['email'] . ' ' . $row['city'] .'<br />';
}
//Closing off the connection
mysqli_close($db);
?>

</body>
</html>
