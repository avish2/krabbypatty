mysql://ba5903e8b42076:997fdfcd@us-cdbr-iron-east-05.cleardb.net/heroku_c7cdd48a5b9085f?reconnect=true


'mysql'  => [
    'driver'    => 'mysql',
    'host'      => env('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net'),
    'database'  => env('DB_DATABASE', 'heroku_c7cdd48a5b9085f'),
    'username'  => env('DB_USERNAME', 'ba5903e8b42076'),
    'password'  => env('DB_PASSWORD', '997fdfcd'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
    'strict'    => false,
],