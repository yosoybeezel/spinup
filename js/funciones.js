$(document).ready(function() {
	
	$('a[href="home.php#mesa"]').parent().addClass('mLSelected');
		
	$('.sidebar-navbar-collapse > ul > li > a').on('click', function() {
		if ($('.sidebar-navbar-collapse').hasClass('in')) {
			$('.navbar-toggle').click();
		}
	});
	
	$('.list li a').click(function() {
		hideAll();
		var yoSoy = $(this).attr('href');
		var myString = yoSoy.substr(yoSoy.indexOf("#") + 1);
		
		var showMe = $('#paginas').contents().find('#'+myString);
		showMe.show();
				
		$('.list > li').removeClass('mLSelected');
		$(this).parent().addClass('mLSelected');
	});
	
})


function hideAll() {
	$('#paginas').contents().find('.secciones').hide();	
}

// function resizeIframe(obj) {
	// obj.style.height = 0;
	// obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
// }
// 
// function getMesaID() {
	// document.getElementById("opc2").value = document.getElementById("id_mesa").value;
// }
// 
// function get_MesaID() {
	// document.getElementById("opc3").value = document.getElementById("id_mesa2").value;
// }
// 
// function getCargoID() {
	// document.getElementById("opc").value = document.gevtElementById("id_cargo").value;
// }
// 
// function getEventoID() {
	// document.getElementById("opc4").value = document.getElementById("id_evento").value;
// }
// 
// 
// $('.nav a').on('click', function() {
	// $('.btn-navbar').click();
	// //bootstrap 2.x
	// $('.navbar-toggle').click() //bootstrap 3.x by Richard
// });





