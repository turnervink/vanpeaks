$(document).ready(function(){
	$("#show").click(function(){
		$('#review_form').toggle(750);
	});
})


   function showPicture(){
       var preview = document.querySelector("#img_display_frame"); //selects the query named img
       var file    = document.querySelector("#filupload").files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }
