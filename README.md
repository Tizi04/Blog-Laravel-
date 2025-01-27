# Blog CRUD en Laravel

Este es un proyecto de **blog** creado con **Laravel**, que implementa un sistema básico de **CRUD** (Crear, Leer, Actualizar, Eliminar) para gestionar entradas de blog. El proyecto utiliza **Tailwind CSS** para la estilización y presenta una interfaz limpia y moderna. 

## Características principales:
- **Autenticación de usuario** (si es necesario)
- **Creación de entradas** con título, slug, categoría y contenido
- **Edición y actualización** de entradas existentes
- **Eliminación** de entradas
- **Visualización** de entradas en una lista paginada

El sistema también incluye validación de formularios en el lado del servidor para garantizar la integridad de los datos, con reglas personalizadas para los campos como el título y el slug.

## Características:
- **Diseño responsivo** con **Tailwind CSS**
- **Validación de formularios** en Laravel
- **Paginación** de entradas del blog
- **Interfaz fácil de usar**


---

## Cómo instalar el proyecto:

1. Clona este repositorio:
    ```bash
    git clone https://github.com/Tizi04/Blog-Laravel.git
    ```
2. Instala las dependencias:
    ```bash
    composer install
    ```
3. Configura el archivo `.env` con tus credenciales de base de datos.
4. Ejecuta las migraciones:
    ```bash
    php artisan migrate
    ```
5. Inicia el servidor:
    ```bash
    php artisan serve
    ```

¡Listo! Ahora puedes acceder a la aplicación en tu navegador.

---

### Contribuciones

Si deseas contribuir a este proyecto, puedes hacerlo de la siguiente manera:

1. Haz un fork de este repositorio.
2. Crea una nueva rama (`git checkout -b nueva-funcionalidad`).
3. Realiza tus cambios y haz un commit (`git commit -am 'Añadir nueva funcionalidad'`).
4. Haz push a tu rama (`git push origin nueva-funcionalidad`).
5. Abre un pull request en este repositorio.

---

### Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.
