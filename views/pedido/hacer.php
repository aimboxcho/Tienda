<?php if(isset($_SESSION['identity'])):?>
    <h1>Hacer pedido</h1>
    <a href="<?=base_url?>carrito/index">Ver los productos y el precio del pedido</a>
    <br><br><br>

    <h3>Direccion para envio</h3>
    <br>
    <form action="<?=base_url.'pedido/add'?>" method="POST">
        <label>Provincia</label>
        <input type="text" name="provincia" required>

        <label>localidad</label>
        <input type="text" name="localidad" required>

        <label>Direccion</label>
        <input type="text" name="direccion" required>

        <input type="submit" value="Confirmar Pedido">
    </form>
<?php else: ?>
    <h1>Necesitas estar identificado</h1>
    <p>Necesitas estar logueado en la web</p>
<?php endif; ?>