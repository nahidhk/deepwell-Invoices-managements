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
                        Group Regestar and Management
                    </h2>
                </div>
                <hr>
                <div class="flex anaround">
                    <div class="frmbox textcenter">
                        <form action="/group/group.php" method="post">
                            <label for="">Group Name*</label>
                            <input id="filter" onclick="filterdata()" name='name' type="text" class="input" required
                                placeholder="Group Name">
                            <button class="btn">GO</button>
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
                                <th>Group Name</th>
                                <th>Create_at</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody id='showgroup'>
                            <tr>
                                <td colspan='4'>Loading...</td>

                            </tr>
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </section>
    <script src="/app.js"></script>
    <script src="/login.js"></script>
    <script src='/group/group.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>