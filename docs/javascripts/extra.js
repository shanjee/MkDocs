function changeUrl(url) {
  document.getElementById("myFrame").src = url;
}


$(function () {
  $("select").select2();

});

$(document).ready(function () {
  $('#dropdownList').on('change', function () {
    var optionValue = $(this).val();
   // var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
    var optionText = $("#dropdownList option:selected").text(); 
	// var pdfUrl = "/ArenaNorDocs/" + "DIPS Arena Arbeidsflytskript 18.1.0" +".pdf";	
	var pdfUrl = "/ArenaNorDocs/" + optionText +".pdf";		
    changeUrl(pdfUrl);
  });
});