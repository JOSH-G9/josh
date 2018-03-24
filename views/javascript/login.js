function goLogin() {
  var pass, email, form, connect;
  email = __('email_login').value;
  pass = __('pass_login').value;

  if (pass != '' && email != '') {
      form = 'email=' + email + '&pass=' + pass;
      connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
      connect.onreadystatechange = function(){
        if(connect.readyState == 4 && connect.status == 200){
          if(connect.responseText == 1){
            result = '<div class="alert-success">';
            result += '<h4><strong>Login completed. </strong></h4><p>Logging in. </p>';
            result += '</div>';
            __('_AJAX_LOG_').innerHTML =  result;
            location.reload();
          }else{
            __('_AJAX_LOG_').innerHTML =  connect.responseText;
          }
        }else if(connect.readyState != 4){
          result = '<div class="alert-warning">';
          result += '<h4><stron g>Processing... </strong></h4><p>Trying to log in...</p>';
          result += '</div>';
          __('_AJAX_LOG_').innerHTML =  result;
        }
      }
      connect.open('POST','ajax.php?mode=login',true);
      connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
      connect.send(form);
  }else {
    result = '<div class="alert-danger">';
    result += '<h4><strong>Error: </strong></h4><p>All fields must be given. </p>';
    result += '</div>';
    __('_AJAX_LOG_').innerHTML =  result;
  }
}

function runScriptLogin(e){
  if (e.keyCode == 13) {
    goLogin();
  }
}
