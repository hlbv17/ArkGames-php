<?php //
//class Conectar
//{
//    protected $dbh;
//
//    protected function Conexion()
//    {
//        try {
//
//            $host = "localhost";
//            $port = 3306;
//            $user = "root"; //USUARIO DE ACCESO A LA BASE DE DATOS
//            $password = ""; //CONTRASENIA DE ACCESO A LA BASE DE DATOS
//            $dbname = "ArkgamesBD"; //NOMBRE DEL ESQUEMA DE LA BASE DE DATOS
//
//            $cadena = "mysql:host={$host};port={$port};dbname={$dbname}";
//            $conectar = $this->dbh = new PDO($cadena,  $user, $password);
//            return $conectar;
//        } catch (Exception $e) {
//            print "¡Error BD!: " . $e->getMessage() . "<br/>";
//            print_r("ERROR DE CONEXION");
//            die();
//        }
//    }
//
//    public function set_names()
//    {
//        return $this->dbh->query("SET NAMES 'utf8'");
//    }
//}

    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=arkgamesbd', 'root', '');
    // See the "errors" folder for details...
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<<<<<<< HEAD
            $host = "localhost";
            $port = 3306;
            $user = "root"; //USURIO DE ACCESO A LA BASE DE DATOS
            $password = ""; //CONTRASENIA DE ACCESO A LA BASE DE DATOS
            $dbname = "arkgamesbd"; //NOMBRE DEL ESQUEMA DE LA BASE DE DATOS
=======
>>>>>>> 0655a58ebf8aa5c37915b8b9572d00d95882e199

?>