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
    
    <div class='flex center'>
                    <div>
                        <h2 class='textcenter'>Invoice Manager
                            <hr>
                        </h2>
                        <label for="">Search by Id , Invoice Id , Account no and Group : </label>
                        <input id='filter' type="text" class="input">
                        <main class="border tabscroll">
                            <table class="minimalistBlack frmbox">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Date</th>
                                        <th>Invoice ID</th>
                                        <th>Account No</th>
                                        <th>Name</th>
                                        <th>F. Name</th>
                                        <th>Group</th>
                                        <th>Land</th>
                                        <th>Price X</th>
                                        <th>Total Amount</th>
                                        <th>Notes</th>
                                        <th>Staps</th>
                                    </tr>
                                </thead>
                                <tbody id='invoices'>

                                </tbody>
                            </table>
                        </main>
                    </div>
                </div>

    <script src="/app.js"></script>
    <script src="/login.js"></script>
    <script src='/invoice-manager/invoicerun.js'></script>
    <script>
   displayData();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/all.min.js"
        integrity="sha512-1JkMy1LR9bTo3psH+H4SV5bO2dFylgOy+UJhMus1zF4VEFuZVu5lsi4I6iIndE4N9p01z1554ZDcvMSjMaqCBQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>