#### INSTALACIÓN

 - Clonar el repositorio.
 - Crear el archivo `.env` (ejemplo en `.env.example`).
 - Instalar las dependencias `composer install`.
 - Ejecutar las migraciones `php artisan migrate`.
 - Ejecutar `php artisan key:generate`.
 - Validar instalación con los test `php artisan test`.
----

#### REQUISISTOS

 - PHP 7.3 | 8 (Según pone en el archivo .json)
 - Mysql o MariaDB

----

#### EJERCICIOS

 - Agregar las propiedades `email` y `address` a las compañías. Estado: :+1:
 - Crear un nuevo caso de uso para actualizar el estado de una compañía de `inactive` a `active`. Estado: :+1:
 - Crear un nuevo endpoint de API que actualice el estado usando el caso de uso del punto anterior. Estado: :+1:
 - Crear nuevo caso de uso que liste todas las compañías. Estado:
 - Crear un nuevo endpoint de API que liste las compañías en base al caso de uso del punto anterior. Estado:
 - Los test deben pasar después de realizar los cambios. Estado:
 - Opcional: Implementa cualquier otra entidad de dominio. Estado:


#### ENTREGAR PRUEBA

 - Hacer fork del repositorio.
 - Antes de realizar ningún cambio, suba el código a un repositorio público de su propiedad indicando como comentario del commit "Initial commit".
 - Realizar los ejercicios y subir los cambios a su repositorio.
 - Cuando la finalice, envie un email a jasanchez@vocces.com indicando el link de su repositorio.
