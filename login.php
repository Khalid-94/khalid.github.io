<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
<style>
    h2{
        font-family: Calibri;
        font-size: 25pt;
        font-style: normal;
        font-weight: bold;
        color:#FFA500;
        text-align: center;
        text-decoration: underline
    }

    table{
        font-family: Calibri;
        color:white;
        font-size: 11pt;
        font-style: normal;
        font-weight: bold;
        text-align:;
        background-color: #FFA500;
        border-collapse: collapse;
        border: 2px solid navy
    }

    button{
        margin:auto;
        display:block;
   }
</style>
</head>
<body>
<h2 align="center" style="margin-top: 140px">Login</h2>
<form align="center"  method="post" action="loginpage.php">
   <label align="left" >Username</label><br>
    <input type="text" name="username"><br>
    <label>Password</label><br>
    <input type="password"  name="password"><br>
    <input type="submit">
    <br><br>
</form>
<div>
	<a href="home.php"><button>Home</button></a>
</div>
</body>
</html>