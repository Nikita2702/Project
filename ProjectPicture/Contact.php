
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=League+Gothic&family=Poppins:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
<?php include'nav.php'?>



<section class="my-5">
    <div class="py-5" >
        <h2 class="text-center">Contact</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="info.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" class="form-control" autocomplete="off">

            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control"autocomplete="off">

            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="phone" class="form-control"autocomplete="off">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea type="text" name="comment" class="form-control"></textarea>
               
            </div>
            <div><br>
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@productionteam</p>
    </footer>
</body>
</html>