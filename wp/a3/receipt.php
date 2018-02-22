<?php
session_start();
$cartContent = $_SESSION["cartContent"];
?>

<!doctype html>
<html>
<head>
    <title>Tax Invoice</title>
    <link type="text/css" rel='stylesheet' href="/~s3679959/moonboot.css">
</head>

<body>
<?php

?>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="/wp/img/moonbootwriting.png" style="width:100%; max-width:300px;">
                        </td>

                        <td>
                            <?php echo date("d-M-Y")?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <?php echo "{$_SESSION["address"]}" ?>
                        </td>

                        <td>
                            <?php echo $_SESSION["name"] ?><br>
                            <?php echo $_SESSION["email"] ?><br>
                            <?php echo $_SESSION["mobile"] ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr class="heading">
            <td>
                Item
            </td>

            <td>
                Price
            </td>
        </tr>
<?php for ($i = 0; $i < (int)$_SESSION["cartCount"]; $i++){
    echo <<<OUTPUT
    <tr class="item"><td>{$_SESSION["Title$i"]} x {$_SESSION["Quantity$i"]}</td >
            <td>\${$_SESSION["Price$i"]}.00</td >
        </tr >
OUTPUT;
        }
?>
        <tr class="total">
            <td></td>

            <td>
                Total: <?php echo "\${$_SESSION["priceTotal"]}.00";?>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
<?php
for ($i = 0; $i < (int)$_SESSION["cartCount"]; $i++){
    $IDOID = $_SESSION["ID$i"];
    explode(".", $IDOID);
    $order[$i] = array(date("d-M-Y"),$_SESSION["name"],$_SESSION["address"],$_SESSION["mobile"],$_SESSION["email"],$IDOID[0],$IDOID[1],$_SESSION["Quantity$i"],$_SESSION["Price$i"],$_SESSION["priceTotal"]);

}

$fp = fopen("order.csv","w");
lock($fp, LOCK_EX);
for ($i = 0; $i < (int)$_SESSION["cartCount"]; $i++){
    foreach ($order[$i] as $dataitem){
    fputcsv($fp,$dataitem);}
}
flock($fp, LOCK_UN);
fclose($fp);
?>

}