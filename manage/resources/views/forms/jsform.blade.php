
document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/iframe-resizer/4.2.10/iframeResizer.min.js"></script>');
document.write('<iframe id="frame1" style="width: 100%;border: 0;margin: 0;padding: 0;" src="{{ url($form_name.'/'.$form) }}" scrolling="no"></iframe>');
document.write('<script>iFrameResize({heightCalculationMethod:"lowestElement"})</script>')

<!--var xhttp = new XMLHttpRequest();-->
<!--xhttp.onreadystatechange = function() {-->
<!--    if (this.readyState == 4 && this.status == 200) {-->
<!--       // Typical action to be performed when the document is ready:-->
<!--       document.getElementById('frame1').innerHTML = xhttp.responseText;-->
<!--    }-->
<!--};-->
<!--xhttp.open("GET", "{{ url($form_name.'/'.$form) }}", true);-->
<!--xhttp.send();-->
