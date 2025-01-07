<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSH::Invoice</title>
</head>
<?php 
 $id = $_GET['id'];
 $groupName = $_GET['groupname'];
?>

<body>
    <?php require_once('../../components/nav.html') ?>
    <section class='flex center '>
        <div class="row  wm  left ">
            <blockquote>
                <div class="textcenter">
                    <h2>
                        Group Edit and Management
                    </h2>
                </div>
                <hr>
                <div class="flex anaround">
                    <div class="frmbox textcenter">
                        <form action="/group/edit/edit.php" method="post">
                            <label for="">Group ID*</label><br>
                            <input readonly name='id' type="text" class="input" required placeholder="Group Name" value='<?php echo $id ?>'><br>
                            <label for="">Group Name*</label><br>
                            <input value='<?php echo $groupName ?>' name='name' type="text" class="input" required placeholder="Group Name"><br>

                            <button class="btn">Edit</button>
                        </form>
                    </div>
                </div>
            </blockquote>
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