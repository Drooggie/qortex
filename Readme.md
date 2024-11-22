## Installation and setup 

### Installation and setup

Clone Repository `git clone https://github.com/Drooggie/qortex.git` <br />
Move into Repository `cd qortex` <br />
<br />

Run `docker compose up -d` for starting containers <br />
Move into php bash terminal `docker exec qortex_app /bin/bash` <br />
<br />

Run this commands:
```
composer install 
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

For last one move into Swagger Documentation<a href="http://localhost:8080/api/documentation/">localhost:8080/api/documentation</a>
