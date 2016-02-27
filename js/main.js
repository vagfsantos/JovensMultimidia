function jmSearch(){
	var btn = document.querySelector("#jm_btn_seach");
	var campo = document.querySelector("#jm_campo_busca");

	function toggleCampo(){
		campo.classList.toggle("active");
	}

	btn.addEventListener("click", toggleCampo);
}

window.onload = jmSearch;