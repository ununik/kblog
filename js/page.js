function searching(){    
	var text = document.getElementById('hledani_text');
	if (text.value == "" && text.style.width != "130px") {
		text.style.width = "130px";
		text.focus();
	} else if (text.value == "") {
		text.style.width = "0px";
	} else{
		searchBox = document.getElementById('hledani_text');
		search(searchBox.value);
	}
}

function search(words){;
	window.location.replace('?page=search&search=' + words);
}

function addParameterToURL(param){
    _url = location.href;
    _url += (_url.split('?')[1] ? '&':'?') + param;
    return _url;
}