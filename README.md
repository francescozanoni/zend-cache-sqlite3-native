# SQLite 3 cache engine for Zend Framework 1 (native driver)


## Purposes

1. add SQLite 3-based cache engine to Zend Framework 1, besides the default SQLite 2 engine
1. provide it as Composer package, with specific requirements and fully automated installation
1. integrate with official Zend Framework 1 package


## How to use

1. add this package to your dependencies:
   ```
   composer require francescozanoni/zend-cache-sqlite3-native
   ```
       
1. customize your **application.ini** file with the following lines:
   ```
   resources.cachemanager.useragents.backend.name = Sqlite3
   ```


## History

1. [gencer/zend-cache-sqlite3](https://github.com/gencer/zend-cache-sqlite3) started the project, with instructions on how to manually copy and paste the code to the suitable Zend Framework's subfolder. PDO and native driver versions are provided together.

1. [tttptd/zend-cache-sqlite3](https://github.com/tttptd/zend-cache-sqlite3) added a basic Composer-compliant structure, but left the manual installation and the two versions together.

1. I've added the official Zend Framework 1 package as requirement and split the original package into two different packages: this one and [francescozanoni/zend-cache-sqlite3-pdo](https://github.com/francescozanoni/zend-cache-sqlite3-pdo), in order to let the final user choose and handle requirements accordingly. The engine code (src/Zend/Cache/Backend/Sqlite3.php) was taken as-is from the mentioned repositories, I've only wrapped it into a Composer-compliant file/folder structure.


## References

  * https://framework.zend.com/manual/1.12/en/zend.cache.html
  * https://github.com/gencer/zend-cache-sqlite3
  * https://github.com/tttptd/zend-cache-sqlite3
  * https://github.com/francescozanoni/zend-cache-sqlite3-pdo
