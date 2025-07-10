FROM php:8.2-apache

# Instala extensiones comunes si las necesitas
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Asegura que Apache tenga los permisos adecuados
RUN chown -R www-data:www-data /var/www/html

# Activa .htaccess si lo usas (opcional)
RUN a2enmod rewrite
# 👇 Agrega esto para que Apache pueda leer y ejecutar el contenido montado desde Windows
RUN chmod -R 755 /var/www/html && chown -R www-data:www-data /var/www/html