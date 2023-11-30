<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/Models/Inscripcion.php");

class InscripcionController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Inscripcion();
    }

    public function index()
    {
        $query = "
        select
            i.id, i.alumno_id, i.clase_id, c.nombre
        from
            inscripciones i
        inner join clases c on
            i.clase_id = c.id
        where
            alumno_id = 2;
        ";



        $query2 = "
        select
            c.id as clase_id, c.nombre
        from
            clases c
        where
            not exists(
            select
                clase_id
            from
                inscripciones i
            where
                i.clase_id = c.id and i.alumno_id = 2
        );
        ";

        $resInscripciones = $this->model->customQuery($query);
        $inscripciones = $resInscripciones->fetch_all(MYSQLI_ASSOC);

        $resFaltantes = $this->model->customQuery($query2);
        $faltantes = $resFaltantes->fetch_all(MYSQLI_ASSOC);

        include $_SERVER["DOCUMENT_ROOT"] . "/views/alumnos/inscripciones.php";
    }

    public function store($idAlumno, $idClase)
    {
        $dataIngresada = $this->model->create([
            "alumno_id" => $idAlumno,
            "clase_id" => $idClase
        ]);

        header("Location: /index.php");
    }

    public function destroy($idInscripcion)
    {
        $this->model->destroy($idInscripcion);

        header("Location: /index.php");
    }
}