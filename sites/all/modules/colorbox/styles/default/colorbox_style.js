(function ($) {

Drupal.behaviors.initColorboxDefaultStyle = {
  attach: function (context, settings) {
    $(context).bind('cbox_complete', function () {
      // Only run if there is a title.
      if ($('#cboxTitle:empty', context).length == false) {
        
      }
      else {
        $('#cboxTitle', context).hide();
      }
    });
  }
};

})(jQuery);
