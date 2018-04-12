<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index de la página</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
    <?php 
        if (isset($_GET['pages'])) {
            $page = $_GET['pages'];
        } else { $page = 'index';}
    ?>
        <?php include('librerias/navBar.php');?>
    </header>
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or
            information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
    <main>
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content
                        is a little bit longer.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card
                        has even longer content than the first to show that equal height action.</p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <!-- Script's -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>