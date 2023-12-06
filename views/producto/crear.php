<?php if(isset($edit) && isset($produ) && is_object($produ)): ?>
    <h1>Editar producto <?=$produ->nombre?></h1>
    <?php $url_action = base_url."producto/save&id=".$produ->id;?>
<?php else: ?>
    <h1>Crear Productos</h1>
    <?php $url_action = base_url."producto/save";?>
<?php endif;?>

<form action="<?=$url_action?>" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?=isset($produ) && is_object($produ) ? $produ->nombre : ''?>">
    
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion"><?=isset($produ) && is_object($produ) ? $produ->descripcion : ''?></textarea>

    <label for="precio">Precio</label>
    <input type="text" name="precio" value="<?=isset($produ) && is_object($produ) ? $produ->precio : ''?>">

    <label for="stock">Stock</label>
    <input type="number" name="stock" value="<?=isset($produ) && is_object($produ) ? $produ->stock : ''?>">

    <label for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); ?>
		<select name="categoria">
			<?php while ($cat = $categorias->fetch_object()): ?>
				<option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
					<?= $cat->nombre ?>
				</option>
			<?php endwhile; ?>
		</select>

    <?php if (isset($produ) && is_object($produ) && !empty($produ->imagen)):?>
        <img src="<?=base_url?>/uploads/images/<?=$produ->imagen?>" style="width:100px; margin-top: 15px"/>
    <?php endif ?>

    <label for="imagen">Imagen</label>
    <input type="file" name="imagen">

    <input type="submit" value="Enviar">
</form>