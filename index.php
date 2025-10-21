<?php include 'includes/header.php';
include 'includes/functions.php';

$old_field = isset($old_field) ? $old_field : [];
$errors = isset($errors) ? $errors : [];
?>
    <form method="post" action="process.php" id="formulario" novalidate>
        <label for="nombre">Nombre</label>
        <input id="nombre" name="nombre" type="text" required minlength="3">

        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>

        <label for="curso">Email</label>
        <input id="curso" name="curso" type="select" required>
        <option value="DAW">DAW</option>
        <option value="ASIR">ASIR</option>
        <option value="DAM">DAM</option>
        <option value="SMR">SMR</option>
        </select>
    
        <label for="preferido1">Persona 1 con la que prefieres trabajar</label>
        <input id="preferido1" name="preferido1" type="text" required>

        <label for="preferido2">Persona 2 con la que prefieres trabajar</label>
        <input id="preferido2" name="preferido2" type="text" required>

        <label for="evitar1">Persona con la que prefieres no trabajar</label>
        <input id="evitar1" name="evitar1" type="text" required>

        <label for="motivo_preferencia">¿Por qué prefieres trabajar con estas personas?</label>
        <input id="motivo_preferencia" name="motivo_preferencia" type="textarea" required>

        <label for="motivo_evitar">¿Por qué prefieres no trabajar con estas personas?</label>
        <input id="motivo_evitar" name="motivo_evitar" type="textarea" required>

        <label for="rol_habitual">¿En qué rol te sueles desenvolver habitualmente?</label>
        <input id="rol_habitual" name="rol_habitual" type="radio" required>

        <button type="submit" id="button-enviar" disabled>Enviar</button>
    </form>
<?php include 'includes/footer.php'; ?>