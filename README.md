# sociograma

Tecnologías: PHP, JS y HTML

## ARRANQUE DE PROYECTO
Para desplegar este proyecto he usado XAMPP, para arrancarlo clona este repositorio en la carpeta de `C:\xampp\htdocs`. Después abre el panel de control de XAMPP y arranca **Apache**.  

<img width="658" height="428" alt="image" src="https://github.com/user-attachments/assets/4d8f1f4a-0c19-4635-b6e3-aac4a6867b8d" />

Una vez arrancado, para acceder a la página desde el navegador iremos a: `http://localhost/sociograma`


## INFORMACIÓN ACERCA DEL PROYECTO
Se trata de un formulario hecho con PHP que tiene validaciones por tres partes:
- **HTML** -> Validación con el tipo de input (text, number, range...), uso del maxlength en inputs de tipo texto o min y max en inputs de tipo number
- **JavaScript** -> Validación de un nombre válido, de la edad y de las horas
- **PHP** -> Validación de todos los campos y rehidratación

### Rehidratación
Con tal de que sea una buena experiencia para el usuario, cuando este se equivoca en una respuesta no se borran las respuestas sinó que se guardan.

### Mensajes de error
Cuando el usuario se introduce un dato inválido en una respuesta, se marca con un mensaje de error que obtenemos desde un array de errores que obtenemos de $errors[] de `process.php`

### Estructura
La estrcutura de archivos del proyecto es:

/sociograma
  - assets
    - css
      - styles.css
    - js
      - validatejs  
  - data
    - sociograma.json
  - includes
    - footer.php
    - functions.php
    - header.php
  - api.php
  - index.php
  - process.php
  - readme.md




## API DEL SOCIOGRAMA
Con el proyecto arrancado, se puede acceder a `http://localhost/sociograma/api.php` donde se accede a través de una api a `sociograma.json`, donde se encuentran los datos que se guardan de los usarios que se han rellenado del forumlario.


