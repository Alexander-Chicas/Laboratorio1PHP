<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];

    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', edad=$edad WHERE id=$id";
    if ($conn->query($sql)) {
        echo "<p>Usuario actualizado correctamente.</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>

<form action="" method="post">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    <label>Edad:</label>
    <input type="number" name="edad" value="<?php echo $row['edad']; ?>" required>
    <button type="submit">Actualizar</button>
</form>

<?php include 'includes/footer.php'; ?>
