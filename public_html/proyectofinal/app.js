const { default: swal } = require("sweetalert");

function validar(resultado) {    
    if(resultado = 0){
        
        alertError.classList.remove("hide");
        alertError.classList.add("show");
        
        setTimeout(function(){
            alertError.classList.remove("show");
            alertError.classList.add("hide");
        }, 2000);

    } else{
      

        alertSuccess.classList.remove("hide");
        alertSuccess.classList.add("show");
        
        setTimeout(function(){
            alertSuccess.classList.remove("show");
            alertSuccess.classList.add("hide");
        }, 2000);
    }
}

setTimeout(function(){

    $(".btn-cargar-cliente").click(function(){
        swal("Cliente cargado!", "Aprete OK para continuar!", "success");
    });

}, 3000);



$(".btn-cargar-turno").click(function(){
    swal("Turno cargado!", "Aprete OK para continuar!", "success");
});





function advertencia(e){
    e.preventdefault();
    console.log("Esta llamando la funcion");
    var url = e.currentTarget.getAttribute('href');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
            window.location.href= url;
        }
      })
}

function redireccionar(exito, lugar){
    if (exito == 1){
        alert("Registro creado exitosamente");
        if (lugar===1){
            window.location.href = "clientes.php";
        }else if(lugar==0){
            window.location.href = "serviciosvista.php";
        }else{
            window.location.href = "buscadorserv.php";
        }
    } else{
        alert("Algo ha ido mal, intente nuevamente");
        if (lugar==1){
            window.location.href = "clientes.php";
        }else if(lugar==0){
            window.location.href = "serviciosvista.php";
        }else{
            window.location.href = "index.php";
        }
    }
}

function modificado(exito,lugar){
    if (exito == 1){
        alert("Registro modificado exitosamente");
        if (lugar===1){
            window.location.href = "clientes.php";
        }else if(lugar==0){
            window.location.href = "serviciosvista.php";
        }else{
            window.location.href = "buscadorserv.php";
        }

    } else{
        alert("Algo ha ido mal, intente nuevamente");
        if (lugar==1){
            window.location.href = "clientes.php";
        }else if(lugar==0){
            window.location.href = "serviciosvista.php";
        }else{
            window.location.href = "buscadorserv.php";
        }
    }
}

function eliminado(exito,lugar){
    if (exito == 1){
        alert("Registro eliminado correctamente");
        if (lugar===1){
            window.location.href = "clientes.php";
        }else{
            window.location.href = "serviciosvista.php";
        }

    } else{
        alert("Revise servicios y pruebe nuevamente");
        if (lugar==1){
            window.location.href = "clientes.php";
        }else{
            window.location.href = "serviciosvista.php";
        }
    }
}
