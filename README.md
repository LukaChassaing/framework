# LC Framework

Minimal php framework for easy application development.
Inspired a little by Symfony, powered by twig.

## Requirements
- Apache server
- PHP 7
- Composer
- MySQL (optionnal)

## Getting started
1. Clone the repository
2. Change the application name in `config/general.conf` and rename your folder the same.
3. Install dependencies
```bash
composer install
```
4. Define your routes in `config/routes.conf`

That's all folks!

## Connection to one database
`config/database.conf`
```txt
[database]
driver = "mysql"
host = "localhost"
dbname = "db"
username = "root"
password = ""
```

```php
$databaseDriver = new \Core\DatabaseDriver();
```

## Connection many databases
`config/database.conf`
```txt
[databases]
firstDatabase[driver] = "mysql"
firstDatabase[host] = "localhost"
firstDatabase[dbname] = "firstDatabase"
firstDatabase[username] = "root"
firstDatabase[password] = ""

secondDatabase[driver] = "mysql"
secondDatabase[host] = "localhost"
secondDatabase[dbname] = "secondDatabase"
secondDatabase[username] = "root"
secondDatabase[password] = ""
```

```php
$firstDatabaseDriver = new \Core\DatabaseDriver('firstDatabase');
$secondDatabaseDriver = new \Core\DatabaseDriver('secondDatabase');
```