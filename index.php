<!DOCTYPE html> 
<html>
  <head>
    <title>FORM LOGIN</title>
    <style type="text/css">
    body {
      background-color: whitesmoke;
      color: black;
    }
    table{
      background: transparent;
      text-align: left;
      padding: 30px 35px
    }
    h2{
      background-color: lightgreen;
      padding: 30px 35px;
      text-align: center;
      color: blue;
    }
    button {
      background-color: yellow;
    }
    </style>
  </head>
  <body>
  <center>
  <h2>FORM LOGIN</h2>
  <form action="ceklogin.php" method="post">
    <table>
      <tr>
        <td>USERNAME</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>PASSWORD</td>
        <td><input type="text" name="password"></td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" value="login">LOGIN</button></td>
      </tr>
    </table>
  </form>
  </center>
  </body>
</html>