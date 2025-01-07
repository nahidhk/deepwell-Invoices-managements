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
                    <h2>
                        Group Regestar and Management
                    </h2>
                </center>
                <hr>
                <div class="flex anaround">
                    <div class="frmbox">
                        <form action="/group/group.php" method="post">
                            <label for="">Group Name*</label>
                            <input name='name' type="text" class="input" required placeholder="Group Name"><br>
                            </select>
                            <br>
                            <center> <button class="btn">GO</button></center>
                        </form>
                    </div>
                </div>
            </blockquote>
        </div>
    </section>

    <section class="flex anaround">
        <div class="frmbox">
            <table class="minimalistBlack">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script src="/app.js"></script>
    <script src="/login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>