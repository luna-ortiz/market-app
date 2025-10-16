<?php
require('../config/database.php');
header('Content-Type: text/html; charset=utf-8');

// --- Insertar región ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $region_name  = $_POST['ncountry'];        // nombre de la región
    $region_abrev = $_POST['abbrevcountry'];   // abreviatura
    $region_code  = $_POST['codecountry'];     // código
    $country_id   = $_POST['country_id'];      // id del país (seleccionado del combo)

    // Validar que todos los campos tengan datos
    if (!empty($region_name) && !empty($region_abrev) && !empty($region_code) && !empty($country_id)) {
        // Insertar en tabla regions — los demás campos se llenan solos (por defecto)
        $query = "INSERT INTO regions (name, abrev, code, id_country)
                  VALUES ($1, $2, $3, $4)";
        $res = pg_query_params($conn_supa, $query, array($region_name, $region_abrev, $region_code, $country_id));

        if ($res) {
            echo "<script>
                alert('Region registered successfully');
                window.location.href = 'city.php';
            </script>";
            exit();
        } else {
            echo "<script>
                alert('Error registering region');
                window.location.href = 'region.php';
            </script>";
            exit();
        }
    } else {
        echo "<script>alert('You must fill in all fields');</script>";
    }
}


$query_countries = "SELECT id, name FROM countries ORDER BY name ASC";
$result_countries = pg_query($conn_supa, $query_countries);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Market-App || Add Region</title>
</head>
<body bgcolor="#ae8cdbff">

  <center><h2>Agregar Región / Departamento</h2></center>

  <form method="POST" action="">
    <table border="0" align="center">
        <tr><td><label>Nombre:</label></td></tr>
        <tr><td><input type="text" name="ncountry" required></td></tr>

        <tr><td><label>Abreviatura:</label></td></tr>
        <tr><td><input type="text" name="abbrevcountry" required></td></tr>

        <tr><td><label>Código:</label></td></tr>
        <tr><td><input type="text" name="codecountry" required></td></tr>

        <tr><td><label>País:</label></td></tr>
        <tr><td>
            <select name="country_id" required>
                <option value="">--Seleccione un país--</option>
                <?php while ($row = pg_fetch_assoc($result_countries)): ?>
                    <option value="<?php echo htmlspecialchars($row['id']); ?>">
                        <?php echo htmlspecialchars($row['name']); ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </td></tr>

        <tr><td align="center"><br>
            <tr><td align="center"><button>Register</button></td></tr>
        </td></tr>
    </table>
  </form>

</body>
</html>
