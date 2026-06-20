FROM php:8.2-apache

# Salin source code aplikasi ke document root Apache
COPY public/ /var/www/html/
COPY src/ /var/www/html/src/
COPY vendor/ /var/www/html/vendor/

# Arahkan Apache DocumentRoot ke folder public (best practice)
# (opsional, di sini kita simpan sederhana langsung di /var/www/html)

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
