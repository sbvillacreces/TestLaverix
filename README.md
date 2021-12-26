# TestLaverix
 # Pasos para instalación:
 Es importante realizar todos estos pasos dentro de la carpeta del proyecto
 * git clone https://github.com/sbvillacreces/TestLaverix
 * Para instalar composer: ejecutar las líneas siguientes en la terminal del proyecto:
 * php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
* php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
* php composer-setup.php
* php -r "unlink('composer-setup.php');"
 * Ejecutar en consola npm install && npm run dev
 * Ejecutar el comando: copy .env.example .env
 * Ejecutar el comando : php artisan key:generate
 * En el archivo .env modificar los datos para la base de datos y email
 * Ejecutar el comando: php artisan migrate
 * Ejecutar el comando: php artisan db:seed (Para poder registrar el usuario por defecto en la base)
 * Ejecutar el comando: php artisan serve (Para poder levantar la aplicación)
 NOTA: al crear un usuario desde usuario administrador, por defecto se crea con la constraseña (12345678)
