# Yii2 - пример интеграции с API Яндекс.Погода

_Основано на [Yii 2](http://www.yiiframework.com/) Basic Project Template._

Выбираем город из выпадающего списка. По умолчанию сервис пытается вывести данные из БД.
Если в БД данных нет или они устарели (прошло 2 часа), то данные подгружаются с API Яндекс-погоды и сохраняются в БД.

Ограничение по тарифу Яндекс API - не более 50 запросов в сутки.

## Требования

Минимальная версия PHP 7.1

## Установка на виртуальный хостинг

### Установка вручную (без Composer)

Скачать [Архив с проектом](http://weather.ru5.info/deploy.zip) и распаковать его в директорию виртуального хоста на вашем сервере.
В итоге эта директория должна выглядеть так:

    assets
    commands
    components
    config
    controllers
    mail
    migrations
    models
    runtime
    vendor
    views
    web
    widgets
    .bowerrc
    .gitignore
    codeception.yml
    composer.json
    composer.lock
    requirements.php
    yii
    yii.bat

### Переименование webroot
В приведенном выше списке web - это webroot директория веб-сервера. У вас она может называться по-другому. Возможные названия: www, htdocs или public_html.

В таком случае, нужно привести web-root в соответсвие. Например, удалите свой (пустой) web-root и переименуйте локальный webroot на название webroot виртуального хостинга. Например, web в www или public_html, в зависимости от наименования webroot вашего хостинга.

### Права на папки и файлы
Для linux-подобных систем нужно установить права 0777 на 2 папки:

    runtime
    web/assets
    
Для остальных папок права должны быть 0755, для файлов 0664. Как правило, такие права устанавливаются по умолчанию.

### Настройки для веб-сервера
В случае, если ваш сервер Apache, добавьте в директорию web или аналогичную, где располагается index.php, файл .htaccess со следующим содержимым:

    Options +FollowSymLinks
    IndexIgnore */*
    
    RewriteEngine on
    
    # if a directory or a file exists, use it directly
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    
    # otherwise forward it to index.php
    RewriteRule . index.php

В случае использования nginx не требуется каких-либо дополнительных настроек.

### Проверка требований
Для того чтобы запустить Yii, ваш веб-сервер должен соответствовать его требованиям. 
Для того чтобы проверить требования, перейдите в браузере по ссылке http://your_site.ru/requirements.php

### База даных
Создать базу данных и внести необходимые изменения в файл `config/db.php`, например:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=weather',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

Применить миграции, выполнив команду:

```
php yii migrate
```
На вопрос о подтверждении применения миграций ответить Y:

```
Yii Migration Tool (based on Yii v2.0.15.1)

Total 2 new migrations to be applied:
        m190212_170132_city
        m190213_041741_cityDataInsert

Apply the above migrations? (yes|no) [no]:y
```

На некоторых хостингах при применении миграций вы можете увидеть такую ошибку:

```
Parse error:  syntax error, unexpected T_STRING, expecting T_OLD_FUNCTION or T_FUNCTION or T_VAR ...
```
Это означает, что консольная версия PHP ниже требуемой (например, по умолчанию вызывается PHP 5.4). В этом случае нужно свериться с документацией хостинга и вызвать для этой команды версию PHP 7.1 или выше.
Это может выглядеть так:

```
opt/php/7.1/bin/php yii migrate
```
