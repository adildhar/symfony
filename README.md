Symfony
============

A Symfony project created on October 16, 2016, 3:13 pm.

Uses the following components

Symfony
Nginx
Postgres
MongoDB
Ansible
AWS
 
symfony2 application exposing the following endpoints: 

/setup -Prepare nodes for load balancer upon receiving GitHub push event. 
/test -Testing end point where you are required to generate random record with 3 attributes (first name, last name, age) and insert it into a PostgreSQL DB. 
/takedown -Remove a node from the PostgreSQL cluster. 
/transfer -Move data currently stored in PostgreSQL in NoSQL engine. 
/count -Return the count of records stored in NoSQL engine. 
/teardown -Dispose-off resources
