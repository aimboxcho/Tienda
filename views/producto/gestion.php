<h1>Gestion de productos</h1>

<a href="<?=base_url?>/producto/crear" class="button button-small">Crear Productos</a>

<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'):;?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'):;?>
    <strong class="alert_green">El registro no se hizo correctamente</strong>
<?php endif;?>
<?php Utils::deleteSession('producto');?>


<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'):;?>
    <strong class="alert_green">El producto se ha borrado correctamente</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete'):;?>
    <strong class="alert_green">El producto no se ha borrado</strong>
<?php endif;?>
<?php Utils::deleteSession('delete');?>

<table border="1">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>ACCION</th>
    </tr>
    <?php while($pro = $productos->fetch_object()):?>
        <tr>
            <td><?=$pro->id;?></td>
            <td><?=$pro->nombre;?></td>
            <td><a href="<?=base_url?>producto/edit&id=<?=$pro->id;?>">Editar</a></td>
            <td><a href="<?=base_url?>producto/delete&id=<?=$pro->id;?>">Eliminar</a></td>
        </tr>
    <?php endwhile; ?>
</table>