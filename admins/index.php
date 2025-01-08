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
    <section class='flex center '>
        <div class="row  wm  left ">
            <blockquote>
                <div class="textcenter">
                    <h2>
                        Join New Users
                    </h2>
                </div>
                <hr>
                <div class="flex anaround">
                    <div class="frmbox">
                        <form action="/admins/admin.php" method="post">
                            <label for="">Name*</label><br>
                            <input name='name' type="text" class="input" required placeholder="Opratear Name">
                            <br>
                            <label for="">Mobile*</label><br>
                            <input name='mobile' type="text" class="input" required placeholder="018xxxxxxxx">
                            <br>
                            <label for="">username*</label><br>
                            <input onclick='filterData()' id="filter" name='username' type="text" class="input" required placeholder="username">
                            <br>
                            <label for="">Pin*</label><br>
                            <input name='pin' type="number" class="input" required placeholder="Opratear Name">
                            <br>
                            <div class="textcenter">
                            <button class="btn">Joined</button>
                            </div>
                        </form>
                    </div>
                </div>
            </blockquote>

            <!-- Tabel -->
            <div class="flex center">
                <main class="border tabscroll">
                    <table class="minimalistBlack frmbox">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Useername</th>
                                <th>Name</th>
                                <th>Pin</th>
                                <th>Create_at</th>
                            </tr>
                        </thead>
                        <tbody id='showuser'>
                            <tr>
                                <td colspan='5'>Loading...</td>

                            </tr>
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </section>
    <script src="/app.js"></script>
    <script src="/login.js"></script>
    <script src='/admins/user.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>