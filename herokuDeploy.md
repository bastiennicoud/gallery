# Deploy on Heroku

A little tutorial to remember the deployment process.

1. `heroku create`
2. `heroku config:set APP_KEY=…`
3. Sets all the others ENV (database, amazon keys)
4. `git push heroku master`
5. `heroku addons:create heroku-postgresql:hobby-dev`
6.
```php
// Pars the database url
$dbopts = parse_url(getenv('DATABASE_URL'));

// Set's the database connexion indentifiers
'pgsql' => [
            'driver' => 'pgsql',
            'host' => $dbopts["host"],
            'port' => $dbopts["port"],
            'database' => substr($dbopts["path"], 1),
            'username' => $dbopts["user"],
            'password' => $dbopts["pass"],
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
```
7. `git push heroku master``
8. You are ready