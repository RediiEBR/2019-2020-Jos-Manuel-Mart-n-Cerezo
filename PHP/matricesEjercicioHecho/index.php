<?php
 require_once '../Antonio/master/Cargadores/cargarclases.php';
 class Principal
 {
    public static function main()
    {
        $gestiona = new GestionAnimales();
        //Añadir un nuevo animal
        $gestiona->crearAnimal("111a","Luna","Yorkshire","12/12/2012");
        //comprobar si se añade
        var_dump($gestiona->todosAnimales());
        //Modificar
        $gestiona->modificaAnimal("111a",["Estrella","Pachón","12-12-2018",
        "vacunas"=>[]]);
        //ponemos una vacuna
        $gestiona->NuevaVacuna("111a","Moquillo","11-12-2019","dosis bajas,perro pequeño");
        //comprobamos

        var_dump($gestiona->todosAnimales());

        $gestiona->modificaVacuna("111a","Moquillo",["12-12-2019","dosis completa"]);
        //var_dump($gestiona->todosAnimales());
        print_r($gestiona->todosAnimales());
    }
 }
 Principal::main();
?>