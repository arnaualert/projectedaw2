<?php
class ItemsController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 


    public function listar22()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';

        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();

        //Le pedimos al modelo todos los items
        $listado22 = $items->listadoTotal22();

        //Pasamos a la vista toda la información que se desea representar
        $data['listado22'] = $listado22;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar22.php", $data);
    }


    public function listar44()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';

        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();

        //Le pedimos al modelo todos los items
        $listado44 = $items->listadoTotal44();

        //Pasamos a la vista toda la información que se desea representar
        $data['listado44'] = $listado44;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar44.php", $data);
    }



    public function listar55()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';

        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();

        //Le pedimos al modelo todos los items
        $listado55 = $items->listadoTotal55();

        //Pasamos a la vista toda la información que se desea representar
        $data['listado55'] = $listado55;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar55.php", $data);
    }
    
    public function listar66()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';

        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();

        //Le pedimos al modelo todos los items
        $listado66 = $items->listadoTotal66();

        //Pasamos a la vista toda la información que se desea representar
        $data['listado66'] = $listado66;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar66.php", $data);
    }


    public function listarr()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';

        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();

        //Le pedimos al modelo todos los items
        $listadoo = $items->listadoTotall();

        //Pasamos a la vista toda la información que se desea representar
        $data['listadoo'] = $listadoo;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("listarr.php", $data);
    }
    public function listarrr()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
              
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();

        //Le pedimos al modelo todos los items
        $listadoo2 = $items->listadoTotalll();

        //Pasamos a la vista toda la información que se desea representar
        $data['listadoo2'] = $listadoo2;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("listarr.php", $data);
    }

    public function listar()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadoTotal();
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar.php", $data);


    }

    public function listar2()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado2 = $items->listadoTotal2();
        //Pasamos a la vista toda la información que se desea representar
        $data2['listado2'] = $listado2;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar2.php", $data2);

    }

    public function listar3()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado3 = $items->listadoTotal3();
        //Pasamos a la vista toda la información que se desea representar
        $data3['listado3'] = $listado3;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar3.php", $data3);


    }

    public function listar4()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadoTotal4();
        //Pasamos a la vista toda la información que se desea representar
        $data4['listado'] = $listado;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar.php", $data4);

    }
 

    public function listar5()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado5 = $items->listadoTotal5();
        //Pasamos a la vista toda la información que se desea representar
        $data5['listado5'] = $listado5;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar5.php", $data5);

    }
    public function listar6()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado6 = $items->listadoTotal6();
        //Pasamos a la vista toda la información que se desea representar
        $data6['listado6'] = $listado6;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar6.php", $data6);

    }

    public function listar7()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado7 = $items->listadoTotal7();
        //Pasamos a la vista toda la información que se desea representar
        $data7['listado7'] = $listado7;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar7.php", $data7);

    }

    public function listar8()
    {
        //Incluye el modelo que corresponde
        require 'models/ItemsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado8 = $items->listadoTotal8();
        //Pasamos a la vista toda la información que se desea representar
        $data7['listado8'] = $listado8;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar8.php", $data7);

    }
   
}
?>