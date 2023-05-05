<?php
class ItemsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }


    public function listadoTotal2()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT sub_activitats.id_sub_activiat, activitats.nom_activitat, activitats.id_activitat, sub_activitats.descripcio, sub_activitats.preu
        FROM sub_activitats
         JOIN activitats ON sub_activitats.id_activitat = activitats.id_activitat;
        ');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    
    public function datos_formulario($id){
        $consulta = $this->db->prepare("SELECT * FROM sub_activitats WHERE id_sub_activiat = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function listadoClases()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT * FROM activitats');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("UPDATE sub_activitats SET descripcio='".$request["descripcio"]."', preu='".$request["preu"]."' WHERE id_activitat=".$request["id_activitat"] );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    //public function eliminar($request){

        //realizamos la consulta de todos los items
        //$consulta = $this->db->prepare("DELETE FROM sub_activitatns WHERE id_sub_activtat=".$_GET["id"] );
        //$consulta->setFetchMode(PDO::FETCH_ASSOC);
        //$consulta->execute();
        //devolvemos la colección para que la vista la presente.
        //return $consulta;
    //}
}
?>