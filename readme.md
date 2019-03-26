## About LaraVue-Chat

Laravue-chats is a web chat application using Laravel framework as a backend & VueJS as a frontend, this is a very simple chat for now, but maybe i'll add more feature for the future.
if you interest with this application, you can clone it and continue to develop it, or maybe feel free to contibute, thanks

## Installation LaraVue-Chat

```bash
# go into the project
cd Laravue-chat

# create a .env file
cp .env.example .env

# install composer dependencies
composer update

# install npm dependencies
npm install

# generate a key for your application
php artisan key:generate

# create a local MySQL database (make sure you have MySQL up and running)
mysql -u root

> create database chat_db;
> exit;

# add the database connection config to your .env file
DB_CONNECTION=mysql
DB_DATABASE=chat_db
DB_USERNAME=root
DB_PASSWORD=

# run the migration files to generate the schema
php artisan migrate

# visit https://pusher.com and create a free app. then copy the keys into your .env file
PUSHER_APP_ID=your_pusher_app_id
PUSHER_APP_KEY=your_pusher_app_key
PUSHER_APP_SECRET=your_pusher_app_secret
PUSHER_APP_CLUSTER=your_pusher_cluster

# change the BROADCAST_DRIVER in your .env to pusher
BROADCAST_DRIVER=pusher

# run webpack and watch for changes
npm run watch
```

## ScreenShoot LaraVue-Chat



## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
