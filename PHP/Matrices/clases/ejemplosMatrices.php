<?php
    class EjemplosMatrices
    {
        //matrices unidimensionales(arrays)
        //matriz de numeros indexada
        public static $edades=[2,3,4,5,6,7,8,9];
        //Matriz de cadenas indexada
        public static $nombres=["Jhonny er pibu","er christian"];
        //asociativa
        public static $NombreEdad=["Antonio"=>2,"Juan"=>8,"Manuel"=>39,"Luis"=>45];
        //matriz de objetos animales indexada
        public static function MatrizObjetoIndexada()
        {
            return $animales=[new Animal("gato","felino"),
            new Animal("ratón","roedor")];
        }
        //matriz de objetos asociativa
        public static function MatrizObjetoAsociativa()
        {
            return ["gato"=>new Animal("gato","felino"),
            "raton"=>new Animal("ratón","roedor")];
            //index =0 en la segunda,se pueden mezclar
        }
        //matriz indexada liada
        public static function MatrizObjetoMezcla()
        {
            return [1=>20,2=>42,655=>12];
            //index =0 en la segunda,se pueden mezclar

        }
        //matrices multidimensionales
        //matriz indexada
        public static $comunidades=[["Jaén","Córdoba","Sevilla"],["Madrid"]];
        //matriz asociativa
        public static $comunidadesAsociativas=["Andalucia"=>
        ["Jaén","Córdoba","Sevilla"],"Madrid"=>["Madrid"]];
        
    }
?>