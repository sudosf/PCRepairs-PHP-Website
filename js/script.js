function showPassword() {

    var psw = document.getElementById("psw");
    var psw_repeat = document.getElementById("psw_repeat");

    if (psw.type === "password") psw.type = "text";
    else psw.type = "password";

    if (psw_repeat.type === "password") psw_repeat.type = "text";
    else psw_repeat.type = "password";
  }