
      function  ireditar(id){
        var url = urlBase + "index.php/C_agroproductivo/editar/"+id;

        location.href=url;
      }


function eliminar(id){
  var url=urlBase+"index.php/C_asesorate/eliminar";
  $.ajax({
      method: "POST",
      url: url,
      data: {"id":id}
    })
      .done(function( resp ) {
          alert(resp.response)
          location.reload();
       console.log(resp)
      }).fail(function(error){

          console.log(error.responseText)
      });

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
            id_estado:$("#estadoe").val(),
       id_municipio:$("#municipio_id").val(),
       id_planes:$("#planes").val(),
		 id_parroquia:$("#parroquia_id").val()

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

            console.log(error.responseText)
        });
}


function setValueSelect(SelectId, Value) {
	SelectObject = document.getElementById(SelectId);
	for (index = 0; index < SelectObject.length; index++) {
		if (SelectObject[index].value == Value) SelectObject.selectedIndex = index;
	}
}
if(idplanes)
planes(idplanes);

function planes(planes) {

  var data={
    
  }
  
  $.ajax({
    url: urlBase+"index.php/C_agroproductivo/getPlanes" ,
    type: "GET",
    dataType: "JSON",
    data: data,
    success: function(res) {
      console.log(res)

  if(res){
 var data =res;

 var html='';

   for (var i in data) {

       html='<option value='+data[i].id_planes+'>'+data[i].planes+'</option>';
       $("#planes").append(html)
   }
   setValueSelect("planes", planes) 

   
  }
  
  
  
  
    }
      }).fail(function(re){
  console.log(re.responseText)
      
      });
  
  }