$(function () {
  $(".error").hide();

  $("#account_registration").submit(function () {
    var $name, $email;

    $(".error").hide();

    // Check that the user entered a name.
    if(!$("#account_name").val()) {
      $("#account_name_error").show();
    } else {
      $name = $("#account_name").val();
    }

    // Check that the user entered an email address and validate it.
    if(!$("#account_email").val()) {
      $("#account_email_error").show();
    } else {
      $email = $("#account_email").val();
      if(validate_email($email)) {
        $email = trim($email);
      } else {
        $("#account_invalid_email_error").show();
      }
    }

  });
});

function validate_email($email) {
  var $email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

  if(!$email_reg.test($email)) {
    return false;
  } else {
    return true;
  }
}