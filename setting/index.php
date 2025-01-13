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
    <div class="be0fb nav">
        <div class="flex anaround">
            <div class="row navtext">
                <h2>
                    <i class="fa-solid fa-screwdriver-wrench"></i> Setting
                </h2>
            </div>
        </div>
        <section class="flex anaround">
            <!-- Units Setting -->
            <div class='flex center'>
                <div>
                    <h2>#01 Units Setting
                        <hr>
                    </h2>
                    <main class="border tabscroll">
                        <table class="minimalistBlack frmbox">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Units Name</th>
                                    <th>Create_at</th>
                                    <th>^^^^</th>
                                </tr>
                            </thead>
                            <tbody id='units'>
                                <tr>
                                    <td colspan='4'>
                                        <button onclick="apicall('/invoice/setUnit.php')" class="btn">Add New <i
                                                class="fa-solid fa-plus btnicon"></i> </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </main>
                </div>
            </div>
            <!-- End The Units Setting -->


        </section>


        <!-- paymari Js -->
        <script src="/app.js"></script>
        <script src="/login.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
            integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>