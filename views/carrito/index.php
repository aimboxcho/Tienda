<h1>Carrito de la compra</h1>

<table class="table" border="1" style="width: 100%; text-align:center;">
    <tr">
        <th>imagen</th>
        <th>nombre</th>
        <th>precio</th>
        <th>unidades</th>
    </tr>
    <?php foreach($carrito as $indice => $elemento): 
        $producto = $elemento['producto'];
    ?>
        <tr>
        <td><img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" style="width: 50px;"/></td>
        <td><?= $producto->nombre ?></td>
        <td>$<?= $producto->precio ?></td>
        <td><?= $elemento['unidades'] ?></td>
        </tr>
    <?php endforeach; ?>    
</table>
<?php $carrito = Utils::statsCarrito()?>
<br/>Precio Total a pagar: $<?=$carrito['total'].'.00'?><hr/>
<a href="<?=base_url?>pedido/hacer" class="button">Hacer pedido</a>

