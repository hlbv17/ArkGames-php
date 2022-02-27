<?php
require_once '../../config/Conexion.php';
class ProductosDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function listar() {
        // sql de la sentencia
        $sql = "SELECT * FROM productos p, categorias c WHERE p.id_categoria = c.id_categoria AND prod_estado=1";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // retorna datos para el controlador
        return $productos;
    }

    public function insertar()
    {
    }

    public function actualizar()
    {
    }

    public function eliminar()
    {
    }

    public function buscar($parametro)
    {
    }
}
