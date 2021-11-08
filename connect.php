<?php
$dbconn3 = pg_connect("host=ec2-35-168-65-132.compute-1.amazonaws.com port=5432 dbname=d7sur5qusebtas user=smhwfitqlbltjk password=afb75020abd33ce656f8729a19bc7abc5b93c25351c07f6888de930b8e7a7ad0");
if($dbconn3){
    echo "connect";
}
else{
    echo "error";
}
$result = pg_query($dbconn3,"select * from test");
while($row = pg_fetch_object($result))
{
    echo "\n".$row->username;
}
pg_close($dbconn3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
</body>
</html>