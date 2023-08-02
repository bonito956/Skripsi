# Menggunakan gambar resmi PHP
FROM php:latest

# Menyalin kode aplikasi ke dalam direktori kerja di dalam gambar Docker
COPY . /var/www/html

# Mengekspose port 80 (port default untuk HTTP)
EXPOSE 80

# Menjalankan web server PHP (misalnya, Apache)
CMD ["php", "-S", "0.0.0.0:80"]
