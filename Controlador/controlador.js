const fromIngreso = document.querySelector("#formIngreso");
const lista_registros= document.querySelector('#lista_registros tbody');
eventListenersE();

function eventListenersE(){
    fromIngreso.addEventListener('submit',leerdatos);
}

function leerdatos(e){
    e.preventDefault();
    /* console.log("Entre Aqui"); */

    const marticula = document.querySelector('#matricula').value;
    const tipoV = document.querySelector('#tipoV').value;
    const Accion = document.querySelector('#Accion').value;
    if(marticula != '' && tipoV != '--Selecione Una' ){
        
        const datoAuto = new FormData();
        datoAuto.append('matricula',marticula);
        datoAuto.append('TipoAuto',tipoV);
        datoAuto.append('accion',Accion);
        insertarBD(datoAuto);
        console.log(...datoAuto);

    }else{
        alert('Debe ingresar ambos registros')
        
    }

    
}

function insertarBD(datos){

    var xhr = new XMLHttpRequest();

    xhr.open('POST', '../Modelo/modelo_ingreso.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            /* console.log(xhr.responseText); */
            
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta)
            if(respuesta.respuesta == 'correcto'){
                alert('vehiculo Registrado');
                window.location.href = "index.php";
                /* location.href = "registro.php" */
               
            }
        }
    }

    xhr.send(datos);

}

