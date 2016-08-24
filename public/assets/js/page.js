(function() {
  $('#toggle').click(function(event) {
    event.preventDefault();
    if ($('#toggle i').hasClass('isDown')) {
      $('.navbar-fixed-top').animate({
        'margin-top': '-50px'
      }, 'fast');
      $('.main-container').animate({
        'margin-top': '5px'
      }, 'slow');
      $('#toggle i').removeClass('isDown');
      $('#toggle i').removeClass('fa-chevron-up');
      $('#toggle i').addClass('fa-chevron-down');
      return false;
    } else {
      $('.main-container').animate({
        'margin-top': '80px'
      }, 'fast');
      $('.navbar-fixed-top').animate({
        'margin-top': '0px'
      }, 'fast');
      $('#toggle i').addClass('isDown');
      $('#toggle i').removeClass('fa-chevron-down');
      $('#toggle i').addClass('fa-chevron-up');
      return false;
    }
  });

  $('body footer.footer div.black-glass .social li a').click(function(event) {
    event.preventDefault();
    return alert("hola");
  });

}).call(this);
