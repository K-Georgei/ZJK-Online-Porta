# ZJK Online Porta - Dokumentáció

## 1. **Projekt áttekintés**

A **ZJK Online Porta** egy online adminisztrációs rendszer, amely lehetőséget biztosít a felhasználóknak arra, hogy egy webes felületen keresztül kezeljék a kollégiumi szobafoglalásokat és a portaszolgálati munkafolyamatokat. A rendszer célja az adminisztrációs terhek csökkentése és a hatékonyság növelése.

## 2. **Funkcionalitások**

- **Felhasználói regisztráció és bejelentkezés** (szerkeszthető profil)
- **Online kezelhető szobafoglalás** (átláthatóbb szobakezelési lehetőség)
- **"Jegyrendszer" alapú problémabejelentés és kezelés**
- **Jogosultságkezelés** (admin, diák szerepkörök)
- Szobaállapotok automatikus frissítése

## 3. **Technológiák**

- **Backend:** PHP Laravel
- **Frontend:** Blade + JavaScript
- **Adatbázis:** MySQL
- **Autentikáció:** Laravel Shield
- **Dokumentáció:** Laravel API resources

## 4. **Telepítési útmutató**

### **1. Szükséges szoftverek telepítése**

Győződj meg róla, hogy az alábbi szoftverek telepítve vannak:
- **PHP (minimum 8.1 verzió)** [letöltés](https://www.php.net/downloads)
- **Composer** [letöltés](https://getcomposer.org/)
- **Node.js és npm** [letöltés](https://nodejs.org/)
- **MySQL** (vagy más kompatibilis adatbázis-kezelő)

### **2. Környezeti beállítások**

Győződj meg róla, hogy a következő PHP kiterjesztések engedélyezve vannak az `php.ini` fájlban:

```
extension=curl
extension=fileinfo
extension=gd
extension=gettext
extension=intl
extension=mbstring
extension=exif
extension=mysqli
extension=openssl
extension=pdo_mysql
```

### **3. Laravel telepítése és projekt klónozása**

Ha Laravel nincs telepítve, telepítsd a következő parancs futtatásával:
```bash
composer global require laravel/installer
```
Ezután klónozd a projektet és lépj be a mappájába:
```bash
git clone https://github.com/K-Georgei/ZJK-Online-Porta.git
cd ZJK-Online-Porta
```

### **4. Függőségek telepítése**

Telepítsd a Composer és npm csomagokat:
```bash
composer install
npm install
```

### **5. Környezeti változók beállítása**

Másold az `.env.example` fájlt és nevezd át `.env`-re, majd állítsd be az alábbi értékeket:

```
APP_NAME=ZJK Online Porta
APP_LOCALE=hu
DB_CONNECTION=mysql
DB_DATABASE=zjk_porta
DB_USERNAME=root
DB_PASSWORD=
```

### **6. Laravel kulcs és adatbázis migráció**

```bash
php artisan key:generate
php artisan migrate
php artisan db:seed --class=CountrySeeder
```

### **7. Jogosultságkezelés beállítása**

```bash
php artisan shield:setup
php artisan shield:install admin
php artisan shield:generate --all
```

### **8. Alkalmazás futtatása**

```bash
php artisan serve
npm run dev
```

## 5. **Jogosultságkezelés**

| Szerepkör | Funkciók                                                                  |
| --------- | ------------------------------------------------------------------------- |
| **Admin** | Felhasználók kezelése, napló megtekintése, szobák menedzselése            |
| **Diák**  | Saját szobafoglalások és belépési adatok megtekintése, problémabejelentés |

## 6. **Biztonsági Megoldások**

- **Adatok titkosítása**: Jelszavak bcrypttel vannak titkosítva.
- **HTTPS kötelező**: A kommunikáció TLS protokollal titkosított.
- **Rate limiting**: API endpointokra lekérési korlátozások.

## 7. **Kapcsolat**

Ha bármi kérdésed vagy ötleted van, írj a GitHub Issues szekciójában!

