<?php
require('../config/database.php');
header('Content-Type: text/html; charset=utf-8');

// --- Insertar ciudad ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $country_id = $_POST['country_id'];
    $city_name  = $_POST['city_name'];

    if (!empty($country_id) && !empty($city_name)) {
        $query = "INSERT INTO cities (name, region_id) VALUES ($1, $2)";
        $res = pg_query_params($conn_supa, $query, array($city_name, $country_id));
        echo $res ? "<script>alert('Ciudad registrada correctamente');</script>"
                  : "<script>alert('Error al registrar la ciudad');</script>";
    }
}

// --- Cargar países ---
$query_countries = "SELECT id, name FROM countries ORDER BY name ASC";
$result_countries = pg_query($conn_supa, $query_countries);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Market-App || Add Region</title>
  <link rel="icon" type="image/png" href="icons/market_main.png"/>
</head>
<body bgcolor="#D2D9D3">

    <center><h1>REGIONS</h1></center><br>

  <form method="POST" action="">
    <table border="5" align="center">
        <tr><td><label>Name: </label><tr>
        <tr><td><input type="label" name="ncountry" required><br></td></tr>
        <tr><td><label>Abbrev: </label><tr>
        <tr><td><input type="label" name="abbrevcountry" required><br></td></tr>
        <tr><td><label>Code: </label><tr>
        <tr><td><input type="label" name="codecountry" required><br></td></tr>
        <center>
        <tr><td><label>País:</label></td></tr>
        <tr><td><select name="country_id" required>
            <option value="">--Seleccione un país--</option>
            <?php while ($row = pg_fetch_assoc($result_countries)): ?>
            <option value="<?php echo htmlspecialchars($row['id']); ?>">
            <?php echo htmlspecialchars($row['name']); ?>
            </option>
            <?php endwhile; ?>
        </select></td></tr></center>
        <tr><td align="center"><button style="background-color: rgb(153, 153, 153);"><a href=""></a>Add Region</button><br></tr>
    </table></form>
</body>
</html>