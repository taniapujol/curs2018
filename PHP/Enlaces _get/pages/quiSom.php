<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qui Som</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php 
            if (isset($_GET['pages'])) {
                $page = $_GET['pages'];
            } else { $page = 'index';}
        ?>
        <?php include('../librerias/navBar.php');?>
    </header>
    <main>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Qui Som?</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and
                    sweet, but not too short so folks don't simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </section>
    </main>
    <!-- Script's -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>

</html>