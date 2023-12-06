<?php 

require_once 'config/db.php';

class Categoria{
    private $id;
    private $nombre;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }


    function getId(){
        return $this->id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setId($id){
        $this->id = $id;
    }

    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getAll(){
        $query = "SELECT id, nombre FROM categorias";
        $categoria = $this->db->query($query);
        return $categoria;
    }

    public function getOne(){
        $query = "SELECT * FROM categorias WHERE id={$this->id}";
        $categoria = $this->db->query($query);
        return $categoria->fetch_object();
    }

    public function save(){
        $query = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}')";
        $save = $this->db->query($query);

        $result = false;
        if($save){
            $result = true;
        }

        return $result;
    }
}

?>