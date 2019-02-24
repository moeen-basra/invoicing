# Laravel React invoicing

A real estate invoicing project created with laravel and react.

[Demo](http://invoices.moeen.me/)

Please follow the guide for iinstallation.

1. `git clone`
2. `update the .env file along with database connection`
3. `composer install && composer update`
4. `php artisan migrate`
5. `php artisan db:seed`
6. `yarn install`

### Set the App URL
Set the APP_URL in `.env` file (e.g)

```
APP_URL=http://localhost:8000
```

### Set the APP Title
Set the APP_TITLE in `resources/js/values/index.js`

```angular2html
APP_TITLE='Your Blog Name'
```

### Run PHP Dev Server
Either create a local dev url and map the link in webpack.mix.js file or open an other terminal window and copy paste the following command

```
php artisan serve
```

### Run Node Engine

Compile assets one time.
```
yarn run dev
```
**OR**

if you would like to compile assets on runtime then copy paste following command in terminal 

`yarn run watch` or `yarn run watch-poll`

###APIs

######Get all invoices

```GET /api/invoices```

##### Add filters

```
GET /api/invoices?q=invoiceable_type=user
GET /api/invoices?q=invoiceable_type=user&invoiceable_id=1
GET /api/invoices?q=invoiceable_type=user&invoiceable_id=1&status=pending
```

##### Load relations
```
GET /api/invoices?q=invoiceable_type=user&with=details
GET /api/invoices?q=invoiceable_type=user&with=details,user
```

#####Get stats
```
GET /api/invoices/stats
```

##### Create invoice
```
POST /api/invoices

params = [
  'type_id' => '5', // required
  'type' => 'lease', // required one of lease, property, user
  'status' => 'paid', // optional default pending
  'due_at' => '2019-01-01', // optional default today
  
  // details can be repeated
  'details[0][token]' => 'This is sample', // required
  'details[0][content]' => 'this is some sample content', // required
  'details[0][price]' => '400', // required
  'details[0][discount]' => '20', // optional default 0
  'details[0][quantity]' => '2', // optional default 1
]
```

TODO:
- [x] API for create invoice
- [x] API for listing invoice
- [x] API for filtering invoice based on entity, status, number
- [x] API Stats for total and vacant units, due and paid invoices
- [x] Frontend for invoice listing along with pagination
- [ ] Frontend filters 
- [ ] Frontend States
- [ ] Frontend CRUD for invoices
- [ ] Test cases



