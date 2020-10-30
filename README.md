## MyFEX 2.0

MyFEX 2.0 is Laravel web app for KPDNHEP.

## Install

### Laravel App

Download the master branch

```bash
git clone git@github.com:zahiryusof92/myfex2.git
```

Make a copy `.env.example`

```bash
cp .env.example .env
```

Generate Key
```bash
php artisan key:generate
```

Edit you `.env` to match your system, like app_name, database, email, etc

Install the composer dependencies

```bash
composer install
```

Finally make sure you have a database, and run the migrations and seeds

```bash
php artisan migrate --seed
```

## License

The Laravel framework are open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
