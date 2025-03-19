<?php
include 'includes/header.php'; 
include 'includes/db.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $edad = $_POST["edad"];

    $sql = "INSERT INTO usuarios (nombre, email, edad) VALUES ('$nombre', '$email', '$edad')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuario agregado correctamente'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<div class="form-container">
    <h2>Agregar Usuario</h2>
    <form action="create.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required>

        <button type="submit">Guardar</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
