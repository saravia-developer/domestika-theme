(function($){

  $(document).on('click', '.site-title', function(e) {
    e.preventDefault();
    // alert('Realizaste un click en el título');
    // console.log('Realizaste un click en el título');

    $.ajax({
      url: dcms_vars.ajaxurl,
      type: 'post',
      data: {
        action: 'dcms_ajax_readmore',
        test: 'este string se esta pasando por js por el método AJAX'
      },
      success: function(resultado) {
        console.log(resultado)
      }
    })
  })


})(jQuery);