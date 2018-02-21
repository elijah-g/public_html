<?php
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
    <h3>Your Items:</h3><table>
    <tr>
    <th><b>Price</b></th>
    <th><b>Name</b></th>
    <th><b>Unit Price</b></th>
    <th><b>Quantity</b></th>
    </tr>
OUTPUT;
$pricetotal = 0;
for ($i = 0; $i < count($cartContent); $i++) {
    $itemcost = $cartContent[$i]->Quantity * $cartContent[$i]->Price;
    echo <<<OUTPUT
    <tr><th>$itemcost</th>
    <th>{$cartContent[$i]->Title}</th>
    <th>{$cartContent[$i]->Price}</th>
    <th>{$cartContent[$i]->Quantity}</th>
    </tr>
OUTPUT;
$pricetotal = $pricetotal + ($cartContent[$i]->Price * $cartContent[$i]->Quantity);
       }

?>
    </table>
</div>

<?php
end_module();
?>
