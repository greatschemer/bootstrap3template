$(function() {
	//activate schedule tabs
	var hash = window.location.hash;
	hash && $('ul.nav a[href="' + hash + '"]').tab('show');

	//controling opening of accordions
	$('#monday.panel-body').addClass('in');

	$('#artists #tuesday.panel-body').addClass('in');
	$('#artists #wednesday.panel-body').addClass('in');
	$('#artists #thursday.panel-body').addClass('in');
	$('#artists #friday.panel-body').addClass('in');

	//$('#register #monday.panel-body').removeClass('in');
	
	//add bootstrap classes to photos
	$('.abouttheartists img').addClass('img-circle');
	$('aside.photosfromlastyear img').addClass('img-thumbnail');
	$('.artistinfo  .photogrid img').addClass('img-circle');

	//highlight the current nav
	$("#home a:contains('Home')").parent().addClass('active');
	$("#schedule a:contains('Schedule')").parent().addClass('active');
	$("#artists a:contains('Artists')").parent().addClass('active');
	$("#venuetravel a:contains('Venue/Travel')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');


	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover

	//show tooltips
	$("[data-toggle='tooltip']").tooltip({animation:true});

	//show modals
	$('.modalphotos img').on('click', function(){
		$('#modal').modal({
			show: true
		});

		var mysrc = this.src.substr(0, this.src.length-7) + '.jpg';
		$('#modalimage').attr('src', mysrc);
		$('#modalimage').on('click', function(){
			$('#modal').modal('hide');
		});
	});

}); //jQuery is loaded