This application is created using lumen framework

Server Requirements 
    PHP >= 7.3
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension


Step 1
open mysql run 
open file under database/table named table.php

create database, table and insert data.



Step 2:
open .env file change the database credentials

step 3:

install php version >= 7.3 
install nginx if not there

step 4:
in the lumene folder 
run "php -S localhost:8000 -t public"

Open browser/postman

run 
localhost:8000/product/list/Innovative

here localhost:8000/product/list/ is api path and "Innovative" is search keyword you can change if required.


Lot of modification like JWT based auth and handling / in keyword etc can be done in near future.