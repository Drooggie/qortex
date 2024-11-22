## Installation and setup 

Clone Repository 
```
git clone https://github.com/Drooggie/qortex.git
``` 

Move into Repository 
```
cd qortex
``` 


Run this command for building and starting containers
```
docker compose up -d --build
```  
<br />

Run this commands for migration:
```
docker exec qortex_app php artisan migrate:fresh --seed --force
```

For last one move into Swagger Documentation<a href="http://localhost:8080/api/documentation/">localhost:8080/api/documentation</a>
