<script language="javascript">
			$(document).ready(function(){
				$("#estado").change(function () {

					$('#municipio').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#estado option:selected").each(function () {
						id_estado = $(this).val();
						$.post("public/getMunicipio.php", { id_estado: id_estado }, function(data){
							$("#municipio").html(data);
						});            
					});
				})
			});
			
			$(document).ready(function(){
				$("#municipio").change(function () {
					$("#municipio option:selected").each(function () {
						id_municipio = $(this).val();
						$.post("public/getLocalidad.php", { id_municipio: id_municipio }, function(data){
							$("#parroquia").html(data);
						});            
					});
				})
			});
		</script>