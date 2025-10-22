<?php include 'includes/header.php';
include 'includes/functions.php';

$old_field = isset($old_field) ? $old_field : [];
$errors = isset($errors) ? $errors : [];
?>
    <form method="post" action="process.php" id="formulario" novalidate>
        <section>
            <h2>Identificación</h2>
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
        </section>
        <section>
            <h2>Preferencias de colaboración</h2>
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
        </section>
        <section>
            <h2>Rol y habilidades</h2>
            <label for="rol_habitual">¿En qué rol te sueles desenvolver habitualmente?</label>
            <input id="rol_habitual" name="rol_habitual" type="radio" required>
            <option value="lider">Líder</option>
            <option value="seguidor">Seguidor</option>
        </select>

        <label for="lenguaje_fuerte">¿Cuáles son tus lenguajes de programación más fuertes?</label>
        <input id="lenguaje_fuerte" name="lenguaje_fuerte" type="select" required>
        <option value="php">PHP</option>
        <option value="javascript">JavaScript</option>
        <option value="python">Python</option>
        <option value="java">Java</option>
        <option value="csharp">C#</option>
        <option value="ruby">Ruby</option>
        <option value="cplus">C++</option>
        <option value="sql">SQL</option>
        </select>

        <label for="experiencia">¿Cuánta experiencia tienes trabajando en proyectos?</label>
        <input id="experiencia" name="experiencia" type="range" min="0" max="5" required>
        </section>
        <section>
            <h2>Dinámica y comunicación</h2>        
        <label for="comunicacion">¿Qué comunicación sueles usar?</label>
        <input id="comunicacion" name="comunicacion" type="radio" required>
        <option value="sincrona">Síncrona</option>
        <option value="asincrona">Asíncrona</option>
        <option value="mixta">Mixta</option>
        </select>

         <label for="herramientas">¿Con qué herramientas has trabajado?</label><br>
            <input type="checkbox" id="git" name="git" value="Git">
            <label for="git">Git</label><br>

            <input type="checkbox" id="docker" name="docker" value="Docker">
            <label for="docker">Docker</label><br>

            <input type="checkbox" id="jira" name="jira" value="Jira">
            <label for="jira">Jira</label><br>

            <input type="checkbox" id="trello" name="trello" value="Trello">
            <label for="trello">Trello</label><br>
            <input type="checkbox" id="slack" name="slack" value="Slack">
            <label for="slack">Slack</label><br>
            <input type="checkbox" id="notion" name="notion" value="Notion">
            <label for="notion">Notion</label><br><br>



        <label for="disponibilidad_horas">¿Qué disponibilidad de horas tienes?</label>
        <input id="disponibilidad_horas_inicio" name="disponibilidad_horas_inicio" type="time" required>
        <input id="disponibilidad_horas_fin" name="disponibilidad_horas_fin" type="time" required>

        </section>
        <section>
            <h2>Organización y bienestar</h2>
            //gestion_tiempo
            //estres
            //preferencias_espacio
                    <label for="sentimiento_grupo">¿Como te sientes al trabajar en grupo?</label>
                <input id="sentimiento_grupo" name="sentimiento_grupo" type="select" required>  
                <option value="muy_comodo">Muy cómodo</option>
                <option value="comodo">Cómodo</option>
                <option value="neutral">Neutral</option>
                <option value="incómodo">Incómodo</option>
                <option value="muy_incómodo">Muy incómodo</option>
                </select>
        </section>

        <button type="submit" id="button-enviar" disabled>Enviar</button>
    </form>
<?php include 'includes/footer.php'; ?>