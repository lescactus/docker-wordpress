FROM nginx:latest

EXPOSE 80


RUN sed -i 's/user  nginx;/user  www-data;/' /etc/nginx/nginx.conf
RUN usermod -u 1000 www-data


COPY ./nginx.conf /etc/nginx/nginx.conf
COPY ./default.conf /etc/nginx/conf.d/default.conf
COPY ./global /etc/nginx/global/

WORKDIR /var/www/html

CMD ["nginx", "-g", "daemon off;"]
