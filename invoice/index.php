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
            <div class="textcenter">
                <h1>
                    Invoice Entry
                    <hr>
                </h1>
            </div>
            <div class="flex center grap">
                <div class="box">
                    <form action="" method="post">

                        <label for="">Account Number*</label><br>
                        <input oninput='appletust1()' id='accno' name="accno" required class="input" type="number"><br>

                        <label for="">Notes</label><br>
                        <input name="nots" class="input" type="text">


                        <label for="">Description*</label><br>
                        <select onchange='appletust()' id='depction' required class="input" name="description"></select><br>




                        <label for="">Price*</label><br>
                        <input name="price" required class="input" type="text"><br>


                        <label for="">Opratear*</label><br>
                        <select id="opra" required class="input" name="users">
                            <option selected disabled>Select Opratear</option>
                        </select>


                        <label for="">Invoice Number*</label><br>
                        <input id="inid" readonly name="accno" required class="input" type="text"><br>

                </div>
                <div class="box">


                    <label for="">Name*</label><br>
                    <input id='n' name="name" readonly class="input" type="text"><br>


                    <label for="">Fathear's Name*</label><br>
                    <input id='fn' name="fname" readonly class="input" type="text"><br>


                    <label for="">Quantity*</label><br>
                    <input id='qut' name="quantity" readonly required class="input" type="text"><br>

<input id='dpct' type="text">
                    <input class='fl' id='gx' name="groupx" readonly required class="input" type="text"><br>


                    <label for="">Unit*</label><br>
                    <input id='unit' name="fname" readonly class="input" type="text"><br><br>


                    <div class="textcenter">
                        <button id='thebtn' class="btn" type='submit'>Save New Invoice</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="/app.js"></script>
    <script src="/login.js"></script>
    <script src="/invoice/opra.js"></script>
    <script>
    yuoip();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>