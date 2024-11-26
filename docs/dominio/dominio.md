# Cambiar dominio

## Configuración de Laravel
+ Abre el archivo .env en el directorio de tu proyecto Laravel.
+ Actualiza la variable APP_URL con tu nuevo dominio local: APP_URL=http://Supertieno.es

## Cofiguración de Archivo hosts
+ Abre el archivo /etc/hosts(sudo nano /etc/hosts)
+ Agrega una entrada para tu nuevo dominio local: 127.0.0.1   Supertieno.es

## Reinicia el Servicio del Servidor Web
+ En este enfoque, no estamos cambiando la configuración del servidor web directamente, por lo que no necesitas reiniciar el servidor web. Sin embargo, si tienes un servidor de desarrollo de Laravel en ejecución "php artisan serve", debes detenerlo y reiniciarlo para que utilice la nueva configuración. Esto iniciará el servidor de desarrollo de Laravel con la nueva configuración.
