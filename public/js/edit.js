function editar(id) {
    
    var editable=$("#btnEditar"+id).data('editable');

    if(editable=='true'){
        $(".editable"+id).prop("disabled", true);
        $("#btnEditar"+id).data('editable','false');


        $("#icon"+id).text('create');

        var dataform ={
            id:id,
            nombre:$("#nombre"+id).val(),
            apellido:$("#apellido"+id).val(),
            sexo:$("#sexo"+id).val(),
            fecha_nac:$("#fecha_nac"+id).val(),
            telefono:$("#telefono"+id).val(),
            localidad:$("#localidad"+id).val(),
            direccion:$("#direccion"+id).val(),
            espacio:$("#espacio"+id).val(),
            movimiento:$("#movimiento"+id).val(),
            trabaja:$("#trabaja"+id).val(),
            email:$("#email"+id).val(),
            grado:$("#grado"+id).val(),
            profesion:$("#profesion"+id).val(),

        }
        guradar(dataform)

    }else{

        $(".editable"+id).prop("disabled", false);
        $("#btnEditar"+id).data('editable','true')
        $("#icon"+id).text('save');
 

           }
}


function guradar(data){
    var url=urlBase+"index.php/C_asesorate/guardar";
    $.ajax({
        method: "POST",
        url: url,
        data: data
      })
        .done(function( resp ) {
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