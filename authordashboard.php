<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>
.btn-group button {
    background-color: #FF7F50; 
    border: 1px solid green; 
    color: white; 
    padding: 10px 24px; 
    cursor: pointer; 
    float: left; 
}

.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

.btn-group button:not(:last-child) {
    border-right: none; 
}

.btn-group button:hover {
    background-color: #A9A9A9;
}
</style>
<head>
	<title>Home</title>
</head>
<body>
<div class="btn-group" style="width:100%">
  <button style="width:33.33%">Home</a></button>
  <a href="insertpostpage.php"><button style="width:33.33%">Post</button></a>
  <a href="login.php"><button style="width:33.33%">Logout</button></a>
</div>

 <table>

    <tr>

        <table width="100%">
            <tr>
                <td width="10%" ></td>
                    <td width="80%" >
                        <table width="100%">
                            <tr height="10px">
                                <td width=""><h3>Why should we read books?</h3></td>
                            </tr>
                    
                           
                            <tr>
                                <td width="">01/09/2017 written by DR.Khalid</td>
                            </tr>
            
                            <tr>
                                <td width="10%"><img src="img/book.jpg" width="150px" height="100px"></td>
                                <td width="70%">
                                    Even if you have read one good book in your life, you will know what reading gives. It gives you incomparable pleasure. While there is no doubt about the fact that reading is a priceless activity, it has been observed that the habit of reading has declined of late. One of the main causes for this decline is the growth of technology. However, what most people don’t know is there is so much to benefit from reading.
                                </td>

                            </tr>
                            
                            
                            
                        </table>
                            <hr>
                            
                        <table>
                            <td style="height:60px">
                        </table>
                        
                        <table>

                            <tr >
                                <td height="20%"><h3>Wave form of EEE</h3></td>
                            </tr>
                            <tr>
                                <td>01/07/1994 written by MD.Ashraful Alam</td>
                            </tr>
                            <tr>
                                <td ><img src="img/Wave.gif" width="150px" height="100px"></td>
                                <td >
                                    Electronic systems use an extremely wide variety of signal waveform types and shapes from sinusoidal to those created by waveform generators.
                                </td>
                            
                        </table>
                        
                        <hr>
                        
                        <table>
                            <td style="height:60px">
                        </table>
                
                <td width="10%" ></td>
            </tr>
        </table>
        
     
    </tr>
</table>

<table>
    <tr>
        <table width="100%" bgcolor="#EBEBEB">
            <tr>
                <td width="15%"></td>
                <td width="70%">
                    <table width="100%">
                        <tr>
                            <td width="33%"><img src="img/bcb.png" width="90px" height="100px"><br>
                                Bangladesh cricket board

                            </td>
                            <td width="33%"><img src="img/cup.jpg" width="90px" height="100px"><br>
                                Nasir takes the cup
                            </td>
                            <td width="33%"><img src="img/mushi.jpg" width="90px" height="100px"><br>
                                The roaring Mushfiq
                            </td>

                        </tr>
             
                            <td style="height:30px">
                    </table>
                </td>
                <td width="25%"></td>
            </tr>
        </table>
    </tr>
    <tr>
        <table width="100%">
            <tr>
                copyright ARKO LIGHTS
            </tr>
        </table>
    </tr>
</table>

</body>
</html>