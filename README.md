# Task9 - Integracion de AdminLTE con Laravel

## Datos del Equipo

- Victor Emilio Flores Lopez - 2811975
- Emiliano Hernandez Garnica - 2980427
- Jordan Zahid Pacheco Estrada - 3079274
- Antonio Cortazar Jimenez - 2956632

## Descripcion

Este proyecto corresponde a la integracion del contenido de la Actividad 11 dentro de un panel
administrativo construido con Laravel y AdminLTE 3. La aplicacion utiliza el paquete
`jeroennoten/laravel-adminlte` para proporcionar la estructura visual del dashboard.

## Objetivo

Adaptar las vistas estaticas de Inicio, Fotos y Contacto a un panel administrativo moderno,
manteniendo una navegacion clara, contenido diferenciado por seccion y un footer visible en
todas las paginas.

## Stack Utilizado

- Laravel 13
- AdminLTE 3
- PHP 8.3
- Composer

## Caracteristicas Implementadas

- Proyecto nuevo llamado `task9`.
- Integracion de AdminLTE en Laravel mediante paquete Composer.
- Menu lateral reducido a tres opciones:
  - Inicio
  - Fotos
  - Contacto
- Vistas adaptadas a `adminlte::page`.
- Footer global con informacion de la actividad y del equipo.
- Rutas estaticas para cada seccion.
- Documento de evidencias con placeholders para capturas.

## Rutas Disponibles

- `/` muestra la vista de Inicio.
- `/fotos` muestra la vista de Fotos.
- `/contacto` muestra la vista de Contacto.

## Instalacion y Ejecucion

1. Instala dependencias:

```bash
composer install
```

2. Genera la clave de aplicacion si fuera necesario:

```bash
php artisan key:generate
```

3. Inicia el servidor:

```bash
php artisan serve
```

4. Abre el navegador en:

```text
http://127.0.0.1:8000
```

## GitHub

- URL del repositorio: https://github.com/Antony-potato/tarea9DisenoWeb.git

## Evidencias

Incluye en tu documento de entrega capturas del panel, el menu lateral, las tres vistas, el
footer y la URL del repositorio.

## Nota

Antes de entregar, verifica que las capturas de pantalla muestren correctamente los datos del
equipo y la URL real del repositorio.
