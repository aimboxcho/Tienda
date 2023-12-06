<aside id="lateral">

    <div id="carrito" class="block_aside">
        <h3>Mi Carrito</h3>
        <ul>
            <?php $stats = Utils::statsCarrito()?>
            <li>Productos (<?=$stats['count']?>)</li>
            <li>Total: $<?=$stats['total']?></li>
            <li><a href="<?=base_url?>/carrito/index">Carrito</a></li>
        </ul>
    </div>
    <div id="login" class="block_aside">
        <?php if(!isset($_SESSION['identity'])):?>
        <h3>Entrar</h3>
        <form action="<?=base_url?>usuario/login" method="post"> 
            <label>Email</label>
            <input type="email" name="email">

            <label>Password</label>
            <input type="password" name="password">

            <input type="submit" value="Enviar">
        </form>
        <?php else: ?>
            <h3><?=$_SESSION['identity']->nombre?></h3>
        <?php endif;?>
        <ul>
            <?php if(isset($_SESSION['admin'])):?>
                <li><a href="<?=base_url?>/categoria/index">Gestionar Categorias</a></li>
                <li><a href="<?=base_url?>/producto/gestion">Gestionar Producto</a></li>
                <li><a href="<?=base_url?>/categoria/index">Gestionar Pedidos</a></li>
            <?php endif;?>
            <?php if(isset($_SESSION['identity'])):?>
                <li><a href="">Mis pedidos</a></li>
                <li><a href="<?=base_url?>usuario/logout">Cerrar Sesion</a></li>
            <?php else:?>
                <li><a href="<?=base_url?>/usuario/registro">Registrarse</a></li>
            <?php endif;?>
        </ul>
    </div>
</aside>
<!--CONTENIDO CENTRAL-->
<div id="central">
            