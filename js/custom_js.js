var check = false;
function toggleDrop(){
	if(check == false){
	document.getElementById("drop").style.display = "block";
	
	//alert("Fasle");
	check = true;
	}else{
	document.getElementById("drop").style.display = "none";
	//alert("True");
	check = false;
	}
}