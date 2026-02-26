<?php
$HOSTNAME='wp.kongu.edu';
$USERNAME='25itc10';
$PASSWORD='25itc10';
$DATABASE='25itc10';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con)
{
    echo "connected";
}
else
{
    die(mysqli_connect_errno($con));
}

?>  