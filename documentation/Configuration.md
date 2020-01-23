# Laravel - Configuration
As we know all the configuaration for laravel has done via the **config** folder. But apart from that we can also do some basic configuration.
Let us discuss the categories included in the configuration.
## Environtment configuration
All the environment variables are declared in the **.env** file which includes the parameters required for initializing the configuration.
By default, the .env file includes following parameters - 
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:1b2iJnCk8yMrrHj7d6cNpCv+NpTU/htiwnf5WaHfm3A=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
## Points to remember
* The .env file should not be commited to the application source control, since each developer or user has some predefined environment configuration for the web application.
* For backup option we can use the **.env.example** file, which should contain the default configuration.
## Retrieval of Environment variables
```
'env' => env('APP_ENV', 'production')
```
The above syntax is used to call the environment variables.
*env-helper* functions are called in the *app.php* file included in the config folder.
## Accessing Configuration values
Example:-
```
config(['app.timezone' => 'Asia/Kolkata']);
```
To set the default time zone, the above code will be used.
## Caching of configuration
```
php artisan config:cache
```
To increase the performance and to boost the web application, it is important to cache all the configuration values.
Above command is used for caching the configuration values.
## Maintenance Mode
Sometimes you want to change in your application . In such cases , keeping it in maintenance mode makes things easier for us.Example :-
```
php artisan down
```
and to back from the maintenance mode following command is used 
```
php artisan up
```
<div>
	<span><a href ="https://github.com/satish-dev/laravel-basics/blob/master/documentation/ApplicationStructure.md" >Previous (Application Structure)</a></span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span><a href =https://github.com/satish-dev/laravel-basics/blob/master/documentation/Routing.md" >Next (Laravel - Routing)</a> </span>
</div>
