<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="<?=base_url?>Style/style.css">
</head>
<body>
    <div id="container">
        <!--CABECERA-->
        <header id="header">
            <div id="logo">
                <img src="<?=base_url?>IMG/cropped-Logo-Socorro-Andino.png" alt="logo">
                <a href="<?=base_url?>index.php">
                    Tienda
                </a>
            </div>
        </header>

        <!--MENU-->
        <?php $categorias = Utils::showCategorias();?>
        <nav id="menu">
            <ul>
                <?php while($cat = $categorias->fetch_object()):?>
                    <li><a href="<?=base_url?>./categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a></li>
                <?php endwhile?>
            </ul>
        </nav>

        <!--BARRA LATERAL-->
        <div class="content">

