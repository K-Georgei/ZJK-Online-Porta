# RUN THESE AFTER PULL

## Extensions php.ini
- extension=curl
- ;extension=ffi
- ;extension=ftp
- extension=fileinfo
- extension=gd
- extension=gettext
- ;extension=gmp
- extension=intl
- ;extension=imap
- extension=mbstring
- extension=exif      ; Must be after mbstring as it depends on it
- extension=mysqli
- ;extension=oci8_12c  ; Use with Oracle Database 12c Instant Client
- ;extension=oci8_19  ; Use with Oracle Database 19 Instant Client
- ;extension=odbc
- extension=openssl
- ;extension=pdo_firebird
- extension=pdo_mysql
- ;extension=pdo_oci
- ;extension=pdo_odbc
- ;extension=pdo_pgsql
- extension=pdo_sqlite
- ;extension=pgsql
- ;extension=shmop


# Commands
- composer install
- composer update (if needed)
- npm install

## copy .env.example delete .example part set up the following
- name
- app locale
- db connection segment
  + mysql
  + db (name)

# Commands
- php artisan shield:setup
- php artisan shield:install admin
- php artisan shield:setup
- php artisan shield:generate --all
- php artisan migrate
- php artisan db:seed --class=CountrySeeder

# Commands RUN
- php artisan key:generate
- php artisan serve
- npm run dev

