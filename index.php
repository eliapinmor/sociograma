<?php include 'includes/header.php'; ?>
    <form method="post" action="process.php" id="formulario" novalidate>
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" required minlength="3">
        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>
        <button type="submit" id="button-enviar" disabled>Enviar</button>
    </form>
<?php include 'includes/footer.php'; ?>