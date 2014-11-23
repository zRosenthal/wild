$(function () {
  $(".error").hide();

  console.log("hi");

  $("#account_registration").submit(function () {
    var $name, $email, $pw1, $pw2;

    $(".error").hide();

    // Check that the user entered a name.
    if(!$("#account_name").val()) {
      $("#account_name_error").show();
    } else {
      $name = trim($("#account_name").val());
    }

    // Check that the user entered an email address and validate it.
    if(!$("#account_email").val()) {
      $("#account_email_error").show();
    } else {
      $email = trim($("#account_email").val());

      if(!validate_email($email)) {
        $("#account_invalid_email_error").show();
        $email = "";
      }
    }

    // Check that the user entered both passwords correctly.
    if(!$("#password1").val() || !$("#password2").val()) {
      $("#password_error").show();
    } else {
      $pw1 = trim($("#password1").val());
      $pw2 = trim($("#password2").val());

      // Check for equality.
      if($pw1 != $pw2) {
        $("#password_equal_error").show();
        $pw1 = "";
        $pw2 = "";
      } else {
        if(!validate_pw($pw1)) {
          $("#password_strength_error").show();
          $pw1 = "";
          $pw2 = "";
        }
      }
    }

    if(!$name || !$email || $pw1 || $pw2) {
      console.log("Invalid form.");
      return false;
    } else {
      console.log("Valid form!");
      return true;
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

function validate_pw($pw) {
  var $pw_reg = /[a-z].*[0-9]|[0-9].*[a-z]/i;

  if(!$pw_reg.test($pw)) {
    return false;
  } else {
    return true;
  }
}