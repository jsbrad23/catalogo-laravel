#  Catálogo de Productos - Laravel


El proyecto implementa:

-  Rutas con `Route::resource`
-  Controlador CRUD
-  Migraciones y Eloquent ORM
-  Vistas Blade con Bootstrap
-  Base de datos MySQL
-  Control de versiones con Git
-  Documentación de instalación y ejecución

---

#  Arquitectura utilizada

El proyecto sigue el patrón:

**MVC (Model - View - Controller)**

- **Model:** `Product.php` (Eloquent ORM)
- **View:** Blade (`resources/views/products`)
- **Controller:** `ProductController.php`

---

#  Requisitos previos

Antes de ejecutar el proyecto debes tener instalado:

- PHP 8.1 o superior
- Composer 2.x
- MySQL o MariaDB
- Git
- Servidor local (XAMPP, Laragon o WAMP)
- Navegador web

Verificar versiones instaladas:

```bash
php -v
composer -V
git --version