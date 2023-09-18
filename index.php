<!DOCTYPE html>
<html>
<head>
    <title>Учусь делать формы</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {?>

        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="Email" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php echo $_POST['Email'] ?? '' ?>">
            </div>
            <div class="col-auto">
                <label for="inputPassword2" class="visually-hidden">Password</label>
                <input type="text" class="form-control" name="pass" id="inputPassword2" placeholder="Password" value="<?php echo $_POST['pass'] ?? '' ?>">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Войти</button>
            </div>
        </form>
        <?php
    }
    ?>
</div>
<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<b>Email</b> = ' . ($_POST['Email'] ?? '') . '<br>';
        echo 'Password = ' . ($_POST['pass'] ?? '');
    }
    ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

