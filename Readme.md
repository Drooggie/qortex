## Installation and setup 

### Installation and setup

Clone Repository `git clone https://github.com/Drooggie/qortex.git` <br />
Move into Repository `cd qortex` <br />
<br />

Run `docker compose up -d --build` for starting and building containers <br />
<br />

Run this commands for migration:
```
docker exec qortex_app php artisan migrate:fresh --seed --force
```

For last one move into Swagger Documentation<a href="http://localhost:8080/api/documentation/">localhost:8080/api/documentation</a>
