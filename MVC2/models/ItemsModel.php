<?php
class ItemsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }
 

    public function listadoTotall()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat =1;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    public function listadoTotal22()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat =3;');
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoTotal88()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat  = 1;');
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoTotal44()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat =4;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoTotal55()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat =5;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoTotal66()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat =6;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    public function listadoTotalll()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat =2;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoTotal()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat = 1;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    public function listadoTotale()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat = 3;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
    public function listadoTotal2()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat = 10;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoTotal3()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat = 9;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    public function listadoTotal4()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat = 2;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    public function listadoTotal5()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT disponiblitat.id_disponible, disponiblitat.diponiblitat, treballadors.nom
        FROM disponiblitat
        JOIN treballadors ON disponiblitat.id_treballador = treballadors.id_treballador;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoTotal6()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT id_preferencia, prefencia, nom FROM prefencias
        JOIN treballadors ON prefencias.id_treballador = treballadors.id_treballador;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
    public function listadoTotal7()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat = 7;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
    public function listadoTotal8()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom_activitat, descripcio
        FROM activitats
        JOIN sub_activitats ON activitats.id_activitat = sub_activitats.id_activitat
        WHERE activitats.id_activitat = 8;');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
}
?>
