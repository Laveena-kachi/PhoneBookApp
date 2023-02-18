

https://user-images.githubusercontent.com/119934464/219878517-91658f13-d7a0-4ab3-9153-d79f8798c0cf.mp4




https://user-images.githubusercontent.com/119934464/219878685-fe26b76f-5fc0-488a-92ff-afab30015c36.mp4






# Project Title & description:

PhoneBook Application 

Aim of the PhoneBook Application is to provide the clients to add, read, update & delete the contacts, Using PhoneBook Application the Admin can create, read, update & delete the contacts. The admin has access to user records, the admin can perform CRUD operations on user records as well.



First Step: download in your system.

git clone https://github.com/Laveena-kachi/PhoneBookApp


```http
  cd PhoneBookApp
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

Admin also has access to perform the CRUD operations on contacts.

1. GET contacts
```http
  http://127.0.0.1:8000/admin-contacts
```
To get all the contacts I've used the index method from API/AdminController.

2. Add contact
```http
  http://127.0.0.1:8000/admin-contact-form
```
using the above url admin will get the form to add a new contact, which is created from create method.

3. Update contact
```http
  http://127.0.0.1:8000/admin-update/{id}
```
using above update url admin will get the edit form to edit contact details, which is created from edit  method.

4. Delete contact
```http
  http://127.0.0.1:8000/admin-delete/{id}
```
To view total number of contacts added by clients daily,weekly & montly. 
```http
  http://127.0.0.1:8000/count
```

Now, we can register a client 
```http
  http://127.0.0.1:8000/register
```
Then,the registered client will login & will be redirected to the contact list page.
```http
  http://127.0.0.1:8000/contacts
```
from this contacts route, the client can view the list of contacts & it will display all the contacts.

A client can create a contact using the following route,

```http
  http://127.0.0.1:8000/form
```
A client can update a contact using the following route,
```http
  http://127.0.0.1:8000/update/{id}
```
A client can delete a contact using the following route,

```http
  http://127.0.0.1:8000/delete/{id}
```
