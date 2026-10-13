<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events & Activities</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <?php include("../../components/navbar.php") ?>

    <section class="bg-dark text-light p-5">
        <div class="container text-center">
            <h1 class="fw-bold display-2 ">Gallery</h1>
        </div>
    </section>

    <section class="container d-flex flex-wrap gap-3 p-4" >
        <img class="img-fluid" src="/images/gallery_1.jpg" />
        <img class="img-fluid" src="/images/gallery_2.jpg" />
        <img class="img-fluid" src="/images/gallery_3.jpg" />
        <img class="img-fluid" src="/images/gallery_4.jpg" />
        <img class="img-fluid" src="/images/gallery_5.jpg" />
        <img class="img-fluid" src="/images/gallery_6.jpg" />
    </section>

    <?php include("../../components/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>