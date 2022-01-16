(function($) {
  'use strict';

  if ($(".select2-single").length) {
    $(".select2-single").select2();
  }
  if ($(".select2-multiple").length) {
    let placeholder = $(".select2-multiple").data("placeholder")
    $(".select2-multiple").select2({
      placeholder: placeholder
    });
  }
})(jQuery);