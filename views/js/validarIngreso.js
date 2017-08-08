function validacion() {

	//VARIABLES QUE VIENEN DEL FORMULARIO DE INICIO DE SESION

	var usuario = document.querySelector('#usuarioIngreso').value;
	var password = document.querySelector('#passwordIngreso').value;

//VALIDA QUE LA VARIABLE USUARIOS NO VENGA VACIA
//VALIDA QUE LOS VALORES INGRESADOS NO SEAN MAYORES A 6 CARACTERES
//VERIFICA QUE LOS VALORES INGRESADOS NO CONTENGAN CARACTERES ESPECIALES
	if(usuario != ""){
		var caracteres = usuario.length;
		var expresion = /^[a-zA-Z0-9]*$/;

		if (caracteres > 6) {
			//document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br>Escribe menos de 6 caracteres...</br>"
			alert('[ADVERTENCIA] Escriba menos de 6 caracteres...');
		return false;
		}

		if (!expresion.test(usuario)) {
			//document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br>No escriba caracteres especiales</br>"
		alert('[ERROR] No escriba caracteres especiales...!');
		return false;
		}

	}
  
}

/*================================
=            PASSWORD            =
================================*/

//VALIDA QUE LA VARIABLE NO VENGA VACIA, QUE SEA MAYOR A 6 CARACTERES Y QUE CONTENGA CARACTERES ESPECIALES

if (password != "") {
	var caracteres = password.length;
	var expresion = /^[a-zA-Z0-9]*$/;

	if (caracteres <= 5) {

			//document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br>Escribe menos de 6 caracteres...</br>"
			alert('[ADVERTENCIA] Escriba 6 o mas caracteres...');
		return false;
		}
		if (caracteres > 10) {
			alert('[ADVERTENCIA] Escriba 10 o menos caracteres...');
		return false;

		}

		if (!expresion.test(password)) {
			//document.querySelector("label[for='usuarioIngreso']").innerHTML += "<br>No escriba caracteres especiales</br>"
		alert('[ERROR] No escriba caracteres especiales...!');
		return false;
		}

}


/*=====  End of PASSWORD  ======*/