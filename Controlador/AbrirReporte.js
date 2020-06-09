console.log('x')
document.querySelector('#export').addEventListener('click',AbrirPopUp);
document.querySelector('#salir').addEventListener('click',CerrarPopup);
    const overlayoff = document.querySelector('#overlayoff');
    const reporte = document.querySelector('#reporte');
function AbrirPopUp(){
    console.log('y');
       
    reporte.classList.toggle('reporteActive');
    overlayoff.classList.toggle('overlay');
}

function CerrarPopup(){
    console.log('Z')
    reporte.classList.toggle('reporteActive');
    overlayoff.classList.toggle('overlay');
}
    
