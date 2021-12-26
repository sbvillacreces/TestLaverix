# TestLaverix
 # Pasos para instalación:
 Es importante realizar todos estos pasos dentro de la carpeta del proyecto
 * git clone https://github.com/sbvillacreces/TestLaverix
 * Para instalar composer: composer install 
 * Ejecutar en consola npm install && npm run dev
 * Ejecutar el comando: copy .env.example .env
 * Ejecutar el comando : php artisan key:generate
 * En el archivo .env modificar los datos para la base de datos y email
 * Ejecutar el comando: php artisan migrate
 * Ejecutar el comando: php artisan db:seed (Para poder registrar el usuario por defecto en la base)
 * Ejecutar el comando: php artisan serve (Para poder levantar la aplicación)
 NOTA: al crear un usuario desde usuario administrador, por defecto se crea con la constraseña (12345678)
