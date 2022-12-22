# laravel-Run-To-Cmd 

This package can turn your PHPStorm Run Configurations to .cmd scrips in order to let you easily run your configurations by clicking jbust one file


Сontact the [Developer](https://github.com/Samandarrrr)  

- Run 
- Console 
- Cmd


requires [php](https://www.php.net/) v7.4+ run.

# Installation


For production environments…

```sh
composer require teamprodev/laravel_runtocmd
```

Vendor Settings (optional)

```sh
php artisan vendor:publish --provider="RunToCmd\Providers\RunServiceProvider" 
``` 
# Usege

```sh
php artisan command:runCmd
```