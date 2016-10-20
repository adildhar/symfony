Symfony
============

A Symfony project created on October 16, 2016, 3:13 pm.

Uses the following components

Symfony
Nginx
Postgres
MongoDB
AWS
 
symfony2 application exposing the following endpoints: 

/setup -Prepare nodes for load balancer upon receiving GitHub push event. 
/test -Testing end point where you are required to generate random record with 3 attributes (first name, last name, age) and insert it into a PostgreSQL DB. 
/takedown -Remove a node from the PostgreSQL cluster. 
/transfer -Move data currently stored in PostgreSQL in NoSQL engine. 
/count -Return the count of records stored in NoSQL engine. 
/teardown -Dispose-off resources

You need to following details to your parameters.yml file under app/config.

parameters:
    database_driver: pdo_pgsql
    database_host: xxx
    database_port: 5432
    database_name: xxx
    database_user: xxxx
    database_password: xxxx
    mailer_transport: smtp
    mailer_host: xxxxx
    mailer_user: null
    mailer_password: null
    mongodb_server: "mongodb://xxxxx:27017/xxxx"
    mongodb_user: xxxxx
    mongodb_pass: xxxx
    mongodb_db: xxxx
