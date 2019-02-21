# Norwegian Documents

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>

<select name="dropdownList" id="dropdownList" class="abcd" style="width:100%">

  <option value='0' selected='true'> Not associated to any Circuit ID </option>
  <option value='/ArenaNorDocs/DIPS Arena ¥konomi 18.1.0.pdf' > DIPS Arena ¥konomi 18.1.0  </option> 
  <option value='/ArenaNorDocs/DIPS Arena Arbeidsflytskript 18.1.0.pdf' > DIPS Arena Arbeidsflytskript 18.1.0 </option> 

</select>


<script>

let dropdown = $('#dropdownList');

dropdown.empty();

dropdown.append('<option selected="true" disabled>Choose Document to View</option>');
dropdown.prop('selectedIndex', 0);

const url = 'http://cl-shanjeevak.creativesoftware.com:8091/phpinfo.php?language=en';

// Populate dropdown with list of provinces
$.getJSON(url, function (data) {
  $.each(data, function (key, entry) {
    dropdown.append($('<option></option>').attr('value', entry.path).text(entry.name));
  })
});

</script>

<iframe class="iframeSize" id=myFrame></iframe>

