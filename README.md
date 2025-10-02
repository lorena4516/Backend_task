# Task API (Laravel)

API REST para gestionar tareas con palabras clave (keywords).  
Stack: **PHP 8.x**, **Laravel 10/11**, **MySQL/MariaDB**.

## Autor

**Lorena Zapata Mejía**  
Desarrolladora Fullstack (Laravel + React)  

- GitHub: [@lorena4516](https://github.com/lorena4516)  
- LinkedIn: [linkedin.com/in/lorena-mejia2009](https://www.linkedin.com/in/lorena-mejia2009)  
- Email: lorena4516@hotmail.com



## Requisitos para la instalación

- PHP 8.1+ (recomendado 8.2)
- Composer 2.x
- MySQL/MariaDB en local
- Extensiones PHP típicas de Laravel (pdo_mysql, mbstring, etc.)

## Instalación

```bash
# 1) Clonar
git clone https://github.com/lorena4516/Backend_task.git
cd task-api

# 2) Instalar Dependencias (ejecutar en consola del proyecto)
composer install

# 3) Copiar .env y generar APP_KEY
cp .env.example .env
php artisan key:generate

```

## Migraciones y Seeders (Ejecutar en consola del proyecto)
<img width="532" height="84" alt="image" src="https://github.com/user-attachments/assets/041c8637-7b4a-490e-8a30-e62504afb7db" />

```bash
php artisan migrate
php artisan db:seed

## Levantar el servidor
php artisan serve
# http://127.0.0.1:8000
```

Al abrir el enlace, se debe ver así:
<img width="1626" height="928" alt="image" src="https://github.com/user-attachments/assets/2952c706-7464-4393-8d31-f85d79cfd6e2" />

```bash
# Listar keywords
curl http://127.0.0.1:8000/api/keywords

# Crear keyword
curl -X POST http://127.0.0.1:8000/api/keywords \
  -H "Content-Type: application/json" \
  -d '{"name":"Urgente"}'

# Crear tarea
curl -X POST http://127.0.0.1:8000/api/tasks \
  -H "Content-Type: application/json" \
  -d '{"title":"Corregir bug","keywords":[1]}'

# Alternar estado
curl -X PATCH http://127.0.0.1:8000/api/tasks/1/toggle
```

## Estructura

```plaintext
app/
  Http/
    Controllers/
      TaskController.php
      KeywordController.php
    Requests/
      TaskRequest.php
  Models/
    Task.php
    Keyword.php
database/
  migrations/
  seeders/
    KeywordSeeder.php
routes/
  api.php
```





