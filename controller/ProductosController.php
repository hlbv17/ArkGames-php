<?php
require_once '../../models/dao/ProductosDAO.php';
require_once '../../models/dao/CategoriasDAO.php';
require_once '../../models/dto/Producto.php';
require_once '../../models/dto/Categoria.php';

class ProductosController
{

    private $modelo;

    public function __construct()
    {
        $this->modelo = new ProductosDAO();
    }

    // funciones del controlador
    public function index()
    {
        // llamar al modelo
        $resultados = $this->modelo->Listar();

        //llamo a la vista
        require_once '../../views/Catalogo/listar.tabla.php';
    }

    public function guardar()
    {
        // echo var_dump($_POST);
        // echo var_dump($_FILES);


        # Comprovamos que se haya subido un fichero
        if (is_uploaded_file($_FILES["archivo"]["tmp_name"])) {
            # verificamos el formato de la imagen
            if (
                $_FILES["archivo"]["type"] == "image/jpeg" ||
                $_FILES["archivo"]["type"] == "image/pjpeg" ||
                $_FILES["archivo"]["type"] == "image/gif" ||
                $_FILES["archivo"]["type"] == "image/bmp" ||
                $_FILES["archivo"]["type"] == "image/png"
            ) {

                # Escapa caracteres especiales
                $imagen = (file_get_contents($_FILES["archivo"]["tmp_name"]));

                // echo var_dump($imagen);

                $datos = [
                    "id_producto" => $_POST['txtId'],
                    "nombre" => $_POST['txtNombre'],
                    "precio" => $_POST['txtPrecio'],
                    "url_imagen" => $imagen,
                    "id_categoria" => $_POST['selectCategoria'],
                    "prod_estado" => 1
                ];

                // $prod = new Producto();
                // $cat = new CategoriasDAO();
                // $categ = new Categoria("","");
                // $categ = $cat->buscar($_POST['selectCategoria']);
                // $prod->SetProducto($datos);
                // $prod->SetCategoria($categ);

                $datos['id_producto'] > 0
                    ? $this->modelo->actualizar($datos)
                    : $this->modelo->registrar($datos);

                   
                header('Location: index.php');
                echo '<script>alert("Registro guardado con exito")</script>';
                
            } else {
                echo '<script>alert("Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.")</script>';
                // echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
            }
        };
    }


    public function delete()
    {
        $this->modelo->eliminar($_REQUEST['id']);
        header('Location: index.php');
    }

    public function nuevo()
    {
        require_once '../../models/dao/CategoriasDAO.php';

        $con = new CategoriasDAO();
        $lista = $con->listar();

        require_once '../../views/Catalogo/agregar.producto.php';
    }
}
