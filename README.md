# Calendario de citas electronicas

Este es el repositorio de una aplicación de agenda electrónica de citas, donde puedes gestionar y programar citas con información detallada. El repositorio esta dividido en 2 ramas, la rama **main** usando la biblioteca de FullCalendar esta en desarrollo contiene la interfaz y alguna funcionalidad de las citas y la rama llamada **citas** contiene la aplicación que te permite ingresar el motivo de la cita, el nombre del cliente, su correo electrónico, número de teléfono, empresa, hora de la cita y añadir alguna nota adicional.

## Uso del Código

Sigue estos pasos para utilizar el código de la agenda electrónica de citas:

1. Clonar el repositorio de git con el siguiente comando:
**git clone <URL_DEL_REPOSITORIO>**
2. Levantar el Docker Compose
Asegúrate de tener Docker o XAMPP instalado en tu máquina. Luego, ejecuta el siguiente comando en la raíz del proyecto:
**docker compose up -d**
3. Conectar la base de datos: La aplicación utiliza una base de datos MySQL. Una vez que los contenedores Docker estén en funcionamiento, puedes conectarte a la base de datos utilizando los siguientes datos:
-Host: localhost:mysql
-Puerto: 8087
-Usuario: pulgar
-Contraseña: (pulgarsin)
-Base de datos: (se crea automáticamente)
-Puedes utilizar cualquier cliente MySQL para conectarte a la base de datos y administrarla.
4. Acceder al servidor: Una vez que los contenedores estén en ejecución y tengas la base de dato conectada, puedes acceder a la aplicación utilizando tu navegador web. Abre el siguiente enlace: 
**http://localhost:8085** Esto te llevará a la interfaz de la agenda electrónica de citas, donde podrás crear, ver, editar y eliminar citas.

## Notas

**IMPORTANTE** Si quieres hacer uso de la rama **citas** necesitas copiar la carpeta **phpdocker** y el **docker-compose.yml** y pegar esos archivos en la rama de **citas** luego levantar el docker y conectar la base de datos.  

¡Disfruta utilizando la agenda electrónica de citas y mantén tu horario organizado de manera eficiente!

***
## Equipo de Trabajo

Jesús Cabral | Olga García | Jorge Cejas | Andres Abadi |


