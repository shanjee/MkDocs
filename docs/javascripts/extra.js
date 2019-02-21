function changeUrl(url) {
  document.getElementById("myFrame").src = url;
}

/*
$(function () {
  $("select").select2();

});
*/

$(document).ready(function () {
  $('#dropdownList').on('change', function () {
    var optionValue = $(this).val();
   // var optionText = $('#dropdownList option[value="'+optionValue+'"]').text();
    var optionText = $("#dropdownList option:selected").text(); 
	// var pdfUrl = "/ArenaNorDocs/" + "DIPS Arena Arbeidsflytskript 18.1.0" +".pdf";	
	var pdfUrl = "/ArenaNorDocs/" + optionText +".pdf";		
	
	
	var regex2 = RegExp('\\\\en\\\\*','g');
	// var str1 = 'C:\\inetpub\\wwwroot\\ArenaProcessDocumentsno\\site\\ArenaNorDocs\\en\\DIPS Arena Arbeidsflytskript 18.1.0.pdf';

	if(regex2.test(optionValue))
	{
		var pdfUrl = "/ArenaNorDocs/en/" + optionText +".pdf";		
	}
	else
	{
		var pdfUrl = "/ArenaNorDocs/no/" + optionText +".pdf";	
	}

	
    changeUrl(pdfUrl);
  });
});