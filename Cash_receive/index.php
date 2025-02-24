<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSH::Invoice</title>
</head>

<body>
    <?php require_once('../components/nav.html') ?>
    <br><br><br>
    <section class="flex center">
        <div class="frmbox">
            <h2>Customer Cash Recave</h2>
            <hr>
            name: <input type="text" class="view" id="n"><br>
            F name: <input type="text" class="view" id="fn"><br>
            Group: <input type="text" class="view" id="gx"></span>
            <hr>
            <form action="/Cash_receive/next" method="post">
                <label for="">Account NO</label><br>
                <input name='accno' id='accno' type="number" class="input" required>

                <br>
               <div class="textcenter">
               <button class='btn'>Next</button>
               </div>
            </form>
        </div>
    </section>
    
    <script src='/app.js'></script>
    <script src='/login.js'></script>
    <script src="/Cash_receive/vercel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>