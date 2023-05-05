<?php
class ItemsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }


    public function listadoTotal4()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat =4;');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    
    public function datos_formulario($id){
        $consulta = $this->db->prepare("SELECT * FROM activitats WHERE id_activitat = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function listadoClases()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT * FROM treballadors');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("UPDATE activitats SET descripcio='".$request["descripcio"]);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
}
?>