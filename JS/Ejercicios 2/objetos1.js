var registrados = [];
function creador() {
  var mat = 0;
  var posicion = 0;

  var coche = new Coche();
  return function(marca, modelo, anioMat, color, propietario) {
    this.mat = mat++;
    this.modelo = modelo || "";
    this.anioMat = anioMat || "";
    this.color = color || "";
    this.propietario = propietario || "No asignado";
    this.marca = marca;
    this.posicion = posicion++;
  };
}
Coche = creador();
function Coche(
  matricula,
  marca,
  modelo,
  anioMat,
  color,
  propietario,
  posicion
) {
  this.matricula = matricula || "";
  this.modelo = modelo || "";
  this.anioMat = anioMat || "";
  this.color = color || "";
  this.propietario = propietario || "No asignado";
  this.marca = marca;
  this.posicion = posicion || "";
}
Coche.prototype.cambiarPropietario = function(propietario) {
  this.propietario = propietario;
};
Coche.prototype.pintar = function(color) {
  this.color = color;
};
Coche.prototype.Imprimir = function() {
  console.log(this);
};
function creadorPersona() {
  var id = 0;
  return function(nombre, apellidos, edad, sexo) {
    this.id = id++;
    this.nombre = nombre || "";
    this.apellidos = apellidos || "";
    this.edad = edad || "";
    this.sexo = sexo || "";
  };
}

function Persona(dni, nombre, apellidos, edad, sexo) {
  this.dni = dni;
  this.nombre = nombre || "";
  this.apellidos = apellidos || "";
  this.edad = edad || "";
  this.sexo = sexo || "";
}
Persona = creadorPersona();
Persona.prototype.cumplirAnios = function(edad) {
  this.edad++;
};
Persona.prototype.Imprimir = function() {
  console.log(this);
};
function MatriculaCoche() {
  var MarcaCoche = document.getElementById("cajaTextoMarca").value;
  var modeloCoche = document.getElementById("cajaTextoModelo").value;
  var anio = document.getElementById("cajaTextoAnio").value;
  var colorCoche = document.getElementById("cajaTextoColor").value;
  var tabla = document.getElementById("tabla");
  var coche = new Coche(MarcaCoche, modeloCoche, anio, colorCoche);

  registrados.push(coche);
  var formulario = document.getElementById("Formulario");
  formulario.reset();
}
function aniadirCoches() {
  var tabla = document.getElementById("tabla");
  tabla.innerHTML = "";
  tabla.innerHTML =
    "<tr>" +
    "<th>Matrícula</th>" +
    "<th>Marca</th>" +
    "<th>Modelo</th>" +
    "<th>Año matriculación</th>" +
    "<th>Color</th>" +
    "<th>Borrar</th>" +
    "</tr>";

  //recorro y lleno
  registrados.forEach(Coche => {
    tabla.innerHTML +=
      "<tr>" +
      "<td>" +
      Coche.mat +
      "</td>" +
      "<td>" +
      Coche.marca +
      "</td>" +
      "<td>" +
      Coche.modelo +
      "</td>" +
      "<td>" +
      Coche.anioMat +
      "</td>" +
      " <td>" +
      Coche.color +
      "</td>" +
      "<td><input type='button'value='X' onclick='BorrarCoche(" +
      Coche.posicion +
      ")' style='width:100%'></td></tr>";
  });
  /**otra forma seria añadiendo un prototype a coche
   * registrados.prototype.borrar(ind) y hacerlo con un for normal pasando
   * la i
   */
}
function toFecha(fecha) {
  {
   modfecha = fecha.split("/");
   var d = modfecha[0];
   var m = modfecha[1];
   var y = modfecha[2];

   var Fecha = new Date(y, m - 1, d);

   return Fecha;
 } 
}
/*se ordenan personas por edad,apellido y nombre
coche:por matricula,por modelo,por marca*/
function BorrarCoche(Numbero) {
  // var tabla = document.getElementById('tabla');

  //delete registrados[Numbero];
  registrados.splice(Numbero, 1);
  for (var i = 0; i < registrados.length; i++) {
    registrados[i].posicion = i;
  }

  var tabla = document.getElementById("tabla");

  tabla.innerHTML =
    "<tr>" +
    "<th>Matrícula</th>" +
    "<th>Marca</th>" +
    "<th>Modelo</th>" +
    "<th>Año matriculación</th>" +
    "<th>Color</th>" +
    "<th>Borrar</th>" +
    "</tr>";

  aniadirCoches();
}
function RegistraPersona() {
  var Nombre = document.getElementById("cajaTextoNombre").value;
  var Apellidos = document.getElementById("cajaTextoApellido").value;
  var Edad = document.getElementById("cajaTextoEdad").value;
  var Sexo = document.getElementById("cajaTextoSexo").value;
  var tabla = document.getElementById("tablaPersonas");
  var persona = new Persona(Nombre, Apellidos, Edad, Sexo);
  tabla.innerHTML +=
    "<tr>" +
    "<td>" +
    persona.id +
    "</td>" +
    "<td>" +
    persona.nombre +
    "</td>" +
    "<td>" +
    persona.apellidos +
    "</td>" +
    "<td>" +
    persona.edad +
    "</td>" +
    " <td>" +
    persona.sexo +
    "</td>" +
    "</tr>";
}
/***
 * ejercicios
 * 1.funcion que valide una fecha
 * 2.funcion que diga si es mayor de edad
 * 3.funcion es mayor que
 * 4.diasVivo
 * 5.dias entre
 *6 diasSemana
 * 7.mes en texto
 *8.añosCumplidos
 *9.toString()->FECHA EN FORMATO ESPAÑOL CARAJO
 Date.prototype.toString={function()}
 */

function validarFecha(FechaDada) {
  //máscara=dd/mm/yyyy
  var diaFecha = Number.parseInt(FechaDada.split("/")[0]);
  var mesFecha = FechaDada.split("/")[1];
  var anioDado = FechaDada.split("/")[2];
  //una vez captamos los datos procedemos con la validación
  var esBisiesto = function() {
    if (anioDado % 4 == 0 && anioDado % 400) {
      return true;
    } else {
      return false;
    }
  };

  if (diaFecha < 1 || diaFecha > 31) {
    return false;
  } else {
    if (mesFecha == 2) {
      if (esBisiesto) {
          if(diaFecha>29)
          {

              return false;

          }
          else{
              return true;
          }
      }

      
    } 
     else if (diaFecha<30)
    {

      return true;
    }
    else
    {
        return false;
    }
  }
}
/*
    * 2.funcion que diga si es mayor de edad

 */
 function mayorEdad(FechaDada)
{
 
  var fechaDadaDias=toFecha(FechaDada);
  var fechaHoy = new Date();
  edad = parseInt((fechaHoy - fechaDadaDias) / 365 / 24 / 60 / 60 / 1000);
  if(edad<18)
  {
    return false;
  }
  else{
    return true;
  }
}
Date.prototype.fechaHoy=function()
{
  var fechahoy=new Date();

};

/**3:
 *3 resultados
 return ((a.-b)=>0) ?0:((a-b)/Math.abs(a-b));
 */
/**dias vivo */
 function diasVivo(FechaAConocer)
{
  var fechaHoy = new Date()/(1000 * 60 * 60 * 24);
  var fechaDadaDias=toFecha(FechaAConocer);
  fechaDadaDias=fechaDadaDias/(1000 * 60 * 60 * 24);
  return Number.parseInt(fechaHoy-fechaDadaDias);
}
/**
 * dias entre 2 fechas
 */
function diasEntre(Fecha1,Fecha2)
{
  var Fecha1=toFecha(Fecha1)/(1000 * 60 * 60 * 24);

}
/**
 * 6 diasSemana
 */
function diasSemana(FechaFuncion)
{
  
    FechaFuncion=toFecha(FechaFuncion);
   var d = FechaFuncion.getday();
    switch(d)
  {
    case 1:
    {
      return "lunes";
      break;
    }
    case 2:
    {
      return "martes";
      break;
    }
    case 3:
    {
      return "miércoles";
      break;
    }
    case 4:
    {
      return "jueves";
      break;
    }
    case 5:
    {
      return "viernes";
      break;
    }
    case 6:
    {
      return "sábado";
      break;
    }
    case 7:
    {
      return "domingo";
      break;
    }
  }
   
  
  
}
/** 7.mes en texto
 *8.añosCumplidos */
 function mesEnTexto()
{
  
    FechaFuncion=toFecha(FechaFuncion);
   var d = FechaFuncion.getMonth();
    switch(d)
  {
    case 0:
    {
      return "enero";
      break;
    }
    case 1:
    {
      return "febrero";
      break;
    }
    case 2:
    {
      return "marzo";
      break;
    }
    case 3:
    {
      return "abril";
      break;
    }
    case 4:
    {
      return "mayo";
      break;
    }
    case 5:
    {
      return "junio";
      break;
    }
    case 6:
    {
      return "julio";
      break;
    }
    case 7:
    {
      return "agosto";
      break;
    }
    case 8:
    {
      return "septiembre";
      break;
    }
    case 9:
    {
      return "octubre";
      break;
    }
    case 10:
    {
      return "noviembre";
      break;
    }
    case 11:
    {
      return "diciembre";
      break;
    }
  }
   
   function aniosCumplidos()
   {
    var fechaHoy = new Date()/(1000 * 60 * 60 * 24);
    var fechaDadaDias=toFecha(FechaAConocer);
    fechaDadaDias=fechaDadaDias/(1000 * 60 * 60 * 24*365);
    return Number.parseInt(fechaHoy-fechaDadaDias);
   }
}

 /**
 * 9 toString
 */
Date.prototype.toString=function()
{
  var dia=this.getDate();
  var mes=this.getMonth()+1;
  var anio=this.getFullYear();
  dia=((dia<10)?"0":"")+dia;
  mes=((mes<10)?"0":"")+mes;
  return dia+"/"+mes+"/"+anio;
}

/**
 * numeros
 * 1.array numeros que llenaremos con los numeros de la loteria de navidad
 *  (999)
 */
function rellenarBombo()
{
  var arrayNumeros=[];
  for(var i=0;i<999;i++)
  {
    arrayNumeros.push(i);
  }//rellenamos
  //desordenamos
 
  shuffleArray(arrayNumeros);
  /**var numero= Math.random()*1000;
    while(arrayNumeros.includes(i))
    {

    } */
   
    //return arrayNumeros;
    for(var i=0;i>999;i++)
    {
      document.write(arrayNumeros[i]+"<br>");
    }

}
function shuffleArray(array) {
  for (var i = array.length - 1; i > 0; i--) {
      var j = Math.floor(Math.random() * (i + 1));
      var temp = array[i];
      array[i] = array[j];
      array[j] = temp;
  }
  return array;
}
//otra manera
function loteria()
{
  numeros=[]; 
  for(i=0;i<1000;i++)
  {
    numeros.push(i);
    numeros.sort(function(a,b){return Math.random()-0.5});
    document.getElementById("premiados").value+=numeros.join("\n");
    
  }
}
