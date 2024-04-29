FROM mysql:latest

ENV MYSQL_ROOT_PASSWORD=1234 
ENV MYSQL_DATABASE=resume_constructor_laravel 

COPY /dbdump /usr/dbdump
WORKDIR /usr/dbdump