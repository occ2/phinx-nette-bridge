Phinx bridge to Nette DI
--
[![Downloads this Month](https://img.shields.io/packagist/dm/banyacz/phinx-nette-bridge.svg)](https://packagist.org/packages/banyacz/phinx-nette-bridge)
[![License](https://img.shields.io/badge/license-New%20BSD-blue.svg)](https://github.com/banyacz/phinx-nette-bridge/blob/master/license.md)


Small extension to integrate basic commands to contributte/console for Nette Framework.


Requirements
---

- [Nette/DI](https://github.com/nette/di)
- [contributte/console](https://github.com/contributte/console)
- [robmorgan/phinx](https://github.com/cakephp/phinx)



Install
---
1) ``composer require banyacz/phinx-nette``
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
        migrations: "./db/migrations"
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
