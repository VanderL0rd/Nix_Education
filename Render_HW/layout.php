<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
    <title>My store</title>
</head>

<body>
    <?php require_once "header.html" ?>
    <main>
        <?php require_once "db.php" ?>
        <ul class="nav">
            <?php foreach ($products as $prod) : ?>
                <li>
                    <div class="prod_img d-flex flex-column ms-5 mt-3 p-2 border border-success text-center">
                        <img class="w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7OTG509dicDSfptsxJ_Hvr3hRZya5zsXqOQ&usqp=CAU" alt="Product image">
                        <div class="d-flex flex-column mt-auto">
                            <h3><?php echo $prod['name']; ?></h3>
                            <a href="#">
                                <?php
                                echo '<input type="button" class="w-100 btn btn-warning" value="Buy for ' . $prod['cost'] . '$">';
                                ?>
                            </a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>

</html>