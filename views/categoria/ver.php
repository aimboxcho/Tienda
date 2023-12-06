<?php if (isset($categorias)): ?>
	<h1><?= $categorias->nombre ?></h1>
	<?php if ($productoscategoria->num_rows == 0 ): ?>
		<p>No hay productos para mostrar</p>
	<?php else: ?>

		<?php while ($productoscategorias = $productoscategoria->fetch_object()): ?>
			<div class="product">
				<a href="<?= base_url ?>producto/ver&id=<?= $productoscategorias->id ?>">
					<?php if ($productoscategorias->imagen != null): ?>
						<img src="<?= base_url ?>uploads/images/<?= $productoscategorias->imagen ?>" />
					<?php else: ?>
						<img src="<?= base_url ?>assets/img/camiseta.png" />
					<?php endif; ?>
					<h2><?= $productoscategorias->nombre ?></h2>
				</a>
				<p><?= $productoscategorias->precio ?></p>
				<a href="<?=base_url?>carrito/add&id=<?=$productoscategorias->id?>" class="button">Comprar</a>
			</div>
		<?php endwhile; ?>

	<?php endif; ?>
<?php else: ?>
	<h1>La categoría no existe</h1>
<?php endif; ?>

