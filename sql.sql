CREATE DATABASE escuela;
use escuela;
    create table alumnos(
        idEstu int AUTO_INCREMENT PRIMARY KEY,
        NombreEstu varchar(15) not null,
        Nota_Estu float(2,1) not null,
        NotaResond int not null
    );