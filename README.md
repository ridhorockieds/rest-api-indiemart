# REST API Indiemart

### Fixed
- URL API from `{url}/api/(endpoint)` to `{url}/api/v1/(endpoint)`
- Category Model : remove `$hidden`

### Features
- [x] **Price** (New)
- [x] **Product** (New)
- [x] **User**
- [x] **Category**
- [x] **Authentication (Sanctum)**

### Installation
1. `git clone https://github.com/ridhorockieds/rest-api-indiemart.git`
2. `cd rest-api-indiemart`
3. `composer install`
4. copy or rename `.env.example` as `.env`
5. `php artisan key:generate`
6. `php artisan serve`
7. visit `localhost:8000` or `127.0.0.1:8000` on your browser

### Documentation
🔰 = Authentication
#### Price
- `GET` : {url}/api/v1/price 🔰
- `GET` : {url}/api/v1/price/(id) 🔰
- `POST` : {url}/api/v1/price 🔰
#### Product
- `GET` : {url}/api/v1/product 
- `GET` : {url}/api/v1/product/(id)
- `POST` : {url}/api/v1/product/store 🔰
- `PUT` : {url}/api/v1/product/update/(id) 🔰
- `DELETE` : {url}/api/v1/product/(id) 🔰
#### User
- `POST` : {url}/api/v1/user/signup
- `POST` : {url}/api/v1/user/signin
- `GET` : {url}/api/v1/user/signout 🔰
#### Category
- `GET` : {url}/api/v1/category
- `POST` : {url}/api/v1/category/store 🔰
- `PUT` : {url}/api/v1/category/update 🔰
- `DELETE` : {url}/api/v1/category/destroy(id) 🔰

Data sourced from [x.com](https://x.com/BukanYahya/status/1764683491730772018?t=L1Kiq8cT0Hc_8qpmUoEBHg&s=19) or [Direct Download](http://194.233.94.36/indiemart.db)
