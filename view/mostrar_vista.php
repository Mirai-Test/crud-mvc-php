<?php
include "../model/read.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">


</head>

<body>

    <div class="row text-center">
        <div class="col">
            <h1>Mostrar</h1>
        </div>
    </div>
    <div class="row m-4">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">IdEstu</th>
                        <th scope="col">NombreEstu</th>
                        <th scope="col">NotaRedond</th>
                        <th scope="col">ASCII</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos as $key => $fila) { ?>
                        <tr>
                            <th scope="row"><?= $fila['idEstu'] ?></th>
                            <td><?= $fila['NombreEstu'] ?></td>
                            <td class="nota"><?= $fila['NotaResond'] ?></td>
                            <td class="ascii"></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>

<script>
    let notas = document.querySelectorAll('.nota');

    notas.forEach(element => {
        let expresion = /[a-z\s]/gi
        let col_nota = element.innerText

        cadenaAscii = col_nota.charCodeAt()
        console.log(cadenaAscii)
        element.nextElementSibling.innerText = cadenaAscii


    });
    //convetir a ascii
</script>