"strict mode";
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
        this.turno=(this.turno+1)%2;
        //comprobar si hay victoria
    }
};
TresEnRaya.prototype.victoria=function(){};//codigo para comprobar victoria:true\false
var j = new TresEnRaya("Juan","Antonio");
j.jugar(0,0);
j.jugar(2,2);