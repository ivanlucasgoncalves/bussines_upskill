/**
 *	jQuery Document Ready
 */
jQuery(function ($) {

  /*Checkbox*/
  $('.checkbox').change(function() {
    $(".switchthree").toggleClass("switchthreeOn");
  });

  $('#contact').submit(function () {

    //Get the data from all the fields
    var company = $('#company').val();
    var name = $('#name').val();
    var email = $('#email').val();
    var phone = $('#phone').val();

    //Simple validation to make sure user entered something
    //If error found, add hightlight class to the text field
    if (company =='') {
      $('#company').addClass('hightlight');
      return false;
    } else $('#company').removeClass('hightlight');

    if (name =='') {
      $('#name').addClass('hightlight');
      return false;
    } else $('#name').removeClass('hightlight');

    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        $('#email').addClass('hightlight');
        return false;
    } else $('#email').removeClass('hightlight');

    if (phone =='') {
      $('#phone').addClass('hightlight');
      return false;
    } else $('#phone').removeClass('hightlight');

    //Checkbox should be checked
    $('input[type=checkbox]').each(function () {
        if($(this).is(':checked')){

          //organize the data properly
          var dataString = 'company=' + company + '&name=' + name + '&email=' + email + '&phone=' + phone;

          //show the loading sign
      		$('.spa-loader').addClass('spa-loader-open');

          //start the ajax
          $.ajax({
            type: "POST",
            url: "email.php",
            data: $('#contact').serialize(),
            dataType: 'json',
            complete: function(r) {
              // We have a OK
              document.getElementById('contact').reset();
              $('.msg-contact').css( "display", "block" );
              $(".switchthree").addClass("switchthreeOn");
              $('.spa-loader').removeClass('spa-loader-open');
              ga('send','event','EDM','Strategy One');
            }
          });
        } else {
          alert("Please you should accept the terms to proceed the process of sending. Thank you.");
          return false;
        }
    });
    //cancel the submit button default behaviours
    return false;
  });

  // Smooth Scroll Anchors
	$('a[href*="#"]:not([href="#"])').on('click', function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top
				}, 600);
				return false;
			}
		}
	});

});
