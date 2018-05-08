 function previewImages() {
 	
  var $preview = $('#preview').empty();
  if (this.files) $.each(this.files, readAndPreview);

  function readAndPreview(i, file) {
    
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
    		
    	var $el = $('#img');
 		$el.wrap('<form>').closest('form').get(0).reset();
 		$el.unwrap();
 	
      	return alert(file.name +": No es una imagen");
    
    } 
    
    var reader = new FileReader();

    $(reader).on("load", function() {
      $preview.append($("<img/>", {src:this.result, height:100}));
    });

    reader.readAsDataURL(file);
    
  }

}

 $('#img').on("change", previewImages);








