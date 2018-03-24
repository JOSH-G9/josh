<style>
input[type=text], select, input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div #loginPage {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
#body-createJob{
  display: inline-block;
  width: 100%;
  text-align: center;
}
#body-createJob form{
  display: inline-block;
  width: 400px;
}

</style>

<div id="loginPage">
  <div id="header-createJob">

  </div>
  <div id="body-createJob">
  <div id="_AJAX_LOG_"></div>
    <form class="" action="" method="" onkeypress="return runScriptLogin(event)">
      <table>
        <tr>
          <th><label for="email">Email:</label></th>
          <td><input id="email_login" type="text" name="email" value=""></td>
        </tr>
        <tr>
          <th><label for="password">Password:</label></th>
          <td><input id="pass_login" type="password" name="password" value=""></td>
        </tr>
      </table><br>
      <input type="button" value="Submit" onclick="goLogin()">
    </form>
  </div>
  <script src="views/javascript/login.js" type="text/javascript"></script>
</div>
