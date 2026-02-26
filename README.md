# Catálogo de Música en Laravel 🎶

Aplicación desarrollada por **Naomi Proaño** en Laravel para gestionar un catálogo de canciones con CRUD completo (crear, listar, editar y eliminar).  
Este proyecto permite administrar un catálogo musical, incluyendo título, artista, álbum, género, duración y estado de cada canción.

---

## 🚀 Requisitos previos

Antes de instalar y ejecutar la aplicación, asegúrate de tener lo siguiente:

- **PHP** >= 8.1 (necesario para ejecutar Laravel correctamente)  
- **Composer** >= 2.x (gestor de dependencias de PHP)  
- **Laravel** 10.x (framework utilizado en este proyecto)  
- **MySQL/MariaDB** (motor de base de datos para almacenar la información del catálogo)  
- **WAMP/XAMPP** o servidor local equivalente (para ejecutar PHP y MySQL en tu máquina)  
- **Git** (para clonar el repositorio y gestionar versiones)

---

## 📦 Instalación y configuración

Sigue estos pasos para instalar y configurar el proyecto en tu entorno local:

1. **Clonar el repositorio**  
   Descarga el proyecto desde GitHub:
   ```bash
   git clone https://github.com/usuario/Laravel_App.git
   cd Laravel_App


2. Instalar dependencias  
    Ejecuta el siguiente comando para instalar todas las librerías necesarias:
        composer install

3. Copiar el archivo de entorno:
    cp .env.example .env
    Configurar la conexión a la base de datos en .env:
        DB_DATABASE=catalogo_db
        DB_USERNAME=root
        DB_PASSWORD=

4. Ejecutar las migraciones:
    Crea las tablas en la base de datos:
        php artisan migrate

## ▶️ Ejecución

Una vez configurado el proyecto, puedes ejecutarlo con los siguientes pasos:

1. Iniciar el servidor de desarrollo:
    php artisan serve

2. Abrir en el navegador:
    Ingresa a la siguiente URL:
        http://127.0.0.1:8000/musica

3. Detener el servidor de desarollo:
    Para detener la ejecución, presiona:
        ctrl + C

