<!DOCTYPE html>
<html lang="en">
<?php

$invoiceid = $_GET['invoiceno'];

?>

<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSH::Invoice</title>
</head>

<body>
    <?php require_once('../components/nav.html') ?>
    <br><br><br>
    <div class="flex center">
        <div>
            <hr>
            <form action="/printInvoice/onlyInvoice/" method="get">
                <label for="">one Day Invoice</label>

              <input name='invoiceid' <?php if (isset($invoiceid)) { echo "type='" . $_GET['type'] . "'"; } else { echo "type='number'"; }; echo"value='" .$invoiceid."'";?> class='input' placeholder='Print by invoice id' required>
                <input type="submit" value="Print" class="btn">
            </form>
            <hr>
        </div>
    </div>
    <script src="/app.js"></script>
    <script src="/login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>