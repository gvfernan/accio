
	function cambiar(){
		var pdrs = document.getElementById('uploadedFile').files[0].name;
		document.getElementById('info').innerHTML = pdrs;
	}
	
	function deshabilita(){
    if(document.getElementById('uploadedFile').checked)
    {
        document.getElementById('uploadBtn').disabled=true;
    }
    else
    {
        document.getElementById('uploadBtn').disabled=false;
    }
	}
	

	function rspnsv() {
	var x = document.getElementById("navbar");
	if (x.className === "navbar") {
		x.className += " responsive";
	} else {
		x.className = "navbar";
	}
	}
	