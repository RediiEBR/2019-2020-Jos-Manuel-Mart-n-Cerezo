
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
}

TresEnRaya.prototype.jugar()=function(f,c)
{
    if(this.juego[f][c]===undefined)
    {
        this.juego[f][c]=this.turno;
        dibujar();
        this.turno=(this.turno+1)%2;
        
        //comprobar si hay victoria
    }
};
TresEnRaya.prototype.victoria=function(){
    if(this.juego==[[],[],[]])
    {

    }
};//codigo para comprobar victoria:true\false

 function dibujarTablero()
 {
     //debugger;
     document.write("<table border='1' style='width:300px;height:300px'>"+"<tr>"+"<td onclick=''></td>"+"<td></td>"+"<td></td>"+"</tr>"+"<tr>"+"<td></td>"+"<td></td>"+"<td></td>"+"</tr>"+"<tr>"+"<td></td>"+"<td></td>"+"<td></td>"+"</tr>"+"</table>");
    
 }
 function dibujar()
 {

 }