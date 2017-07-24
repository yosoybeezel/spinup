function resizeIframe(obj) {
	obj.style.height = 0;
	obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
 }

function getMesaID() {
     document.getElementById("opc2").value = document.getElementById("id_mesa").value;
 }
function get_MesaID() {
     document.getElementById("opc3").value = document.getElementById("id_mesa2").value;
 }
function getCargoID() {
     document.getElementById("opc").value = document.getElementById("id_cargo").value;
 }
function getEventoID() {
     document.getElementById("opc4").value = document.getElementById("id_evento").value;
 }

$(document).ready(function(){
	// $('#mesa').hide();
	// $('#usuarios').hide();
	// $('#eventos').hide();
	// $('#repositorio').hide();	
	$('.sidebar-navbar-collapse > ul > li > a').on('click',function(){
		if($('.sidebar-navbar-collapse').hasClass('in')){
			$('.navbar-toggle').click();
		}
	});
})
