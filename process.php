<?php

include 'includes/header.php';
include 'includes/functions.php'; 

$input = [
    'nombre' => trim($_POST['nombre'] ?? ''),
    'email' => trim($_POST['email'] ?? ''),
    'curso' => trim($_POST['curso'] ?? ''),
    'preferido1' => trim($_POST['preferido1'] ?? ''),
    'preferido2' => trim($_POST['preferido2'] ?? ''),
    'evitar1' => trim($_POST['evitar1'] ?? ''),
    'motivo_preferencia' => trim($_POST['motivo_preferencia'] ?? ''),
    'motivo_evitar' => trim($_POST['motivo_evitar'] ?? ''),
    'rol_habitual' => trim($_POST['rol_habitual'] ?? ''),
    'lenguaje_fuerte' => trim($_POST['lenguaje_fuerte'] ?? ''),
    'experiencia' => trim($_POST['experiencia'] ?? ''),
    'comunicacion' => trim($_POST['comunicacion'] ?? ''),
    'herramientas' => trim($_POST['herramientas'] ?? ''),
    'disponibilidad_horas' => trim($_POST['disponibilidad_horas'] ?? ''),
    'gestion_tiempo' => trim($_POST['gestion_tiempo'] ?? ''),
    'estres_proyecto' => trim($_POST['estres_proyecto'] ?? ''),
    'preferencia_espacio' => trim($_POST['preferencia_espacio'] ?? ''),
    'sentimiento_grupo' => trim($_POST['sentimiento_grupo'] ?? ''),
    'dispostivo' => trim($_POST['dispositivo'] ?? ''),
    'so_preferido' => trim($_POST['so_preferido'] ?? ''),
    'comentario' => trim($_POST['comentario'] ?? '')
];

$errors = [];

if (strlen($input['nombre']) < 2) {
    $errors['nombre'] = 'El nombre debe tener al menos 2 carácteres';
}


if (!filter_var(input['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Introduce un email válido';
}


if (!in_array($input['curso'], ['daw', 'dam', 'asix'])) {
    $errors['curso'] = 'Indica en que curso estás';
}


if (($input['preferido1']) === '') {
    $errors['preferido1'] = 'Introduce a la primera persona con la que prefieres trabajar';
}

if (($input['preferido2']) === '') {
    $errors['preferido2'] = 'Introduce a la segunda persona con la que prefieres trabajar';
} elseif (($input['preferido2']) === ($input['preferido1'])){
    $errors['preferido2'] = 'Las personas no pueden ser la misma';
}

if (($input['evitar1']) === '') {
    $errors['evitar1'] = 'Escribe una persona con la que prefieres no trabajar';
} elseif (($input['evitar1']) === $input['nombre']) {
    $errors['evitar1'] = 'No puedes no querer trabajr contigo mismo, escribe un nombre válido';
} elseif (($input['evitar1']) === ($input['preferido1']) ||($input['evitar1']) === ($input['preferido2'])) {
    $errors['evitar1'] = 'El nombre de las personas con las que quieres trabajar no puede ser el mismo que con la que no';
}

if (($inpt['motivo_preferencia']) === ''){
    $errors['motivo_preferencia'] = 'Escribe el motivo por el que quieres trabajar con estas personas'
}




// motivo_preferencia
// motivo_evitar
// rol_habitual
// lenguaje_fuerte
// experiencia
// comunicación
// herramientas
// disponibilidad_horas
// gestion_tiempo
// estres_proyecto
// preferencia_espacio
// sentimiento_grupo
// dispositivo
// so_preferido
// comentarios


// 4) Si hay errores: rehidratar (volver a index con $old_field y $errors)
if ($errors) {
// IMPORTANTE: definimos $old_field y $errors antes de incluir index.php
$old_field = $input;
include __DIR__ . '/includes/header.php';
// Reutilizamos el mismo index para no duplicar el formulario:
// truco simple: hacemos include del formulario “central”
// Si prefieres, puedes extraer el <form> a partials/form.php y requerirlo aquí.
?>

<main class="container">
<h1>Sociograma DAW</h1>
<p>Corrige los errores e inténtalo de nuevo.</p>
<form method="POST" action="process.php" novalidate>
<label>Tu nombre:</label>
<input type="text" name="nombre" value="<?= old_field('nombre', $old_field) ?>">
<?= field_error('nombre', $errors) ?>
<label>¿Con quién te gusta trabajar?</label>
<input type="text" name="positivo" value="<?= old_field('positivo', $old_field) ?>">
<?= field_error('positivo', $errors) ?>
<label>¿Con quién prefieres no trabajar?</label>

<input type="text" name="negativo" value="<?= old_field('negativo', $old_field) ?>">
<?= field_error('negativo', $errors) ?>
<label>Motivo (opcional):</label>
<textarea name="motivo"><?= old_field('motivo', $old_field) ?></textarea>
<?= field_error('motivo', $errors) ?>
<button type="submit">Enviar</button>
</form>
</main>
<?php
include __DIR__ . '/includes/footer.php';
exit;
}

$file = __DIR__ . '/data/sociograma.json';
$todo = load_json($file);
$registro = [
'nombre' => $input['nombre'],
'positivo' => $input['positivo'],
'negativo' => $input['negativo'],
'motivo' => $input['motivo'],
'fecha' => date('Y-m-d H:i:s')
];
$todo[] = $registro;
if (!save_json($file, $todo)) {
http_response_code(500);
echo 'Error guardando los datos. Inténtalo más tarde.';
exit;
}
// 6) Confirmación muy simple
include __DIR__ . '/includes/header.php';
?>
<main class="container">
<h2>Gracias, <?= htmlspecialchars($input['nombre']) ?>. Tu respuesta se ha guardado
correctamente.</h2>
<p>Total de respuestas recogidas: <strong><?= count($todo) ?></strong></p>
<p><a href="index.php">Volver al formulario</a></p>
<p>También puedes ver todas las respuestas en JSON: <a href="api.php">api.php</a></p>
</main>

<?php include 'includes/footer.php'; ?>