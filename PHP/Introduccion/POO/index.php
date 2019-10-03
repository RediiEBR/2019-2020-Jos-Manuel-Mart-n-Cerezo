<?php
require_once 'Clases/Persona.php';
require_once './Clases/Alumno.php';
    class Principal 
    {
        public static function main()
        {
            $noelia=new Persona("12345678Z","Noelia");
            $juan=new Persona("1234578A","Juan");
            //$noelia->setNombre("Noelia");
            echo("<h1>".$noelia->getNombre()."</h1>");
            //acceso a una propiedad estática
            echo"todas las personas tienen ".Persona::$numeroOjos." ojos";
            echo"<br/> Numero de orejas de todos=".$noelia->getNumeroOrejas();
            $silverio =new Alumno("12345678E","Silverio",45,10);
            echo($silverio->getNombre());
            //matriz de alumnos indexada
            $alumnos=[new Alumno("123456A","Pepe",12,5),new Alumno("12345678A",
            "Alfonso",12,2)];
            echo"<h1>listado de alumnos</h1>";
            foreach ($alumnos as  $alumno) {
                echo("DNI=".$alumno->getDni()." Nombre: ".
                $alumno->getNombre()."<br/>");
            }
            echo"<h1>listado de alumnos asociativos</h1>";
            //matriz asociativa
            $al1= new Alumno("111A","luis",34,2);
            $al2= new Alumno("111B","Juan",23,6);
            $alumnosasoc= [$al1->getDni()=>$al1,"111B"=>$al2];
            foreach ($alumnosasoc as $dni => $alumno) {
                echo("DNI=".$dni." Nombre: ".
                $alumno->getNombre()."<br/>");
            }
        }
    }
Principal::main();    
?>
