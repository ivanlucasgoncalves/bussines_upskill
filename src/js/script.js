/**
 *	jQuery Document Ready
 */

jQuery(function ($) {

  $('#localStorageTest').click(function() {
      localStorage.clear();
  });

  Formstore();


  function Formstore() {

    /*Checkbox - Accept*/
    $('.checkbox').change(function() {
      $(".switchthree").toggleClass("switchthreeOn");
    });

    //Fill the fields on localStorage
    $('input[name="most_enjoy"]').change(function () {
        localStorage[$(this).attr('name')] = $(this).val();
    });
    $('input[name="want_improve"]').change(function () {
        localStorage[$(this).attr('name')] = $(this).val();
    });
    $('input[name="want_to"]').change(function () {
        localStorage[$(this).attr('name')] = $(this).val();
    });

    //Diploma of Project Management
    if (localStorage["most_enjoy"] == 'being_organised' || localStorage["want_improve"] == 'time_management' || localStorage["want_to"] == 'master_project') {
      $('#diploma_pm').css('display','block');
    }
    //Diploma of Business
    if (localStorage["most_enjoy"] == 'being_operational' || localStorage["want_improve"] == 'experience' || localStorage["want_to"] == 'clarify_goals') {
      //$('input[name="most_enjoy"]').val(localStorage["most_enjoy"]);
      $('#diploma_business').css('display','block');
    }
    //Diploma of Marketing
    if (localStorage["most_enjoy"] == 'being_creative' || localStorage["want_improve"] == 'problem_solving' || localStorage["want_to"] == 'embrance_criativity') {
      $('#diploma_marketing').css('display','block');
    }
    //Diploma of Leadership & Management
    if (localStorage["most_enjoy"] == 'being_leader' || localStorage["want_improve"] == 'working_people' || localStorage["want_to"] == 'support_individuals') {
      $('#diploma_ls_man').css('display','block');
    }


    /*$('#formstore').submit(function (FormStore) {

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
    });*/

  }


});
