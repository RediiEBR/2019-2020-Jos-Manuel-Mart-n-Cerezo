function CompruebaDNI()
{
    var dni=document.getElementById('cajaTexto').value();
    alert('Probando dni: '+ dni);
}
//funcion que le paso la edad y me devuelve si es mayor de edad o no
function MayorEdad()
{
    var edad=document.getElementById('cajaTexto').value;
    //primero miro si tengo que comprobar
    if(Number.isNaN(Number.parseInt(edad)))
    /*esta comprobación la hago de esta manera porque por defecto 
    captura una cadena de texto*/
    {
        alert('Introduzca un número entero');
    
    }
    else
    if(edad>=18)
    {
        alert('eres mayor de edad');
    }
    else
    {
        alert('eres menor de edad');
    }
   
}
//funcion que le paso una cadena y me devuelve si está vacía
function isVacia()
/*hemos tenido en cuenta al no haberse especificado que queremos
cubrir el  caso en el que se intentan meter espacios en blanco para crear
una inconsistencia de datos*/ 
{
    var captura=document.getElementById('cajaTexto').value;
    if(captura.trim()==="")
    {
        alert('no tiene contenido,true');
    }
    else
    {
        alert('tiene contenido,false');
    }
    
}
//funcion que le paso un numero y me devuelve los primos hasta ese número
function primos()
{
    var param=Number.parseInt(document.getElementById('cajaTexto').value);
    
    if(Number.isNaN(Number.parseInt(param)))
    /*esta comprobación la hago de esta manera porque por defecto 
    captura una cadena de texto*/
    {
        alert('Introduzca un número entero');
    
    }
    else//si es un dato válido 
    {
        var divisores = [];
        var primos=[];
        for (var i= 1; i <= param; i++) {
            divisores.push(i);
          //rellenamos un vector con los posibles divisores  
        }
        for(var i=1;i<divisores.length;i++)//miramos los primos que tiene
        { 
                if(esPrimo(i))
                {
                    primos.push(i);  
                }
        }
        document.write("<br/>los numeros primos que hay hasta "+param+" son:");
        for(var i=0;i<primos.length;i++)
        {
            document.write("<br/>"+primos[i]);
        }
    }
}
function esPrimo(numero) {

    for (var i = 2; i < numero; i++) {
  
      if (numero % i === 0) {
        return false;
      }//no es primo,false
  
    }
    return numero !== 1;
    //not equal value or type
}
//funcion que me devuelve los divisores de un número
function hallarDivisores()
{
    var numero=Number.parseInt(document.getElementById('cajaTexto').value);
    var divisores=[];
    for (var i=1;i<numero;i++) {
        if(numero%i==0)
        {
            divisores.push(i);
        }

    }
    document.write("Los divisores de "+numero+" son:");
    for (var i=0;i<divisores.length();i++)
    {
        document.write(divisores[i]+"<br/>");    
        
    }
}
//funcion que me pasa si un dni es válido o no
function validaDNI()
{
    var dni=document.getElementById('cajaTexto').value;
    var suma=[];
    var sumaTotal=0;
    var letraDNI;
    var letras=
    ["T","R","W","A","G","M","Y","F","P","D","X","B","N",
    "J","Z","S","Q","V","H","L","C","K","E"];
    var restos
    [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22]
    if(dni.length==9)
    {
        letraDNI=dni.substring(8,9);
        for(var i=0;i<dni.length-1;i++)
        {
       
        suma.push(Number.parseInt(dni.substring(i,i+1)));
        }
        for(var i=0;i<suma.length;i++)
        {
            sumaTotal=sumaTotal+suma[i];
        }
            sumaTotal=Number.parseInt(sumaTotal)%23;//calculamos el %23
        if(letraDNI==letras[sumaTotal+1])
        {
            alert("genio"
            ,"figura",
           "crack"); 
        }
        else
        {
            alert("dni inválido");
        }
    }
    else
    {
        alert('longitud errónea,tiene que ser 8 números y 1 dígito');
    }
}