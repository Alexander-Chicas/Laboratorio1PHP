<?php
include 'includes/db.php';
include 'includes/header.php'; // Incluye el encabezado



$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con PHP y MariaDB</title>
    <link rel="stylesheet" href="style.css"> <!-- Asegúrate de enlazar tu CSS -->
</head>
<body>


    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['edad']}</td>
                        <td>
                            <a href='update.php?id={$row['id']}' class='btn btn-warning'>Editar</a>
                            <a href='delete.php?id={$row['id']}' class='btn btn-danger' onclick='return confirm(\"¿Seguro que quieres eliminar?\");'>Eliminar</a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay usuarios registrados.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>
<?php include 'includes/footer.php';