You will need docker environment for run this.

1. Clone repo, create .env file based on .env.example
2. Add theese db params to .env

DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_link_shorterer
DB_USERNAME=sail
DB_PASSWORD=password

3. Go into project folder and run "./vendor/bin/sail up" 
