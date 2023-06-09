function calcula_pico(){
    var wien= 2.8977729e-3;
    var temperatura= 5518;
    var pico= wien/temperatura;
    var d=document.getElementById("resultadoA");
    d.innerHTML=pico + 'Ångström';
    }
