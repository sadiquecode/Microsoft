<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <title>Update Number</title>
</head>

<body>
        
        <div class="container">
            <h3 class="text-center mt-5">Update Your Number</h3>
            <hr>
            <?php

            if (isset($_GET['msg'])) {
                $message = urldecode($_GET['msg']);
                echo '<p class="text-center text-success">' . $message . '</p>';
            }

            ?>

        
            <div class="row">
                <div class="col-lg-4 m-lg-auto">
                    <form class="text-center" action="update.php" method="POST">
                        <input type="number" name="number" class="form-control"  placeholder="Update Number">

                        <button type="submit" class="btn btn-primary mt-3">Update Number</button>
                    </form>
                </div>
            </div>
        </div>

</body>

</html>