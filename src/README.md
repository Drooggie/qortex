## Installation and setup 

### Installation and setup

Run `docker compose up -d` for starting containers
Move into php bash terminal `docker exec qortex_app /bin/bash`
Run this commands:
```
composer install 
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

For last one move into <a href="http://localhost:8080/api/songs">localhost:8080/api/songs</a>
