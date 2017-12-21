FROM php:7-fpm

RUN apt-get update && apt-get install -y --force-yes    \
        git                                     	\
        libfreetype6-dev                        	\
        libjpeg62-turbo-dev                     	\
        libmcrypt-dev                           	\
        libpng-dev	                            	\
        zlib1g-dev                              	\
        libicu-dev                              	\
        libpq-dev                               	\
        g++                                     	\
	libzip-dev					\
        && docker-php-ext-install -j$(nproc) iconv	                                                \
        && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/  \
        && docker-php-ext-install -j$(nproc) gd                                                         \
        && docker-php-ext-install -j$(nproc) pdo                                                        \
        && docker-php-ext-install -j$(nproc) mbstring                                                   \
        && docker-php-ext-install -j$(nproc) exif                                                       \
        && docker-php-ext-configure intl                                                                \
        && docker-php-ext-configure pdo_pgsql                                                           \
        && docker-php-ext-install -j$(nproc) intl                                                       \
        && docker-php-ext-install -j$(nproc) pdo_mysql                                                  \
        && docker-php-ext-install -j$(nproc) pdo_pgsql                                                  \
        && docker-php-ext-install -j$(nproc) mysqli                                                     \
        && pecl install zip                                                                             \
        && docker-php-ext-enable zip                                                                    \
        && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN sed -i 's/pm.max_children.*/pm.max_children = 50/' /usr/local/etc/php-fpm.d/www.conf				\
	&& sed -i 's/pm.start_servers.*/pm.start_servers = 5/' /usr/local/etc/php-fpm.d/www.conf		\
	&& sed -i 's/pm.min_spare_servers.*/pm.min_spare_servers = 5/' /usr/local/etc/php-fpm.d/www.conf	\
	&& sed -i 's/pm.max_spare_servers.*/pm.max_spare_servers = 35/' /usr/local/etc/php-fpm.d/www.conf

RUN usermod -u 1000 www-data

CMD ["php-fpm"]
