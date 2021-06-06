`git clone https://github.com/Kasparsu/mm18cats.git`

`cd mm18cats`

`cp .env.example .env`

`composer install`

`npm install`

`php artisan key:generate`

`php artisan storage:link`

`touch database.sqlite`

change in .env
`
DB_CONNECTION=sqlite
DB_DATABASE=[full path to your database.sqlite file]
`

`php artisan migrate --seed`
# mm18cats git init git add README.md git commit -m first commit git branch -M main git remote add origin https://github.com/trevortsik/mm18cats.git git push -u origin main
# mm18cats
