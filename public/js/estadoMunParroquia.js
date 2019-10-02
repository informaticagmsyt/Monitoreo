
$( document ).ready(function() {
    console.log(estados,municipios,parroquias)



    estado("#estadoe",estados);

    setTimeout(function(){ 
        setValueSelect("estadoe", estados)
        setValueSelect("municipio_id", municipios)
        

        setTimeout(function(){     setValueSelect("parroquia_id", parroquias)  }, 1000);

     }, 3000);
    


    $("#estadoe").change(function() {
         
            
      if(this.value!="")
      municipio(this.value,"#municipio_id")
     else           
  $("#municipio_id").html("<option value=''>Seleccione un Municipio<option>");

  });
     

        
      


      
    
        $("#municipio_id").change(function() {
         
            
            if(this.value!="")
            parroquia(this.value,"#parroquia_id")
           else           
          $("#parroquia_id").html("<option value=''>Seleccione una Parroquia<option>");

        });

       

});

function estado(selector,id=null) {

   var data={
     
   }
   
   $.ajax({
     url: urlBase+"index.php/CestadoMunParr/estado" ,
     type: "GET",
     dataType: "JSON",
     data: data,
     success: function(res) {
       console.log(res)

   if(res.response.status="ok"){
  var data =res.data;

  var html='';

    for (var i in data) {
 
        html='<option value='+data[i].id+'>'+data[i].estado+'</option>';
        $(selector).append(html)
    }

     if(id){
    
        municipio(id,"#municipio_id");
     }
    
   }
   
   
   
   
     }
       }).fail(function(re){
   console.log(re.responseText)
       
       });
   
   }


   function municipio(id,selector,selec=null) {

    var data={
      id_estado:id
    }
    
    $.ajax({
      url: urlBase+"index.php/CestadoMunParr/municipio" ,
      type: "GET",
      dataType: "JSON",
      data: data,
      beforeSend: function(data){

    $(selector).html("<option>Cargando...<option>");
      },
      success: function(res) {
        console.log(res)
 
    if(res.response.status="ok"){
   var data =res.data;
 
   var html='';
   
 $(selector+' option').each(function()  {$(this).remove(); });

 html='<option value="">Seleccione un Municipio</option>';
 $(selector).append(html)
     for (var i in data) {
  
        
         html='<option value='+data[i].id+'>'+data[i].municipio+'</option>';
         $(selector).append(html)
     }

     if(id){
    
      
        parroquia(municipios,"#parroquia_id")

     }
 
      
    }
    
    
    
    
      }
        }).fail(function(re){
    console.log(re.responseText)
        
        });
    
    }



    function parroquia(id,selector,ids) {

        var data={
          id_parroquia:id
        }
        
        $.ajax({
          url: urlBase+"index.php/CestadoMunParr/parroquia" ,
          type: "GET",
          dataType: "JSON",
          data: data,
          beforeSend: function(data){
    
        $(selector).html("<option>Cargando...<option>");
          },
          success: function(res) {
            console.log(res)
     
        if(res.response.status="ok"){
       var data =res.data;
     
       var html='';
     $(selector+' option').each(function()  {$(this).remove(); });

      
        html='<option value="">Seleccione una Parroquia</option>';
        $(selector).append(html)
         for (var i in data) {
      
             html='<option value='+data[i].id+'>'+data[i].parroquia+'</option>';
             $(selector).append(html)
         }
     
    
        }
        
        
        
        
          }
            }).fail(function(re){
        console.log(re.responseText)
            
            });
        
        }