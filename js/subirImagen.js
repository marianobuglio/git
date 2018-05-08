$(function(){

	var frm = $('#formulario');
	var btnEnviar = $('#btn');

	var textSubir = btnEnviar.text();
	var textSubiendo = "cargando";
btnEnviar.click(function(){
	
	//event.preventDefault();

		var formData = new FormData();
		len = document.getElementById('img').files.length;
        //for each entry, add to formdata to later access via $_FILES["file" + i]
        
        for (var i = 0; i < len; i++) {
            formData.append("imagen" + i, document.getElementById('img').files[i]);
        }
		

		$.ajax({
			url:'enviar.php',
			type:frm.attr('method'),
			data: formData,
			processData: false,
			contentType:false,
			cache:false,
			beforeSend: function(data){
				btnEnviar.html(textSubiendo);
				btnEnviar.attr('disabled', true)
				
			},
			success: function(data){
				btnEnviar.html(textSubir);
				btnEnviar.attr('disabled', false);
					//$('#image_preview').hide();
				$('#image_preview').append(data);  	
				$('#prev').html("imagenes subidas exitosamente")
			}

		});

	return false;
});

$(document).on('click', '#remove_button', function(){  

           if(confirm("Esta seguro de eliminar la imagen?"))  
           {  
           	var id = $(this).attr('name');
           	var img = document.getElementsByClassName(id);
           	var ruta = $(img).attr('src');
            var data = "id="+ id + "&ruta=" + ruta;
                //var path = $('#remove_button').data("path");  
                	alert(id);
                	console.log(ruta);
                $.ajax({  
                     url:"../adm/controladores/delete.php",  
                     type:"GET",  
                     data:data,  
                     success:function(data){  
                     	alert("Eliminado correctamente");
                      alert(data);
                     	var myDomElement = document.getElementById(id); // A plain DOM element.
 					
                  		if(data != '')  
                          {  
                               $(myDomElement).remove();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      }); 

});