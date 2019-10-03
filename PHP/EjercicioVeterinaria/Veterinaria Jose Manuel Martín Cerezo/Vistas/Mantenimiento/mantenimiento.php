
<?php
  Sesion::iniciar();


    //recogida de datos
  $Sanimal= Sesion::leer("veterinaria");

    
    ?>
<h1>MANTENIMIENTO DE ANIMALES</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">nºChip</th>
      <th scope="col">Nombre</th>
      <th scope="col">raza</th>
      <th scope="col">Fecha de nacimiento</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $Sanimal->addAnimal(new Animal("111","Misifú","gato con botas",new DateTime('now')));
      //bucle para recorrer coleccion de animales
      foreach ($Sanimal->AllAnimals() as $numeroChip => $animal) {
        echo("<tr>
          <td>".$numeroChip."</td>
          <td>".$animal->getNombre()."</td>
          <td>".$animal->getRaza()."</td>
          <td>".$animal->getFechaNac()->format()."</td>
        </tr>");
      }
   ?>
  </tbody>
  <br>
  
</table>
<a class="btn btn-primary" href="?menu=nuevoAnimal">Crear Animal</a>
