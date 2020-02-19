$(document).ready(function () {
    
});
function allowDrop(ev)
{
    ev.preventDefault();
}
function drag(ev) {
   
    
    localStorage.setItem("Objetivo", ev.target.getAttribute("id"));
  }
  function drop(ev) {
    ev.preventDefault();
    var provocador=localStorage.getItem("Objetivo");
    
    //ev.target.getAttribute("id")
    objetivo=ev.target.getAttribute("id");
    // debugger;
   
   if(provocador=="empezarVuelo")
   {
       if(objetivo=="despegados")
       {
            $("#"+objetivo+" span");
            var numero=Number.parseInt($("#"+objetivo+" span").text());
            numero++;
            $("#"+objetivo+" span").text(numero+"");
       }
       else
       if(objetivo=="basura")
       {
           objetivo="despegados";
            $("#"+objetivo+" span");
            var numero=Number.parseInt($("#"+objetivo+" span").text());
            if(numero<=1)
            {
                numero=0;
            }
            else
            {
                numero--;
            }
            $("#"+objetivo+" span").text(numero+"");
       }
   }
   else
   if(provocador=="acabarVuelo")
   {
    if(objetivo=="aterrizados")
    {
         $("#"+objetivo+" span");
         var numero=Number.parseInt($("#"+objetivo+" span").text());
         numero++;
         $("#"+objetivo+" span").text(numero+"");
    }
    else
    if(objetivo=="basura")
    {
        objetivo="aterrizados";
         $("#"+objetivo+" span");
         var numero=Number.parseInt($("#"+objetivo+" span").text());
         if(numero<=1)
         {
             numero=0;
         }
         else
         {
             numero--;
         }
         $("#"+objetivo+" span").text(numero+"");
    }
   }
    
  }