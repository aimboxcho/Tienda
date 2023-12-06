<?php if (isset($pro)): ?>
	<h1><?= $pro->nombre ?></h1>
    <div id="detail-product">
        <div class="image">
            <img src="<?= base_url ?>uploads/images/<?= $pro->imagen ?>" />
        </div>
        <div class="data">
            <p><?= $pro->descripcion ?></p>
            <p><?= $pro->precio ?></p>
            <a href="<?=base_url?>carrito/add&id=<?=$pro->id?>" class="button">Comprar</a>
        </div>
    </div>
<?php else: ?>
	<h1>El producto no existe</h1>
<?php endif; ?>

