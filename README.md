Symfony Demo Application
========================
This Project LICENSED to https://github.com/muhsin-01001101

The "Symfony Demo Application + Docker-compose".

Requirements
------------

  * PHP 7.3 or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements][2].

Installation
------------

```bash
$ composer install 
OR
$ composer update
```

Go to Phpmyadmin :
- import -> Browse your computer: (Choose File) -> data/dump-mysql.sql

If you face any access permission issues:
```bash
$ sudo chmod -R 777 var/
OR
$ sudo chmod -R 777 FolderName/
```
Usage
-----

run this command:

```bash
$ cd docker-compose-makefile-symfony-Demo-Mysql/
$ docker-compose up -d
OR
$ docker-compose down
$ docker-compose ps
```

Then access the application in your browser at the given 
URL (<https://localhost:8000> by default).
- phpmyadmin : <https://localhost:8080>). username & pass: symfony-demo

RUN THE PROJECT
-----
Just go to makefile or execute:
```bash
$ make help 
```