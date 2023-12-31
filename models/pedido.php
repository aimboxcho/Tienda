<?php


require_once 'config/db.php';

class Pedido{
    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    function getId(){
        return $this->id;
    }

    function getUsuario_id(){
        return $this->usuario_id;
    }

    function getProvincia(){
        return $this->provincia;
    }

    function getLocalidad(){
        return $this->localidad;
    }

    function getDireccion(){
        return $this->direccion;
    }

    function getCoste(){
        return $this->coste;
    }

    function getEstado(){
        return $this->estado;
    }

    function getFecha(){
        return $this->fecha;
    }

    function getHora(){
        return $this->hora;
    }

    function setId($id){
        $this->id = $id;
    }

    function setUsuario_id($usuario_id){
        $this->usuario_id = $usuario_id;
    }
    
    function setProvincia($provincia){
        $this->provincia = $this->db->real_escape_string($provincia);
    }

    function setLocalidad($localidad){
        $this->provincia = $this->db->real_escape_string($localidad);
    }

    function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    function setCoste($coste){
        $this->coste = $coste;
    }


    function setEstado($estado){
        $this->estado = $estado;
    }


    function setFecha($fecha){
        $this->fecha = $fecha;
    }

    function setHora($hora){
        $this->hora = $hora;
    }

    public function getAll(){
        $query = "SELECT * FROM pedidos";
        $pedidos = $this->db->query($query);
        return $pedidos;
    }

    public function getOne(){
        $pedidos = $this->db->query("SELECT * FROM pedidos WHERE id = {$this->getId()}");
        return $pedidos->fetch_object();
    }

    public function save(){
        $query = "INSERT INTO pedidos VALUES(NULL, {$this->getUsuario_id()}, '{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirm', CURDATE(), CURTIME())";
        $save = $this->db->query($query);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

}

?>