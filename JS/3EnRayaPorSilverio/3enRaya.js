
/**
 * Juego tres en raya
 * 
 */
function TresEnRaya(p1,p2)
{
    this.p1=p1;
    this.p2=p2;
    this.juego=[[],[],[]];
    this.turno=Math.round(Math.random());
    this.ganador="";
}

TresEnRaya.prototype.jugar=function(f,c)
{
    if(this.ganador=="" && this.juego[f][c]===undefined)
    {
        this.juego[f][c]=this.turno;
       //bloque para dibujar
      document.getElementById("p"+f+c).innerHTML=
      (this.turno==1)?"X":"0"; 
     
      
       //bloque para dibujar-fin
        this.turno=(this.turno+1)%2;
        
        //comprobar si hay victoria
        this.victoria();
    }
    
};
TresEnRaya.prototype.victoria=function(){
    var j=this.juego;
    if((j[0][0]+j[0][1]+j[0][2])%3==0 ||
    (j[1][0]+j[1][1]+j[1][2])%3==0 ||
    (j[2][0]+j[2][1]+j[2][2])%3==0 ||
    (j[0][0]+j[1][0]+j[2][0])%3==0 ||
    (j[0][1]+j[1][1]+j[2][1])%3==0 ||
    (j[0][2]+j[1][2]+j[2][2])%3==0 ||
    (j[0][0]+j[1][1]+j[2][2])%3==0 ||
    (j[0][2]+j[1][1]+j[2][0])%3==0)
    {
        if(this.turno==1)
        {
            this.ganador=this.p1;

        }
        else
        {
            this.ganador=this.p2;
        }
        alert("And the winner is "+this.ganador);
    }
};//codigo para comprobar victoria:true\false
   
 function comenzar()
 {
    this.ganador="";
    var formulario=document.forms["jugadores"];
    var p1=formulario['jug1'];
    var p2=formulario['jug2'];
    partida=new TresEnRaya(p1.value,p2.value);
    
    tbody=document.getElementById("juego");
    var i=0,j=0;
    var contTabla="";
    for(i=0;i<3;i++)
    {
        contTabla+="<tr>";
        for(j=0;j<3;j++)
        {
            contTabla+="<td id='p"+i+j+"' onclick='partida.jugar("+i+","+j+")'>&nbsp;</td>";
        }   
        contTabla+="</tr>";

    }   
    tbody.innerHTML=contTabla;
    if(partida.turno==0)
    {
        p1.style.border="1px solid green";
        p2.style.border="1px solid white";
    }
    else{
        p2.style.border="1px solid green";
        p1.style.border="1px solid white";
    }
 }
 
var partida;//juego
