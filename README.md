# Proyecto Botica Unión Xiomara

## Requisitos

- Servidor web con PHP (versión 7.0 o superior recomendada)
- Base de datos MySQL o MariaDB
- Extensiones PHP para MySQLi habilitadas

## Configuración de la base de datos

1. Importa la base de datos usando el archivo SQL ubicado en:

```
backend/DataBase/store.sql
```

Puedes importarlo usando la línea de comandos o una herramienta como phpMyAdmin:

```bash
mysql -u root -p store < backend/DataBase/store.sql
```

Asegúrate de que la base de datos se llame `store` o cambia el nombre en el archivo `backend/library/configServer.php`.

## Configuración del proyecto

- Verifica que las credenciales de la base de datos en `backend/library/configServer.php` sean correctas:

```php
define("USER", "root");
define("SERVER", "localhost");
define("BD", "store");
define("PASS", "");
```

- Coloca la carpeta del proyecto en la raíz de tu servidor web (por ejemplo, en `htdocs` para XAMPP).

## Cómo correr el proyecto

### Opción 1: Usar un servidor web local (recomendado)

- Inicia tu servidor web (Apache, Nginx, etc.).
- Accede a la aplicación desde tu navegador en la URL:

```
http://localhost/backend/index.php
```

### Opción 2: Usar servidor PHP embebido (para pruebas rápidas)

Abre una terminal en la carpeta `backend` y ejecuta:

```bash
php -S localhost:8000
```

Luego abre en tu navegador:

```
http://localhost:8000/index.php
```

Nota: Esta opción es para desarrollo y pruebas, no para producción.

## Navegación

- `index.php`: Página principal
- `carrito.php`: Carrito de compras
- `registration.php`: Registro de usuarios
- Otros archivos PHP en `backend/process/` manejan la lógica de procesos.

## Recomendaciones

- Asegúrate de que PHP tenga permisos para leer y escribir en las carpetas necesarias.
- Revisa los logs de PHP y servidor web para detectar errores.
- Para problemas con rutas, verifica que las rutas relativas en los archivos PHP coincidan con la estructura de carpetas.

---

Si tienes dudas o necesitas ayuda adicional, no dudes en consultarme.
