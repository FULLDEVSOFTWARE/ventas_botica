<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Pedidos</title>
    <?php include '../frontend/inc/link.php'; ?>
</head>
<body id="container-page-pedido">
    <?php include '../frontend/inc/navbar.php'; ?>
    <section id="container-pedido">
        <div class="container">
            <div class="page-header">
                <h1>PEDIDOS <small class="tittles-pages-logo">UNIÓN XIOMARA</small></h1>
            </div>
            <?php
            if(empty($_SESSION['nombreUser'])){
                echo '<p class="text-center text-danger lead">Inicia sesión para realizar pedidos</p>';
            } else {
                // Aquí va la lógica para mostrar los pedidos y formulario de pago
                echo '<p>Pago por transacción bancaria</p>';
                echo '<p>Ocurrió un error: Parece ser que no se ha configurado las cuentas de banco</p>';
                echo '<button class="btn btn-danger">Cancelar</button> <button class="btn btn-success">Confirmar</button>';
            }
            ?>
        </div>
    </section>
    <?php include '../frontend/inc/footer.php'; ?>
</body>
</html>
