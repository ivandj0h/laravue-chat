## Messenger App using Laravel and Vue.JS

## get it up and running.

After you clone this project, do the following:

```bash
# go into the project
cd Messenger-App-VueJS-and-Laravel

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

Good Luck :)
