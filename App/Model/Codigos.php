<?php

namespace App\Model;

use System\Model;

class Codigos extends Model
{
    /**
     * nombre de la tabla
     */
    protected static $table       = 'codigos';
    /**
     * nombre primary key
     */
    protected static $primaryKey  = 'id';
    /**
     * nombre de la columnas de la tabla
     */
    protected static $allowedFields = ['titulo', 'descripcion', 'codigo', 'lenguaje_id'];
    /**
     * obtener los datos de la tabla en 'array' u 'object'
     */
    protected static $returnType     = 'object';
    /**
     * si hay un campo de contraseña cifrar (true/false)
     */
    protected static $passEncrypt = false;

    protected static $useTimestamps   = true;
    /**
     * $createdField debe ser DATETIME o TIMESTAMPS con condicion null
     * $$updatedField debe ser TIMESTAMPS con condicion null
     * el framework se encarga de enviar las fechas y no BD
     * colocar el nombre de los campos de fecha de la BD
     */
    protected static $createdField    = 'created_at';
    protected static $updatedField    = 'updated_at';

    public static function lista($leng = '')
    {
        if ($leng == '') {
            $sql = "SELECT codigos.id, codigos.titulo, codigos.descripcion, lenguajes.name FROM codigos INNER JOIN lenguajes ON codigos.lenguaje_id = lenguajes.id";
        } else {
            $sql = "SELECT codigos.id, codigos.titulo, codigos.descripcion, lenguajes.name FROM codigos INNER JOIN lenguajes ON codigos.lenguaje_id = lenguajes.id WHERE lenguajes.name = '$leng'";
            // $sql = "SELECT c.id, c.titulo, c.descripcion, c.codigo, c.lenguaje_id, l.nombre as lenguaje FROM codigos c INNER JOIN lenguajes l ON c.lenguaje_id = l.id WHERE l.nombre = '$leng'";
        }

        return self::querySimple($sql);
    }
}
