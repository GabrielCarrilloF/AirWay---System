# AirWay---System

Este proyecto es un sistema de gestión de transportes, diseñado para facilitar la venta y gestión de boletos para diferentes modos de transporte, incluyendo terrestre y aéreo.

## Descripción

AirWay es una plataforma integral que conecta a compañías de transporte con usuarios finales. Ofrece una interfaz amigable y funcionalidades avanzadas para la gestión eficiente de servicios de transporte. El sistema maneja tres roles principales:

- **Compañías de Transporte:** Empresas como Avianca o Brasilia pueden registrarse para ofrecer sus servicios y vender boletos a través del sistema.
- **Usuarios Generales:** Personas que buscan ofertas de viaje, pueden filtrar y seleccionar boletos basados en su destino, fechas de viaje, número de personas, y necesidades especiales.
- **Administradores:** Gestionan y supervisan las operaciones del sistema, incluyendo el registro y la evaluación de las compañías de transporte.

## Funcionalidades Principales

1. **Roles del Sistema:**
   - **Compañías de Transporte:** Registro y administración de servicios de transporte, como buses y aviones.
   - **Usuarios Generales:** Búsqueda y reserva de boletos según diversos criterios (destino, fechas, número de personas, etc.).
   - **Administradores:** Supervisión y gestión integral del sistema y sus usuarios.

2. **Búsqueda y Filtrado de Viajes:**
   - Permite a los usuarios buscar viajes según su ubicación actual, destino deseado, fechas de ida y vuelta, y número de personas (incluyendo personas con discapacidades).
   - Filtrado de resultados por aerolíneas, compañías de buses, duración del viaje, escalas, y precio.

3. **Proceso de Reserva:**
   - Selección de asientos disponibles.
   - Proporcionar información personal necesaria para la reserva.
   - Sistema de pago integrado para completar la compra de boletos.

4. **Gestión de Compañías de Transporte:**
   - Registro y administración de buses o aviones.
   - Distintos planes de suscripción para las compañías (semi gratuito, mensual y anual).
   - Gestión de tarifas y descuentos por viaje realizado.

5. **Reportes y Análisis:**
   - Generación de reportes sobre la disponibilidad de asientos, ventas de boletos, y desempeño de las compañías de transporte.

## Estado del Proyecto

![Estado del proyecto](https://img.shields.io/badge/estado-en%20desarrollo-yellow)

## Colaboradores

<!-- Generado automáticamente por contrib.rocks -->
[![GitHub Contributors](https://contrib.rocks/image?repo=GabrielCarrilloF/AirWay---System)](https://github.com/GabrielCarrilloF/AirWay---System/graphs/contributors)


### Lista de Colaboradores

<!-- Actualiza esta sección manualmente o utiliza un script para automatizar -->
- [Gabriel Carrillo](https://github.com/GabrielCarrilloF)
- [Jesus Valiente](https://github.com/jesusbrave)
- [Luis Olmos](https://github.com/Luis.Olmos)


## Instalación

### Requisitos previos

1. Tener instalados los siguientes programas:
   - [PHP](https://www.php.net/) 7.4 o superior
   - [Composer](https://getcomposer.org/) para gestionar las dependencias de PHP
   - [Node.js](https://nodejs.org/) 14 o superior y [npm](https://www.npmjs.com/) o [yarn](https://yarnpkg.com/)
   - [Git](https://git-scm.com/) para clonar los repositorios
   - [MySQL](https://www.mysql.com/) u otro motor de base de datos compatible

### Clonar los repositorios

1. Clonar el repositorio del backend (Laravel):
   ```sh
   git clone https://github.com/GabrielCarrilloF/backend_AirWay.git
   cd backend_AirWay
   ```

2. Instalar las dependencias de PHP utilizando Composer:
   ```sh
   composer install
   ```

3. Crear un archivo `.env` en la raíz del proyecto de Laravel copiando el archivo de ejemplo:
   ```sh
   cp .env.example .env
   ```

4. Generar la clave de la aplicación de Laravel:
   ```sh
   php artisan key:generate
   ```

5. Ejecutar las migraciones para crear las tablas en la base de datos:
   ```sh
   php artisan migrate
   ```

6. Iniciar el servidor de desarrollo de Laravel:
   ```sh
   php artisan serve
   ```

7. En otra terminal, clonar el repositorio del frontend (Vue.js):
   ```sh
   cd ..
   git clone https://github.com/GabrielCarrilloF/AirWay---System.git
   cd AirWay---System
   ```

8. Instalar las dependencias de Node.js:
   ```sh
   npm install
   ```

9. Crear un archivo `.env` en la raíz del proyecto de Vue.js copiando el archivo de ejemplo:
   ```sh
   cp .env.example .env
   ```

10. Configurar la URL del backend (Laravel) en el archivo `.env` del proyecto Vue.js:
    ```
    VITE_API_URL=http://127.0.0.1:8000/api
    ```

### Ejecutar el proyecto

1. Iniciar el servidor de desarrollo de Vue.js:
   ```sh
   npm run dev
   ```

2. Ahora, tanto el frontend como el backend deberían estar corriendo. Puedes acceder al frontend en `http://localhost:3000` y al backend en `http://localhost:8000`.

## Uso
**Compañías de Transporte:**

- Registrarse y gestionar servicios de transporte.
- Administrar tarifas, horarios y disponibilidad de asientos.
  
**Usuarios Generales:**

- Buscar y filtrar viajes.
- Reservar boletos y seleccionar asientos.
- Completar el proceso de pago.
  
**Administradores:**

- Gestionar usuarios y compañías de transporte.
- Supervisar operaciones y generar reportes.
