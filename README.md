# Descripción del problema Practica 3

La academia requiere un sistema para organizar alumnos, profesores, cursos y asignaturas. 
Actualmente, la gestión manual dificulta la planificación y el seguimiento académico.

Requisitos del sistema:

Alumnos: 
Cada estudiante tiene un identificador, nombre, apellido y edad, y está asignado a un profesor.

Profesores: 
Cuentan con un identificador, nombre y tarifa. Un profesor puede tener varios alumnos.

Cursos: 
Cada curso tiene un nombre, se asocia a una asignatura y puede incluir varios alumnos.

Asignaturas: 
Se registran con nombre, hora inicio y hora fin. Pueden ser impartidas por múltiples profesores y asociarse a varios cursos.

Objetivo: 
Gestionar inscripciones, asignaciones y horarios de manera eficiente.

#

# Wow
Way of working Practica 3

##  Inserta los siguientes codigos en orden

1. composer install -n --prefer-dist

2. cp .env.ci .env

3. php artisan key:generate

4. docker ps -a

5. docker start docker_name

6. php artisan serve

### Como instalar Doker en Linux

Comprobar si tenemos instalado compose con docker --version, si no tenemos instalado, instalamos con los siguientes comandos:

1. sudo apt update
2. sudo apt install docker.io -y

### Como instalar php en Linux

Comprobar si tenemos instalado el php con php -v, si no 
tenemos instalado, instalamos con los siguientes comandos:

1. sudo apt install php libapache2-mod-php php-cli php-mbstring 
2. php-xml php-bcmath php-curl php-zip -y

### Como instalar Compose en Linux

1. https://docs.docker.com/compose/install/