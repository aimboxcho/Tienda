
            <h1>Productos</h1>
            <?php while($producto = $randon->fetch_object()): ?>
                <div class="product">
                    <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>">
                        <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>">
                        <h2><?=$producto->nombre?></h2>
                    </a>
                    <p>precio $<?=$producto->precio?></p>
                    <p>stock <?=$producto->stock?></p>
                    <a href="<?=base_url?>carrito/add&id=<?=$producto->id?>" class="button">Comprar</a>
                </div>
            <?php endwhile ?>

