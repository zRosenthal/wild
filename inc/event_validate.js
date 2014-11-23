$(function () {
  $(".error").hide();

  $("#event_registration").submit(function () {
    var $name = "", $max = "", $price = "", $city = "",
      $zip = "", $start = "", $end = "";

    $(".error").hide();

    // Check that the user entered an event name.
    if(!$("#event_name").val()) {
      $("#event_name_error").show();
    } else {
      $name = $.trim($("#event_name").val());
    }

    // Check that the user entered a valid max.
    if($("#max_tickets").val()) {
      if(!is_integer($("#max_tickets").val())) {
        $("#event_max_error").show();
        $max == -1;
      } else {
        $max = $("#max_tickets").val();
      }
    } else {
      $max = "";
    }

    // Check that the user entered a valid price.
    if(!$("#event_price").val()) {
      $("#event_price_error").show();
    } else {
      if($.isNumeric($("#event_price").val())) {
        $price = $("#event_price").val();
      } else {
        $("#event_price_invalid").show();
      }
    }

    // Check that the user entered an city.
    if(!$("#event_city").val()) {
      $("#event_city_error").show();
    } else {
      $city = $.trim($("#event_city").val());
    }

    // Check that the user entered a valid zip code.
    if(!$("#event_zip").val()) {
      $("#event_zip_error").show();
    } else {
      $zip = $.trim($("#event_zip").val());

      if(!is_integer($zip) || $zip.length != 5) {
        $("#event_zip_invalid").show();
        $zip = "";
      }
    }

    // Check that the user entered valid dates.
    if(!$("#event_start").val() || !$("#event_end").val()) {
      $("#event_date_error").show();
    } else {
      $start = $.trim($("#event_start").val());
      $end = $.trim($("#event_end").val());

      if(!is_date($start) || !is_date($end)) {
        $("#event_date_invalid").show();
        $start = "";
        $end = "";
      }
    }

    if(!$name || $max == -1 || !$price || !$city || !$zip || !$start || !$end) {
      return false;
    }
  });
});

function is_integer($number) {
  var $number_reg = /^[0-9]+$/;

  if(!$number_reg.test($number)) {
    return false;
  } else {
    return true;
  }
}

function is_date($date) {
  var $date_reg = /^\d{2}\/\d{2}\/\d{4}$/;

  if(!$date_reg.test($date)) {
    return false;
  } else {
    return true;
  }
}