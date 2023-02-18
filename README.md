





# Project Title & description:

PhoneBook Application 

Aim of the PhoneBook Application is to provide the clients to add, read, update & delete the contacts virtually, Using PhoneBook Application the Admin can create, read, update & delete the contacts. The admin has access to user records, the admin can perform CRUD operations on user records as well.

First Step: download in your system.

git clone https://github.com/Laveena-kachi/BooskstoreApplication


```http
  cd 
```

 composer install

 ```http
 composer install
```
create .env file in root, Make sure it contains at least one line: APP_KEY= ,
Generate an app key in terminal

```http
  php artisan key:generate
```

Put your credentials in .env file & update the database credentials in config/database.php file then,

```http
  php artisan migrate
```

Step second: Run server

```http
  php artisan serve 
```

step three: Run fresh migrations & generate the seeders.

```http
  php artisan migrate:fresh --seed
```
check admin login, using email="admin@gmail.com" & password="12345678"

```http
  http://127.0.0.1:8000/login
```
After successfull admin login, admin is redirected to the admin dashboard page with list of users.
To get all the users, I've used the following web api.

1. GET users
```http
  http://127.0.0.1:8000/users
```
To get all the usesr I've used the index method from API/UserController.

2. Add User
```http
  http://127.0.0.1:8000/user-form
```
using the above url admin will get the form to add a new user, which is created from create method.

3. Update user
```http
  http://127.0.0.1:8000/user-update/{id}
```
using above update url admin will get the edit form to edit user details, which is created from edit  method.

4. Delete user
```http
  http://127.0.0.1:8000/user-delete/{id}
```
admin can delete the user by using the above delete route.

Now, we can register a user 
```http
  http://127.0.0.1:8000/register
```
Then,the registered customer will login & will be redirected to the search page & product page.
```http
  http://127.0.0.1:8000/search
```
from this search route, the customer can search the book title & it will display the available products with pagination.

By clicking the book title, customer is redirected to the product page containing all product information.
```http
  http://127.0.0.1:8000/detail/{id}
```
The customer can search & filter based on author name, isbn, genre & published date by using the following route:
```http
  http://127.0.0.1:8000/searchfilter
```


