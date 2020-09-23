<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Praatmetdekok</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gerecht aanmaken</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?=$basePath?>/voorgerecht-aanmaken">Voorgerecht aanmaken</a>
                        <a class="dropdown-item" href="<?=$basePath?>/hoofdgerecht-aanmaken">Hoofdgerecht aanmaken</a><a class="dropdown-item" href="<?=$basePath?>/nagerecht-aanmaken">Nagerecht aanmaken</a>
                        <a class="dropdown-item" href="<?=$basePath?>/bijgerecht-aanmaken">Bijgerecht aanmaken</a>
                        <a class="dropdown-item" href="<?=$basePath?>/saus-aanmaken">Saus aanmaken</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/menu-inzien">Gerechten weergeven, wijzigen en verwijderen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gerechten-aanmaken">Gerechten aanmaken</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gerechten-inzien">Gerechten weergeven, wijzigen en verwijderen</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
