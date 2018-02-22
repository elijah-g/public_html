<?php
session_start();
include ("tools.php");
include_once("/home/eh1/e54061/public_html/wp/debug.php");
top_module("My Cart");
class cartItem
{
    public $ID;
    public $Quantity;
    public $Title;
    public function __construct($ID, $Title, $Quantity, $Price)
    {
        $this->ID=$ID;
        $this->Title=$Title;
        $this->Quantity=$Quantity;
        $this->Price=$Price;
    }
}
$title = $_POST["Title"];
$id = $_POST["ID"];
$quantity = $_POST["qty"];
$price = $_POST["Price"];
$cartContent = array();



for ($i = 0; $i < 6; $i++){
    if ($quantity[$i]>0) {
        $items = new cartItem($id[$i], $title[$i], $quantity[$i], $price[$i]);
        array_push($cartContent, $items);
    }
}

echo <<<OUTPUT
<div class="centerblock container-fluid" id="about">
    <h3>Your Items:</h3><table id="cartTable">
    <tr>
    <th><u>Price</u></th>
    <th><u>Name</u></th>
    <th><u>Unit Price</u></th>
    <th><u>Quantity</u></th>
    </tr>
OUTPUT;
$priceTotal = 0;
for ($i = 0; $i < count($cartContent); $i++) {
    $itemcost = $cartContent[$i]->Quantity * $cartContent[$i]->Price;
    echo <<<OUTPUT
    <tr><th>\$$itemcost.00</th>
    <th>{$cartContent[$i]->Title}</th>
    <th>\${$cartContent[$i]->Price}.00</th>
    <th>{$cartContent[$i]->Quantity}</th>
    </tr>
OUTPUT;
$priceTotal = $priceTotal + ($cartContent[$i]->Price * $cartContent[$i]->Quantity);
$_SESSION["Title$i"] = $cartContent[$i]->Title;
$_SESSION["Price$i"] = $cartContent[$i]->Price;
$_SESSION["Quantity$i"] = $cartContent[$i]->Quantity;
$_SESSION["ID$i"] = $cartContent[$i]->ID;
       }
$_SESSION["priceTotal"] = $priceTotal;
echo "</table><br>";
echo "<p id='ordertotal'>Order Total:  \$$priceTotal.00</p><br><br>";
echo count($cartContent);
echo <<<OUTPUT
<div class="container-fluid">
<a href="services.php"><input id="cancel" type="button" value="Cancel Purchase"></a>
<a href="checkout.php"><input id="finalBuy" type="submit" value="Finalize Purchase"></a>
</div>
OUTPUT;
foreach ($cartContent as $cartitem) {
    array_push($_SESSION,$cartitem);

}
?>

</div>

<?php
$_SESSION["cartCount"] = count($cartContent);
end_module();
?>
