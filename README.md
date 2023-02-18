

https://user-images.githubusercontent.com/119934464/216816252-dfe74b6b-e7a3-4e7e-87ab-0278666b50d8.mp4



https://user-images.githubusercontent.com/119934464/216816400-bd5e7d2a-671f-4e51-916c-9623d04902ab.mp4



https://user-images.githubusercontent.com/119934464/216816018-def985c3-dbd4-41db-a482-98c814e5df1e.mp4



# Project Title & description:

Bookstore Application 

Aim of the Bookstore Application is to provide the customers to view & search the books virtually & by not going to the actual, physical book store. Using Bookstore Application the Admin can create, update & delete the books.

First Step: download in your system.

git clone https://github.com/Laveena-kachi/BooskstoreApplication


```http
  cd BookstoreApplication
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
After successfull admin login, admin is redirected to the admin dashboard page with list of books.
To get all the books, I've used the following web api.

1. GET books
```http
  http://127.0.0.1:8000/books
```
To get all the books I've used the index method from API/BookController & created a pagination for 8 books per page.

2. Add Book
```http
  http://127.0.0.1:8000/form
```
using the above url admin will get the form to add a new book, which is created from create method.

3. Update Book
```http
  http://127.0.0.1:8000/update/{id}
```
using above update url admin will get the edit form to edit book details, which is created from edit  method.

4. Delete Book
```http
  http://127.0.0.1:8000/delete/{id}
```
admin can delete the book by using the above delete route.

Now, we can register customer user 
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
according to search & filter api functionality it will display the books with the pagination.
https://user-images.githubusercontent.com/119934464/216816252-dfe74b6b-e7a3-4e7e-87ab-0278666b50d8.mp4



https://user-images.githubusercontent.com/119934464/216816400-bd5e7d2a-671f-4e51-916c-9623d04902ab.mp4



https://user-images.githubusercontent.com/119934464/216816018-def985c3-dbd4-41db-a482-98c814e5df1e.mp4



# Project Title & description:

Bookstore Application 

Aim of the Bookstore Application is to provide the customers to view & search the books virtually & by not going to the actual, physical book store. Using Bookstore Application the Admin can create, update & delete the books.

First Step: download in your system.

git clone https://github.com/Laveena-kachi/BooskstoreApplication


```http
  cd BookstoreApplication
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
After successfull admin login, admin is redirected to the admin dashboard page with list of books.
To get all the books, I've used the following web api.

1. GET books
```http
  http://127.0.0.1:8000/books
```
To get all the books I've used the index method from API/BookController & created a pagination for 8 books per page.

2. Add Book
```http
  http://127.0.0.1:8000/form
```
using the above url admin will get the form to add a new book, which is created from create method.

3. Update Book
```http
  http://127.0.0.1:8000/update/{id}
```
using above update url admin will get the edit form to edit book details, which is created from edit  method.

4. Delete Book
```http
  http://127.0.0.1:8000/delete/{id}
```
admin can delete the book by using the above delete route.

Now, we can register customer user 
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
according to search & filter api functionality it will display the books with the pagination.
