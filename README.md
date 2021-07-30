Docker-compose Makefile and Symfony Demo Application
========================

* This Project LICENSED to https://github.com/muhsin-01001101

* NOTE: This Project used Ubuntu Terminal

* This Project contain "Symfony Demo Application + Docker-compose + yarn + makefile + Mysql + etc...".

Requirements
------------

* PHP 7.3 or higher;
* PDO-SQLite PHP extension enabled;
* Mysql
* Docker

Installation
------------
1. Install composer:

```bash
$ cd docker-compose-makefile-symfony-Demo-Mysql/

$ make composer-install
OR
$ make composer-update
```

2. Install all docker-compose images:

```bash
$ make
OR
$ make up
```

3. Go to phpmyadmin : <https://localhost:8080> :
- import -> Browse your computer: (Choose File) -> data/dump-mysql.sql

4. If you face any access permission issues in <https://localhost:8000>:
```bash
$ sudo chmod -R 777 var/
```

5. Then access the application in your browser at the given
   URL (<https://localhost:8000> by default).
- phpmyadmin : <https://localhost:8080>). username & pass: symfony-demo

MAKEFILE
-----
Just go to makefile or execute:
```bash
$ make help 
```
