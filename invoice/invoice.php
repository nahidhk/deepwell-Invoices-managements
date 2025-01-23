<?php
require_once('../config.php');

$accountno = $_POST['accountno'];
$notes = $_POST['notes'];
$description = $_POST['description'];
$crop = $_POST['crop'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$name = $_POST['name'];
$fname = $_POST['fname'];
$invoiceid = $_POST['invoiceid'];
$unit = $_POST['unit'];
$users = $_POST['users'];
$dpct = $_POST['dpct'];
$amaount = $_POST['amaount'];
$groupx = $_POST['groupx'];
$submitdate = $_POST['submitdate'];
$typex = 'Unpiad';


$sql = "INSERT INTO invoice (accountno, notes, description, crop, quantity, price, name, fname, invoiceid, unit, users, dpct, amaount, groupx, submitdate , typex)
VALUES ('$accountno', '$notes', '$description', '$crop', '$quantity', '$price', '$name', '$fname', '$invoiceid', '$unit', '$users', '$dpct', '$amaount', '$groupx', '$submitdate' ,'$typex')";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?> 


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSH::Invoice</title>
</head>

<body>
    <br><br><b>
        <br><br>
    </b>
    <div class="flex center">
        <div>
            <p class="textcenter">Create and Upload your data MySQL server !</p>
            <h1 class='textcenter'><i class="fa-solid fa-stroopwafel fa-spin-pulse"></i></h1>
            <div class='textcenter' id="point"></div>
            <div class='amimetead'><div id='anyx' class='amimeteadx'></div></div>
            <br>
            No Reload and No Back this page!
    </div>
    <script src="/app.js"></script>
    <script>
      setInterval(myanyx, 1);
      function myanyx(){
    const anyx = document.getElementById('anyx');
    document.getElementById('point').innerHTML = anyx.clientWidth+'%';
    if (anyx.clientWidth === 300) {
      window.location.href=`/printInvoice/onlyInvoice/?invoiceid=<?php echo $invoiceid; ?>`;
    } 
}
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>