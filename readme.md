Phinx bridge to Nette DI
--


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