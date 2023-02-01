<?php
include "../config/conexion.php";

print_r($_POST);
$sql = "INSERT into alumnos values('', '$_POST[nombre]', '$_POST[nota]', '$_POST[nota_redonda]')";

mysqli_query($conexion, $sql);

echo "<script>
window.location = '../../view/mostrar_vista.php'
</script>";