
## Calendar API
Prueba Tecnica para AmobaSoftware
## Instalacion

1. Clonar el repositorio
```bash
git clone
```
2. Instalar el proyecto y sus dependencias
```bash
composer install
```
3. Crear la base de datos en mysql
```sql
CREATE DATABASE 'calendar-api';
```
4. Copiar las variables de entorno
```bash
cp .env.example .env
```
y configurar las variables de entorno en el archivo .env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="calendar_api"
DB_USERNAME=root
DB_PASSWORD=
```
5. EJecutar el comando de hidratacion y migracion de los 
archivos json provistos para esta prueba
```bash
php artisan hydrate:data
```
6. Ejecutar el servidor de Laravel
```bash
php artisan serve
```
7. Revisar el archivo routes.json para las distintas rutas de la api

-- 2021 -- DevKhris