<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor\autoload.php';
require 'config\database.php';

DB::table('calficaciones')->insert(
    ['calificacion' => $_POST['calificacion']],
);

echo "<h1> DATOS SALVADOS</h1><br><a href='inicio.html'>Regresar</a>";