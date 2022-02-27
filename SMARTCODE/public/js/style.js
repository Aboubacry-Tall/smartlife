$(document).ready(function(){
	$('#suivant-1').click(function(){
		$('#etape-1').hide();
		$('#etape-2').show();
	});

	$('#suivant-2').click(function(){
		$('#etape-2').hide();
		$('#etape-3').show();
	})

	$(".m").click(function(){
		$('.mm').toggle();
	});
});

