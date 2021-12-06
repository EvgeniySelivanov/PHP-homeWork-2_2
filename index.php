<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP homeWork2</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <?php
    $links = [
        'Home'      => 'http://site.ua',
        'Shop'      => [
            'Woman' => 'http://site.ua/woman',
            'Man' => 'http://site.ua/man',
            'Children' => 'http://site.ua/children',
        ],

        'Contacts'   => 'http://site.ua/contacts',

    ];
 
    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <?php foreach ($links as $menu => $link) : ?>
                        <li class="nav-item">

                            <? if ($menu === 'Shop') continue ?>

                            <a class="nav-link active" aria-current="page" href="<?= $link ?>">
                                <?= $menu ?></a>
                        </li>

                    <?php endforeach ?>
                    
                    
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop
                        </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php foreach ($links['Shop'] as $menu1 => $link1) : ?>
                                <li><a class="dropdown-item" href="<?= $link1 ?>">
                                        <?= $menu1 ?>
                                    </a></li> <?php endforeach ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>











    <script src="bootstrap.min.js"></script>
</body>

</html>