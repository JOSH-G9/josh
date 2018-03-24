function goNewJob() {
  var description, category, video_url, form, connect;
  description = document.getElementById('description').value;
  category = document.getElementById('category').value;
  video_url = document.getElementById('video_url').value;

  if (description != '' && category != '') {
      form = 'description=' + description + '&category=' + category + '&video_url=' + video_url;
      connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
      connect.onreadystatechange = function(){
        if(connect.readyState == 4 && connect.status == 200){
          if(connect.responseText == 1){
            result = '<div class="alert-success">';
            result += '<h4><strong>Login completed. </strong></h4><p>Logging in. </p>';
            result += '</div>';
            document.getElementById('_AJAX_NEWJOB_').innerHTML =  result;
            window.open("?page=newJob&msg=1");
          }else{
            document.getElementById('_AJAX_NEWJOB_').innerHTML =  connect.responseText;
          }
        }else if(connect.readyState != 4){
          result = '<div class="alert-warning">';
          result += '<h4><stron g>Processing... </strong></h4><p>Trying to log in...</p>';
          result += '</div>';
          document.getElementById('_AJAX_NEWJOB_').innerHTML =  result;
        }
      }
      connect.open('POST','ajax.php?mode=newJob',true);
      connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
      connect.send(form);
  }else {
    result = '<div class="alert-danger">';
    result += '<h4><strong>Error: </strong></h4><p>All fields must be given. </p>';
    result += '</div>';
    document.getElementById('_AJAX_NEWJOB_').innerHTML =  result;
  }
}

function runScriptNewJob(e){
  if (e.keyCode == 13) {
    goNewJob();
  }
}
