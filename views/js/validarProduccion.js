function validaProduccion(){
		var cantidad = document.querySelector('#cantidadOrden').value;
		var cliente = document.querySelector('#uno').value;
		var color = document.querySelector('#colorOrden').value;
		
/*===============================================
=            VALIDANDO CAMPO CLIENTE            =
===============================================*/

	/*if(cliente != ""){
			var expresion = /^[a-zA-Z0-9]*$/;
			if (!expresion.test(cliente)) {

				alert('Campo Cliente: Escriba solo texto sin numeros ni caracteres especiales');
				return false;

			}
		}*/

/*=====  End of VALIDANDO CAMPO CLIENTE  ======*/

/*=======================================
=             VALIDANDO CAMPO CANTIDAD            =
=======================================*/

if (cantidad !=  "") {
			if (cantidad <= 0) {
				alert('Campoo Cantidad: La cantidad debe de ser mayor a 0');
			//ssdocument.querySelector("label[for='error']").innerHTML += "<br>La cantidad debe de ser mayor a 0.</br>"
			return false;
		}
		}

/*=====  End of  CAMPO CANTIDAD  ======*/

/*==============================================
=            VALIDADNDO CAMPO COLOR            =
==============================================*/

if (color != "") {
	var expresion = /^[a-zA-Z]*$/;

	if (!expresion.test(color)) {
		alert('Campo Color: Escriba solo texto sin caracteres especiales');
				return false;
	}
}

/*=====  End of VALIDADNDO CAMPO COLOR  ======*/


		
		
	}