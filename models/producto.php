<?php

require_once 'config/db.php';
require_once 'categoria.php';

class Producto extends Categoria{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    function getId(){
        return $this->id;
    }

    function getCategoria_id(){
        return $this->categoria_id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function getPrecio(){
        return $this->precio;
    }

    function getStock(){
        return $this->stock;
    }

    function getOferta(){
        return $this->oferta;
    }

    function getFecha(){
        return $this->fecha;
    }

    function getImagen(){
        return $this->imagen;
    }

    function setId($id){
        $this->id = $id;
    }

    function setCategoria_id($categoria_id){
        $this->categoria_id = $categoria_id;
    }
    
    function setNombre($nombre){
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio){
        $this->precio = $precio;
    }

    function setStock($stock){
        $this->stock = $stock;
    }


    function setOferta($oferta){
        $this->oferta = $oferta;
    }


    function setFecha($fecha){
        $this->fecha = $fecha;
    }

    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getAll(){
        $query = "SELECT * FROM productos";
        $productos = $this->db->query($query);
        return $productos;
    }

    public function getRandom(){
        $productosrandom = $this->db->query("SELECT * FROM productos ORDER BY RAND() LIMIT 6");
        return $productosrandom;
    }

	public function getAllCategory(){
		$productoscategoria = $this->db->query("SELECT * FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria WHERE p.id_categoria = {$this->getCategoria_id()}");
		return $productoscategoria;
	}

    public function getOne(){
        $producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()}");
        return $producto->fetch_object();
    }

    public function save(){
        $query = "INSERT INTO productos VALUES(NULL, {$this->getCategoria_id()}, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, 1, CURDATE(), '{$this->getImagen()}')";
        $save = $this->db->query($query);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

    public function edit(){
        $query = "UPDATE productos set nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()} WHERE id={$this->id};";
        $save = $this->db->query($query);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

    public function delete(){
        $sql = "DELETE FROM productos WHERE id={$this->id}";
        $delete = $this->db->query($sql);

        $result = false;
        if($delete){
            $result = true;
        }

        return $result;
    }
}

?>