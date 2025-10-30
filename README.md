#Instalaciones

PHP
-Ir a la pagina oficial de XAMPP y lo descargamos. https://www.apachefriends.org/es/index.html
-Ejecutamos el instalador y al momento de la instalacion seguimos las indicaciones del instalador.
-Ya instalado el XAMPP,vamos a irnos al sistema, luego a variables de  entorno y seleccionamos PATH.
-Agregamos la direccion C:/xampp/php, ya que ahi esta instaldo el PHP, hacemos esto para ambas partes, tanto para el usuario y el sistema.

Composer
-Ir a la pagina oficial de composer y lo descargamos.  https://getcomposer.org/
-Ejecutamos el instalador, seleccionar la opcion de instalar a todos los usuarios y despues seguir las indicaciones de la instalacion.
-Para comprobar la instalacion, escribimos composer en el CMD en el cual nos debe aparecer la version y los detalles.

PostgreSQL
-Ir a la pagina oficial de PostgreSQL y lo descargamos. https://www.postgresql.org/
-Ejecutamosel instalador y dejamos la ruta de instalacion por defecto, al igual que los componentes a instalar.
-Asignar una contraseña al superusuario, de preferencia una que se sepa, el puerto del servidor lo dejamos por defecto.
-En la configuracion regional asignamos la de donde eres, apareceran los detalles de la instalacion y enseguida se procedera a instalar.
-Ya instalado para corroborarlo, nos metemos a la aplicacion de pgAdmin4.

Nota: Ejecuta los instaladores como administrador.

#Creacion de un Proyecto en Laravel
-Creamos una carpeta en donde vamos a guardar el proyecto.
-Ya creada, abrimos el CMD en esta carpeta y ejecutamos el comando composer create-project laravel/laravel seguido del nombre del proyecto
-Esperamos hasta que se creen todos los archivos, para comprobarlo abrimos la carpeta con un editor de codigo en mi caso visual code.

#Conexion con PostgreSQL mediante ".env" y levantar el servidor local
-Antes de ir a la carpeta del proyecto, vamos a la carpeta de XAMPP donde esta el interprete de PHP "C:\xampp\php"
-Ya en la carpeta abrimos un archivo llamado "php.ini" con un editor de texto para modificarlo y buscamos dos lineas que empiecen con extension.
-Ubicamos dos lineas que digan: extension=pdo_pgsql y extension=pgsql, si tiene un ";" se lo quitamos para habilitar las extensiones de PostgreSQL, guardamos los cambios y reiniciamos el Apache desde XAMPP.
-Ya activado, ahora si vamos al visual code y nos metemos a la carpeta del proyecto, en la carpeta principal habra un archivo llamado ".env" y lo abrimos.
-Buscamos las lineas de codigo donde dicen DB al principio y descomentamos todos y agregamos los atributos del servidor de la siguiente mnanera:
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nombre_db
DB_USERNAME=usuario_(postgres por defecto) 
DB_PASSWORD=contraseña
-Ya modificada esta parte, guardamos los cambios y abrimos una terminal en el visual code y ejecutamos el comando php artisan migrate.
-Se creara la base de datos y se crearan las tablas que esten en la direccion de data/migrations, para corroborar iremos al PostgreSQL para verificar si la base de datos se creo.
-Finalmente para levantar el servidor local para acceder a la pagina de muestra, ejecutamos el comando php artisan serve y le damos clic al enlace para acceder a la pagina.

Nota: Recomendable usar visual studio code.
