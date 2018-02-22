
<?php
session_start();
session_unset();
session_destroy();
include ("tools.php");
include_once("/home/eh1/e54061/public_html/wp/debug.php");
top_module("Services");
function preshow($variable){
    echo "<pre>";
    print_r($variable);
    echo "</pre>";
}

$fp = fopen("/~s3679959/wp/a3/services.csv","r");
flock($fp, LOCK_SH);
$headings = fgetcsv($fp);
while ($tryAlineRead = fgetcsv($fp)){
    $count = count($tryAlineRead);
    for ($i=2; $i<$count; $i++) {
        $productTreeCSV[$tryAlineRead[0]][$tryAlineRead[1]][$headings[$i]] = $tryAlineRead[$i];
    }
}
//preshow($productTreeCSV);
flock($fp, LOCK_UN);
fclose($fp);

?>

<article id="about" class="centerblock container-fluid">
    <h2>Services</h2>
    <form id="serviceform" action="/~s3679959/wp/a3/Cart.php" method="post">
<?php
foreach ($productTreeCSV as $ID => $item) {
    foreach ($productTreeCSV[$ID] as $oid => $details) {
        echo <<<"OUTPUT"
    <div class="servicecontainer serviceitem">       
    <h3>{$details["Title"]}</h3>
    <p>{$details["Description"]}</p>
    <p class="leftcontainer">Price: <br> \${$details["Price"]}.00
    </p>
    <p id="formtext" class="">Select your quantity:  </p>
                        <div class="rightcontainer input-group input-number-group">
                            
                            <input id="amount" onkeyup="setprice()" name="qty[]" class="amount input-number" type="number" step="1" value="0" min="0" max="1000">
                            <input type="hidden" name="ID[]" value="$ID.$oid">
                            <input type="hidden" name="Title[]" value="{$details["Title"]}">
                            <input type="hidden" name="Description[]" value="{$details["Description"]}">
                            <input type="hidden" name="Price[]" class="price" value="{$details["Price"]}">
                            
                        </div>
                 <br><br>
    </div>
<br>
OUTPUT;
    }
}
?>
        <a href="Cart.php"><input id="CheckOutButton" type="submit" value="Check Out"></a>
    </form>
    <p id="changer">Please make a selection.</p>
    <script>

        //Javascript to make the quantity buttons function
        $('.input-number-increment').click(function() {
            var $input = $(this).parents('.input-number-group').find('.input-number');
            var val = parseInt($input.val(), 10);
            $input.val(val + 1);
        });

        $('.input-number-decrement').click(function() {
            var $input = $(this).parents('.input-number-group').find('.input-number');
            var val = parseInt($input.val(), 10);
            if(val>0){
                $input.val(val - 1);}
        })
    </script>
<script>
    function setprice() {
        amounts = document.getElementsByClassName("amount");
        prices = document.getElementsByClassName("price");
        var totalprice = 0;
        for (i = 0; i < 6; i++){
            qty = amounts[i].value;
            price = prices[i].value;
            totalprice = (totalprice + (qty * price));
        }
        document.getElementById("changer").innerHTML = "Order Sub-Total:  $"+totalprice+"\.00";
    }

</script>
</article>

<?php
end_module();
javascript_scroll();
?>

<script>

    //Javascript to make the quantity buttons function
    $('.input-number-increment').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        $input.val(val + 1);
    });

    $('.input-number-decrement').click(function() {
        var $input = $(this).parents('.input-number-group').find('.input-number');
        var val = parseInt($input.val(), 10);
        if(val>0){
            $input.val(val - 1);}
    })
</script>
