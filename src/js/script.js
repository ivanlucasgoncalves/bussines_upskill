/**
 *	jQuery Document Ready
 */

jQuery(function ($) {

  Formstore();

  function Formstore() {

    //Fill the fields on localStorage
    $('input[name="most_enjoy"]').change(function () {
        localStorage[$(this).attr('name')] = $(this).val();
        $('.blk_most_enjoy').css('display','none');
        $('.blk_want_improve').css('display','block');
    });
    $('input[name="want_improve"]').change(function () {
        localStorage[$(this).attr('name')] = $(this).val();
        $('.blk_want_improve').css('display','none');
        $('.blk_want_to').css('display','block');
    });
    $('input[name="want_to"]').change(function () {
        localStorage[$(this).attr('name')] = $(this).val();
        $('.blk_want_to').css('display','none');
        $('.blk_main_form').css('display','block');
    });

    $('input[type="radio"]').change(function () {
      //Diploma of Project Management
      if (localStorage["most_enjoy"] == 'Diploma of Project Management' || localStorage["want_improve"] == 'Diploma of Project Management' || localStorage["want_to"] == 'Diploma of Project Management') {
        $('#diploma_pm').css('display','block');
      }
      //Diploma of Business
      if (localStorage["most_enjoy"] == 'Diploma of Business' || localStorage["want_improve"] == 'Diploma of Business' || localStorage["want_to"] == 'Diploma of Business') {
        //$('input[name="most_enjoy"]').val(localStorage["most_enjoy"]);
        $('#diploma_business').css('display','block');
      }
      //Diploma of Marketing
      if (localStorage["most_enjoy"] == 'Diploma of Marketing' || localStorage["want_improve"] == 'Diploma of Marketing' || localStorage["want_to"] == 'Diploma of Marketing') {
        $('#diploma_marketing').css('display','block');
      }
      //Diploma of Leadership & Management
      if (localStorage["most_enjoy"] == 'Diploma of Leadership & Management' || localStorage["want_improve"] == 'Diploma of Leadership & Management' || localStorage["want_to"] == 'Diploma of Leadership & Management') {
        $('#diploma_ls_man').css('display','block');
      }
    });

    $('#submit').click(function () {

      //Get the data from all the fields
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var most_enjoy = localStorage.getItem('most_enjoy');
      var want_improve = localStorage.getItem('want_improve');
      var want_to = localStorage.getItem('want_to');

      //Simple validation to make sure user entered something
      //If error found, add hightlight class to the text field
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
            var dataString = '&name=' + name + '&email=' + email + '&phone=' + phone + '&most_enjoy=' + most_enjoy + '&want_improve=' + want_improve + '&want_to=' + want_to;
            //alert(dataString);

            //show the loading sign
        		$('.spa-loader').addClass('spa-loader-open');
            $('.ipt-submit').addClass('hidden-ipt');

            //start the ajax
            $.ajax({
              type: "POST",
              url: "email.php",
              data: $('#formideal').serialize(),
              dataType: 'json',
              complete: function(r) {
                // We have a OK
                document.getElementById('formideal').reset();
                $('.spa-loader').removeClass('spa-loader-open');
                $('.ipt-submit').removeClass('hidden-ipt');
                $('.blk_main_form').css('display','none');
                $('.msg_contact').css('display','block');
                localStorage.clear();
                //ga('send','event','EDM','Strategy One');
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

  }

});
