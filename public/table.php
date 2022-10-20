<?php 
include ("first.php") or die("error1");
$clients=mysqli_query($link, "select c_id from sessions order by c_id")  or die("error2");
while ($client=mysqli_fetch_array("$clents")) {
    echo $client['c_id'], "</br>";
}
?>