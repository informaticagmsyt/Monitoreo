
      function  ireditar(id){
        var url = urlBase + "index.php/C_agroproductivo/editar/"+id;

        location.href=url;
      }


function editar(id) {
    
    var editable=$("#btnEditar"+id).data('editable');


      

        var dataform ={
            id:id,
            nombre:$("#nombre").val(),
            apellido:$("#apellido").val(),
            sexo:$("#sexo").val(),
            fecha_nac:$("#fecha_nac").val(),
            telefono:$("#telefono").val(),
            localidad:$("#localidad").val(),
            direccion:$("#direccion").val(),
            espacio:$("#espacio").val(),
            movimiento:$("#movimiento").val(),
            trabaja:$("#trabaja").val(),
            email:$("#email").val(),
            grado:$("#grado").val(),
            profesion:$("#oficio").val(),

        }
        guradar(dataform)

}


function guradar(data){
    var url=urlBase+"index.php/C_asesorate/guardar";
    $.ajax({
        method: "POST",
        url: url,
        data: data
      })
        .done(function( resp ) {
            alert(resp.response)
         console.log(resp)
        }).fail(function(error){

            console.log(error)
        });
}


function setValueSelect(SelectId, Value) {
	SelectObject = document.getElementById(SelectId);
	for (index = 0; index < SelectObject.length; index++) {
		if (SelectObject[index].value == Value) SelectObject.selectedIndex = index;
	}
}