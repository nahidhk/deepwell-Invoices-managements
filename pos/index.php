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
    <section class='flex anaround'>
        <div class="row  wm  left ">
            <blockquote>
                <center>
                    <h2>POS Rejester</h2>
                </center>
                <hr>
                <div class="flex anaround">
                    <div class="frmbox flex">
                        <form action="/far.php" method="post">
                            <label for=""> Farmer Name*</label>&nbsp;
                            <input name="name" type="text" id="farm" list="farmers" class="input" required placeholder="মোঃ ------ "><br>
                        
                            <label for=""> Father's Name*</label>&nbsp;
                            <input name="fname" type="text" id="father" class="input" required placeholder="মোঃ ------ "><br>
                        
                            <label for=""> Farmer ID*</label>&nbsp;
                            <input name="fid" type="text" class="input" required placeholder="00"><br>
                        
                            <!-- Datalist -->
                            <datalist id="farmers">
                                <option value="nahid">
                                <option value="hasan">
                                <option value="rahim">
                            </datalist>
                        
                            <br>
                            <center><button class="btn">GO</button></center>
                        </form>
                        
                    </div>

                </div>
            </blockquote>
        </div>
    </section>

    <script src="/app.js"></script>
    <script src="/login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>