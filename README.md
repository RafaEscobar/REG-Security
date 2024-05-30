# REG Security
## Aplicación de respaldo de accesos, archivos e imagenes.

![Laravel](https://img.shields.io/badge/laravel-%23E34F26.svg?style=for-the-badge&logo=laravel&logoColor=white)

Esta aplicación permite respaldar accesos, archivos e imágenes en una base de datos local, un servicio en la nube (Google Drive y/o Dropbox) y un servicio local para la prevalencia de los datos y su fácil acceso.

### Feuncionalidades

- Respaldar accesos (correos y contraseñas)
    * Encriptación
    * Acceso bajo contraseña o pin
    * Agrupación en secciones
* Respaldar archivos
    * Subida y descarga
* Respaldo de imagenes
    * Subida y descarga
    * Visualización
- Creación de secciones para organizar los reespaldos de accesos, archivos e imagenes.

## Installation

It's required php 8.3+ and node 20.11+

1. Install composer dependencies
```sh
composer i
```

2. Install node dependencies
```sh
npm i
```

3. Generate and configure .env

4. Generate AppKey
```sh
php artisan key:generate
```

5. Generate link to storage
```sh
php artisan storage:link
```

## License

MIT