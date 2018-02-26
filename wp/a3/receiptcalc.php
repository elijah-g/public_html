<?php
include_once("/home/eh1/e54061/public_html/wp/debug.php");
session_start();
ob_start();

// define variables and set to empty values
$nameErr = false;
$expErr = false;
$mobileErrErr = false;
$addressErr = false;
$cardErr = false;
$name = $cardExp = $cardNumber = $mobile = $address= $email ="";

//echo $_POST["cardExpire"];


    if (empty($_POST["name"])) {
        $_SESSION["nameErr"] = "*required";
        $nameErr = true;
        //echo $_SESSION["nameErr"];
        //header("Location: checkout.php");
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
            $_SESSION["nameErr"] = "*Invalid";
            $nameErr = true;
            //echo $_SESSION["nameErr"];
            //echo (string)$nameErr;

        } else {
            $_SESSION["name"] = ($_POST["name"]);
            $nameErr = false;
        }
    }
    $_SESSION["email"] = ($_POST["email"]);
    if (empty($_POST["address"])) {
        $_SESSION["addressErr"] = "*required";
        $addressErr = true;
    } else {
        $_SESSION["address"] = ($_POST["address"]);
    }

    if (empty($_POST["mobileNumber"])) {
        $_SESSION["mobileErr"] = "*required";
        $mobileErr = true;
    } else {
        if (!preg_match("/^04(\s?[0-9]{2}\s?)([0-9]{3}\s?[0-9]{3}|[0-9]{2}\s?[0-9]{2}\s?[0-9]{2})$|^\+614(\s?[0-9]{2}\s?)([0-9]{3}\s?[0-9]{3}|[0-9]{2}\s?[0-9]{2}\s?[0-9]{2})$|^\(04\)(\s?[0-9]{2}\s?)([0-9]{3}\s?[0-9]{3}|[0-9]{2}\s?[0-9]{2}\s?[0-9]{2})$/", $_POST["mobileNumber"])) {
            $_SESSION["mobileErr"] = "invalid";
            $mobileErr = true;
        } else {
            $_SESSION["mobile"] = $_POST["mobileNumber"];
        }
    }

    if (empty($_POST["cardNumber"])) {
        $_SESSION["cardErr"] = "*required";
        $cardErr = true;
    } else {
        $tmpcard = str_replace(' ', '', $_POST["cardNumber"]);
        if (!preg_match("/^[0-9]{12,19}$/", $tmpcard)) {
            $_SESSION["cardErr"] = "*invalid";
            $cardErr = true;
        } else {
            $_SESSION["cardNumber"] = $_POST["cardNumber"];
        }


        $cardYear = substr($_POST["cardExpire"], 0, 4);
        $cardDate = substr($_POST["cardExpire"], 5, 2);
        //$cardErr = $cardDate;
        if (empty($_POST["cardExpire"])) {
            $_SESSION["expErr"] = "*required";
            $expErr = true;
        }
            if ($cardYear < (int)date(Y)) {
                $_SESSION["expErr"] = "*expired";
                $expErr = true;
            }
            if ($cardYear = (int)date(Y) && (int)$cardDate < (int)date(m)) {
                $_SESSION["expErr"] = "*expired";
                $expErr = true;
            }

            else {
                $_SESSION["cardExp"] = $_POST["cardExpire"];
            }

        }
        ob_end_clean();
        if ($nameErr == true || $expErr == true || $mobileErr == true || $addressErr == true || $cardErr == true) {
            header("Location: checkout.php");

        }
        else{

            header("Location: receipt.php");

        }


