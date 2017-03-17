/* function $(id) {
    var element = document.getElementById(id);
    if (element == null)
        alert("Programmer error: " + id + " does not exist.");
    return element;
} */


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

/* Review form validation */
function checkReview(){
	var one = document.getElementById('radrating_0').checked;
	var two = document.getElementById('radrating_1').checked;
	var three = document.getElementById('radrating_2').checked;
	var four = document.getElementById('radrating_3').checked;
	var five = document.getElementById('radrating_4').checked;
	var title = document.getElementById('reviewTitle').value;
	var review = document.getElementById('txtreview').value;
	
	if(one == false && two == false && three == false && four == false && five == false){
		document.getElementById('warnRating').innerHTML = "Select a rating";
		return false;
	} else if (title == "") {
		document.getElementById('warnTitle').innerHTML = "Enter a review title";
		return false;
	} else if (review == "") {
		document.getElementById('warnText').innerHTML = "Enter a brief review";
		return false;
	} else {
		return true;
	}	
}
	