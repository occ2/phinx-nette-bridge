Phinx bridge to Nette DI
--

[![License](https://img.shields.io/badge/license-New%20BSD-blue.svg)](https://github.com/banyacz/phinx-nette-bridge/blob/master/license.md)

Requirements
---

```
nette/di
contributte/console
robmorgan/phinx
```



Install
---

1) Require library  ``composer require banyacz/phinx-nette``
2) Register DI extension 

``` 
extensions:
    phinx: Banyacz\Phinx\DI\PhinxExtension
```



Configuration
---

```
phinx:
    paths:
        migrations: ./migrations
    default_migration_table: phinxlog
    environments:
        development:
            adapter: mysql
            host: 'localhost'
            name: db_name
            user: root
            pass: '123456'
            port: 3306
            charset: utf8
    version_order: creation
```


Usage
---
```
{PATH_TO_CONSOLE} phinx:migrate 
{PATH_TO_CONSOLE} phinx:create 
{PATH_TO_CONSOLE} phinx:rollback 
{PATH_TO_CONSOLE} phinx:status
{PATH_TO_CONSOLE} phinx:breakpoint  
```