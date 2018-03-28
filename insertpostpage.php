<html>
<head>
    <title>Student Registration Form</title>
    <style>
        h3{
            font-family: Calibri;
            font-size: 25pt;
            font-style: normal;
            font-weight: bold;
            color:SlateBlue;
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
            background-color: SlateBlue;
            border-collapse: collapse;
            border: 2px solid navy
        }
    </style>
</head>

<body>
<h3 align="center"> POST FORM</h3>

<form action="insertpost.php" method="post" enctype="multipart/form-data">
    <table align="center" cellpadding = "20">

        <tr>
            <td>Title</td>
            <td><input type="text" name="title"/>

            </td>
        </tr>

        <tr>
            <td>date</td>
            <td><input type="date" name="date" />

            </td>
        </tr>

        <tr>
            <td>Post Deatails</td>

            <td>
                <textarea cols="60" rows="10" type="details" name="details"></textarea>
            </td>
        </tr>

        <tr>
            <td>Image</td>
            <td><input type="file" name="photo"/>

            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>

</form>

</body>
</html>