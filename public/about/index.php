<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include("../../components/navbar.php") ?>

    <section class="bg-dark text-light p-5">
        <div class="container text-center">
            <h1 class="fw-bold display-2 ">About</h1>
        </div>
    </section>

    <section class="p-5  ">
        <div class="container d-flex flex-column gap-2">
            <div class="card p-3">
                <p class="display-6 fw-bold">Vision</p>
                <figcaption class="blockquote-footer">
                    Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
            </div>

            <div class="card p-3">
                <p class="display-6 fw-bold">Objectives</p>
                <ul>
                    <li>To foster a new generation of startup founders in Zimbabwe</li>
                    <li>To make startup funding accessible to HIT students no matter their background</li>
                    <li>To contribute in pushing Zimbabwe to merge as the number 1 tech hub in Africa</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="d-flex-md gap-2">
            <div class="card p-4 d-flex flex-column align-items-center justify-content-center text-center">
                <img src="/images/headshot_1.jpg" style="width: 100px; height: 100px; border-radius: 100%;" />
                <p class="fw-bold mt-2">Tanaka Brii</p>
                <p class="text-muted" style="line-height: 5px;">HIT Alumni & Founder</p>
            </div>

            <div class="card p-4 d-flex flex-column align-items-center justify-content-center text-center">
                <img src="/images/headshot_2.jpg" style="width: 100px; height: 100px; border-radius: 100%;" />
                <p class="fw-bold mt-2">Shawn Muripi</p>
                <p class="text-muted" style="line-height: 5px;">Director of Fun!</p>
            </div>

            <div class="card p-4 d-flex flex-column align-items-center justify-content-center text-center">
                <img src="/images/headshot_3.jpg" style="width: 100px; height: 100px; border-radius: 100%;" />
                <p class="fw-bold mt-2">Kayla Chipo</p>
                <p class="text-muted" style="line-height: 5px;">Director of Innovation</p>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>