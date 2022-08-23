
------------
# Iniciar cuatro en linea con DDEV 
------------
#### Requisitos: 
- Debera tener previamente instaladas las siguientes herramientas:
1. Docker (Url: [https://www.docker.com/](https://www.docker.com/))
1. DDEV (Url: [https://ddev.com/](https://ddev.com/))
1. Laravel (Url: [https://laravel.com/](https://laravel.com/))

------------

### Paso 1:
- Crear un repositorio local usando el comando:
`git clone https://github.com/mateopretelli/cuatroenlinea.git` (o el link del repositorio que esten usando) 
**Nota: cree el repositorio local dentro del directorio donde desee almacenarlo**

### Paso 2:
- Entre en el repositorio /cuatroenlinea/ usando:
`cd /cuatroenlinea`

### Paso 3:
- Comenzaremos con la configuracion de DDEV con el siguiente comando:
`ddev config` 
1. Primero colocaremos el nombre del proyecto
1. Segundo la ruta del proyecto (dejar en blanco)
1. Tercero, el tipo de proyecto, donde ingresaremos **laravel**

### Paso 4:
- Procederemos a instalar composer siguiendo los estos pasos:
1. Escribiremos `ddev composer install` y esperaremos (en caso de ver que la consola no avanza apretaremos `tab`)
1. Cambiaremos el nombre de la ruta usando `cp .env.example .env`
1. Finalmente generaremos una key con `php artisan key:generate`

- Deberiamos ver un mensaje similar al siguiente: `Application key set successfully.`

### Paso 5:
- Iniciaremos el proyecto usando `ddev start`, al final de la secuencia deberiamos ver una Url del siguiente estilo: `https://nombre_del_proyecto.ddev.site` el cual deberemos introducir en el buscador.
- En caso de que queramos jugar simplemente agregaremos a la Url: `/jugar/1`

### Paso 6:
- Para cerrar el proyecto en DDEV escribiremos: `ddev stop`

------------

**Final de la Guia - Mateo Pretelli -**

