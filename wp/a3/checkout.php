<?php
session_start();
include ("tools.php");
top_module("Finalize Order");1

?>
<?php
// define variables and set to empty values
$nameErr = $expErr = $mobileErr = $addressErr = $cardErr = "";
$name = $cardExp = $cardNumber = $mobile = $address= $email ="";
$nameErr= $_SESSION["nameErr"];
$expErr = $_SESSION["expErr"];
$mobileErr = $_SESSION["mobileErr"];
$addressErr = $_SESSION["addressErr"];
$cardErr = $_SESSION["addressErr"];

?>
<div class="centerblock main" id="about">
<form method="post" action="receiptcalc.php">
    <h2>Enter your details:</h2>
    <table id="finalizeForm">
        <tr>
            <td width="25%">
                <p>Name: </p><?php echo "<p class='red'>$nameErr</p>";?>
            </td>
            <td class="forminput" width="25%">
                <input type="text" id="Name" name="name" value="<?php echo $name?>">
            </td>

            <td width="25%">
                <p>Address: </p><?php echo "<p class='red'>$addressErr</p>";?>
            </td>
            <td class="forminput" width="25%">
                <input type="text" id="address" name="address" value="<?php echo $address?>">
            </td>
        </tr>
        <tr>
            <td width="25%">
                <p>Email: </p>
            </td>
            <td class="forminput" width="25%">
                <input type="email" id="email" name="email" value="<?php echo $email?>">
            </td>

            <td width="25%">
                <p>Mobile Number: </p><?php echo "<p class='red'>$mobileErr</p>";?>
            </td>
            <td class="forminput" width="25%">
                <input type="tel" id="mobileNumber" onkeyup="checkvisa()" value="<?php echo $mobile?>"name="mobileNumber">
            </td>
        </tr>
        <tr>
            <td width="25%">
                <p>Credit Card Number: </p><?php echo "<p class='red'>$cardErr</p>";?>
            </td>
            <td class="forminput" width="25%">
                <input type="text" id="creditCard" onkeyup="checkvisa()" value="<?php echo $cardNumber?>"name="cardNumber">
            </td>

            <td width="25%">
                <p id="visalogo"></p>
                <p>Card Expiry: </p><?php echo "<p class='red'>$expErr</p>";?>
            </td>
            <td width="25%" class="forminput">
                <input type="month" name="cardExpire">
            </td>
        </tr>

    </table>
    <input id="finalBuy" type="submit" value="Print Receipt">
</form>
</div>

<script>
    function checkvisa() {
        number = document.getElementById("creditCard");
        if (number.substring(0, 4) == "4123") {
            document.getElementById("visalogo").innerHTML = number
        }

        else{
            document.getElementById("visalogo").innerHTML = '<i class="fa fa-cc-visa"></i>'
        }
    }
</script>