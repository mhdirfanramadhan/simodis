let $login = false;

function ShowPass(){
	let $getID = document.getElementById("pass");
	if ($login === false){
		$getID.setAttribute("type","text");
		$login= true;
	}else if($login === true){
		$getID.setAttribute("type","password");
		$login = false;
	}
}