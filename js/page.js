function searching(){
	var text = document.getElementById('hledani_text');
	if (text.value == "" && text.style.width != "130px") {
		text.style.width = "130px";
		text.focus();
	} else if (text.value == "") {
		text.style.width = "0px";
	}
}