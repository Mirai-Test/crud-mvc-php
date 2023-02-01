<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">

</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <h1>ingresar</h1>
            <form action="../model//insertar.php" method="post" class="w-50">
                <input type="text" placeholder="Nombre" id="nombre" name="nombre" class="form-control" pattern="[A-Z\s]{1,15}" title="Ingrese sólo letras en mayúscula y hasta 15 letras" maxlength="15" required>
                <input type="number" placeholder="Nota" id="nota" name="nota" class="form-control" pattern="[0-9]" step="0.1" min="0" max="10" title="Sólo números entre 0.0 y 10.0" required readonly>
                <input type="number" placeholder="Nota redonda" id="nota_redonda" name="nota_redonda" class="form-control" value="" readonly>
                <input type="submit" value="Guardar" class="btn btn-info form-control">
            </form>
        </div>
    </div>

    <script>
        nota.value = (Math.random()*10).toFixed(1)
        let nota_valor = nota.value.split('.')

        if(nota_valor[1]>=5)
            nota_redonda.value = Math.ceil(nota.value)
        else
            nota_redonda.value = Math.floor(nota.value)

    </script>
</body>

</html>