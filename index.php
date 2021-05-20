<?php
require 'Speedometer.php';


Speedometer::convertKmToMiles(10)."<br>";
Speedometer::convertMilesToKm(10)."<br>";

$data=[];
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $data = array_map('trim', $_POST);

    if (isset($data['value'])){
        if (empty($data['value'])){ $data['value']=0;}
    }

    if (isset($data['kmToMiles'])){
        $result = Speedometer::convertKmToMiles($data['value']);
    }

    if (isset($data['milesToKm'])){
        $result = Speedometer::convertMilesToKm($data['value']);
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <title>Static</title>
</head>

<body>
    <div>
        <h1 style="text-align: center">Saisir la distance a convertir</h1>
        <form method="post" action="index.php">
            <div style="display:flex">
            <div style="margin:auto">
                <input type="int" name="value" value="<?php  if (!empty($data['value'])) {echo $data['value'];} ?>">
                <button class="btn btn-primary" name="milesToKm" value="toKm">En km</button>
                <button class="btn btn-primary" name="kmToMiles" value="toMiles">En Miles</button>
            </div>
            </div>
        </form>
        <h1 style="text-align:center"><?php  if (!empty($result)) {echo $result;} ?></h1>

    </div>
 </body>
</html>
