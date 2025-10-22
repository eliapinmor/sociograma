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

            <label for="curso">¿En qué curso estás?</label><br>
                <input id="daw" name="curso" type="radio" value="daw" required>
                <label for="daw">DAW</label>
                <input id="dam" name="curso" type="radio" value="dam" required>
                <label for="dam">DAM</label>
                <input id="asix" name="curso" type="radio" value="asix" required>
                <label for="asix">ASIX</label><br>
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
            <label for="rol_habitual">¿En qué rol te sueles desenvolver habitualmente?</label><br>
                <input id="lider" name="rol_habitual" type="radio" value="lider" required>
                <label for="lider">Líder</label>
                <input id="seguidor" name="rol_habitual" type="radio" value="seguidor" required>
                <label for="seguidor">Seguidor</label><br>
            </select>

            <label for="lenguaje_fuerte">¿Cuáles son tus lenguajes de programación más fuertes?</label>
                <input type="checkbox" id="php" name="lenguaje_fuerte" value="php">
                <label for="php">PHP</label><br>

                <input type="checkbox" id="javascript" name="lenguaje_fuerte" value="javascript">
                <label for="javascript">JavaScript</label><br>

                <input type="checkbox" id="python" name="lenguaje_fuerte" value="python">
                <label for="python">Python</label><br>

                <input type="checkbox" id="java" name="lenguaje_fuerte" value="java">
                <label for="java">Java</label><br>

                <input type="checkbox" id="csharp" name="lenguaje_fuerte" value="csharp">
                <label for="csharp">C#</label><br>

                <input type="checkbox" id="cplus" name="lenguaje_fuerte" value="cplus">
                <label for="cplus">C++</label><br>
                
                <input type="checkbox" id="sql" name="lenguaje_fuerte" value="sql">
                <label for="sql">SQL</label><br><br>
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
                <input type="checkbox" id="git" name="herramientas" value="Git">
                <label for="git">Git</label><br>
                <input type="checkbox" id="docker" name="herramientas" value="Docker">
                <label for="docker">Docker</label><br>
                <input type="checkbox" id="jira" name="herramientas" value="Jira">
                <label for="jira">Jira</label><br>
                <input type="checkbox" id="trello" name="herramientas" value="Trello">
                <label for="trello">Trello</label><br>
                <input type="checkbox" id="slack" name="herramientas" value="Slack">
                <label for="slack">Slack</label><br>
                <input type="checkbox" id="notion" name="herramientas" value="Notion">
                <label for="notion">Notion</label><br><br>



            <label for="disponibilidad_horas">¿Qué disponibilidad de horas tienes?</label>
            <input id="disponibilidad_horas_inicio" name="disponibilidad_horas_inicio" type="time" required>
            <input id="disponibilidad_horas_fin" name="disponibilidad_horas_fin" type="time" required>
        </section>
        <section>
            <h2>Organización y bienestar</h2>
            <label for="gestion_tiempo">¿Cómo gestionas el tiempo?</label>
            <select id="gestion_tiempo" name="gestion_tiempo" required>  
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <label for="estres_proyecto">¿Cómo gestionas el estrés en un proyecto?</label>
            <select id="estres_proyecto" name="estres_proyecto" required>  
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <label for="preferencia_espacio">¿Cómo te gusta que sea tu espacio al trabajar?</label>
            <select id="preferencia_espacio" name="preferencia_espacio" required>  
                <option value="silencio">Silencio</option>
                <option value="ruido">Ruido</option>
                <option value="ruido_blanco">Ruido blanco</option>
                <option value="musica">Música</option>
                <option value="podcast">Podcast/Audiolibro</option>
            </select>

            <label for="sentimiento_grupo">¿Como te sientes al trabajar en grupo?</label>
                <input id="sentimiento_grupo" name="sentimiento_grupo" type="select" required>  
                <option value="muy_comodo">Muy cómodo</option>
                <option value="comodo">Cómodo</option>
                <option value="neutral">Neutral</option>
                <option value="incómodo">Incómodo</option>
                <option value="muy_incómodo">Muy incómodo</option>
            </select>
        </section>
        <section>
            <h2>Logística</h2>
                <label for="rol_habitual">¿Con que sistema operativo sueles trabajar?</label><br>
                    <input id="windows" name="so_preferido" type="radio" value="windows">
                    <label for="windows">Windows</label>
                    <input id="linux" name="so_preferido" type="radio" value="linux">
                    <label for="linux">Linux</label>
                    <input id="mac" name="so_preferido" type="radio" value="mac">
                    <label for="mac">Mac</label><br>
            </select>
        </section>
        <section>
            <h2>Observaciones</h2>
            <label for="comentario">Escribe una observación</label>
            <input id="comentario" type="textarea">
</section>

        <button type="submit" id="button-enviar" disabled>Enviar</button>
    </form>
<?php include 'includes/footer.php'; ?>