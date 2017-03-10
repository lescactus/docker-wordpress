# docker-wordpress
Set up a Wordpress instance with Nginx, PHP-FPM 7 and MariaDB using docker-compose.



----------


About
-------------

Put your Wordpress in code/ 


```
# Build and pull images 
docker-compose build
docker-compose pull
```

``` 
# Run in background
docker-compose up -d
```

``` 
# Check running services
docker-compose ps

          Name                         Command              State                Ports
--------------------------------------------------------------------------------------------------
dockerwordpress_mariadb_1   docker-entrypoint.sh mysqld     Up       3306/tcp
dockerwordpress_nginx_1     nginx -g daemon off;            Up       443/tcp, 0.0.0.0:8000->80/tcp
dockerwordpress_php-fpm_1   docker-php-entrypoint php-fpm   Up       9000/tcp
dockerwordpress_storage_1   /bin/true                       Exit 0
```

