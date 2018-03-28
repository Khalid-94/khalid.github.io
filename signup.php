<html>
<head>
    <title>Sign up Form</title>
<style>
    h3{
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
</style>
</head>

<body>
<h3 align="center"> Sign Up!! </h3>

<form action="signuppage.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table align="center" cellpadding = "20">

    <tr>
        <td>FIRST NAME</td>
        <td><input type="text" name="firstname" maxlength="30"/>
            (max 30 characters a-z and A-Z)
        </td>
    </tr>

    <tr>
        <td>LAST NAME</td>
        <td><input type="text" name="lastname" maxlength="30"/>
            (max 30 characters a-z and A-Z)
        </td>
    </tr>

    <tr>
        <td>DATE OF BIRTH</td>

        <td>
          <input type="date" name="dob">
        </td>
    </tr>

    <tr>
        <td>EMAIL ID</td>
        <td><input type="email" name="email" maxlength="100" /></td>
    </tr>

    <tr>
        <td>MOBILE NUMBER</td>
        <td>
            <input type="number" name="phone" maxlength="11" />
            (11 digit number)
        </td>
    </tr>

    <tr>
        <td>GENDER</td>
        <td>
            Male <input type="radio" name="gender" value="Male" />
            Female <input type="radio" name="gender" value="Female" />
        </td>
    </tr>

    <tr>
        <td>UserName</td>
        <td>
            <input type="text" name="username"  />

        </td>
    </tr>
   
    <tr>
        <td>Password</td>
        <td>
            <input type="password" name="password"  />

        </td>
    </tr>

    <tr>
        <td>ADDRESS <br /><br /><br /></td>
        <td><textarea name="address" rows="6" cols="40"></textarea></td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </td>
    </tr>
</table>

</form>

<?php
// define variables and set to empty values
$username = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $gender = test_input($_POST["gender"]);
  $username = test_input($_POST["username"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

</body>
</html>