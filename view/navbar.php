<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praat met de kok</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

    </style>
</head>

<body>
    <a href="<?=$basePath?>/">Homepage</a>
    <div class="dropdown">
        <div class="dropbtn">Menu toevoegen</div>
        <div class="dropdown-content">
            <a href="<?=$basePath?>/voorgerecht-aanmaken">Voorgerecht toevoegen</a>
            <a href="<?=$basePath?>/hoofdgerecht-aanmaken">Hoofdgerecht toevoegen</a>
            <a href="<?=$basePath?>/nagerecht-aanmaken">Nagerecht toevoegen</a>
            <a href="<?=$basePath?>/bijgerecht-aanmaken">Bijgerecht toevoegen</a>
            <a href="<?=$basePath?>/saus-aanmaken">Saus toevoegen</a>
        </div>
    </div>
    <a href="<?=$basePath?>/menu-inzien">Menu weergeven, wijzigen en verwijderen</a>
</body>

</html>
