
<?php include('sql/dbconnect.php'); //Include le fichier dbconnect pour commencer a communiqué avec la base de données ?>

<!DOCTYPE html>
<html>
<head>
    <title>OxyDe</title>
<!-- Script de style -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<?php include('include/header.php'); ?>
    <div class="container">
    <?php foreach ($recipes as $recipe) { ?>
        <p> <?php echo $recipe['author'],' ',$recipe['title'],' ',$recipe['recipe_id']; ?></p>
    <?php
    }
    ?>
    </div>
<?php include('include/footer.php'); ?>   
</body>
</html>


