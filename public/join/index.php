<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $phone_number = $_POST["phone"];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Club</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include("../../components/navbar.php") ?>

    <section class="p-5">
        <div class="container text-center d-flex flex-column">
            <h1>Join The Club</h1>
        </div>
    </section>

    <section>
        <div class="container">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">First Name</label>
                    <input id="first_name" type="text" required placeholder="e.g Tadiwa" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Last Name</label>
                    <input id="last_name" type="text" required placeholder="e.g Shangwa" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">HIT Email</label>
                    <input id="email" type="email" required placeholder="e.g h250000Z" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Phone Number</label>
                    <input id="phone_number" type="tel" required placeholder="e.g 0771 234 5678"  class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </section>

    <?php include("../../components/footer.php") ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>