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
                <h2>New Farmer Regestar</h2>
            </center>
            <hr>
       <div class="flex anaround">
        <div class="frmbox">
            <form action="/far.php" method="post">
                <label for=""> Farmer Name*</label>&nbsp;<br>
                <input name="name" type="text" class="input" required placeholder="মোঃ ------ "><br>
                <label for="">Father's Name</label><br>
                <input name="fathername" type="text" class="input" placeholder="মোঃ ------ "><br>
                <label for="">Mather's Name</label><br>
                <input name="mathername" type="text" class="input"  placeholder="মছাঃ ------ "><br>
                <label for="">Farmer Address *</label><br>
                <input name="address" type="address" class="input" required  placeholder="ঠিকানা"><br>
                <label for="">Farmer Mobile*</label><br>
                <input name="phone" type="number" class="input" required placeholder="+880 0000 0000 00"><br>
                <label for="">Farmer Email   :</label>&nbsp;<br>
                <input name="email" type="email" class="input"  placeholder="you@exampule.com"><br>
                <label for="">Group*</label>&nbsp;<br>
                <select class='input' name="groupx" id="groupx">
                    <option selected disabled>Select Group</option>
                   
                </select>
                <br>
               <center> <button class="btn">GO</button></center>
            </form>
        </div>
        
       </div>
        </blockquote>
        </div>
    </section>

    <script src="/app.js"></script>
    <script src="/login.js"></script>
    <script src='/ur/ur.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js" integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>