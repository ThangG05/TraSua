FROM php:8.2-apache

# Cài đặt các thư viện cần thiết cho PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copy toàn bộ code dự án vào thư mục chạy của Apache
COPY . /var/www/html/

# Bật mod_rewrite của Apache nếu dự án của bạn có dùng file .htaccess
RUN a2enmod rewrite

EXPOSE 80