Packt+ Assessment

Task Description: 
1> Admin should be able to add/edit/delete books
2> Customers should be able to search and filter according to multiple attributes like title, author, publication date, isbn, genre
3> Data must be paginated
4> Use the following data source as an example to build your data set - https://fakerapi.it/api/v1/books?_quantity=100
5> Minimum 100 products
6> Please focus on performance of the APIs

My Work : 
   on Admin Panel : 
        1> login using User Name and Password ( http://127.0.0.1:8000/admin ) 
            -> login details (username: admin and password : admin123)
        2> On the Product page view all Product List, search, edit, delete and Add New Product 
            -> we also use API to import products directly using API (https://fakerapi.it/api/v1/books?_quantity=100)
            -> for this task use URL  http://127.0.0.1:8000/api/get-product/100 
    
    On Customers Side : ( http://127.0.0.1:8000 )
        -> we are showing 12 products on 1 page after we use pagination to show more product 
        -> search product by Title, Author, Publication date, ISBN, Genre 


Setup Project: 
    1> Download or Clone Project in local Pc 
    2> run command composer install
    3> run command PHP artisan serve
    4> On the Db side use migration command or direct import task.sql in main directory
    5> using migration command time use seeder for user, role, and role permission ( direct DB import time not required)
    6> on the product table use http://127.0.0.1:8000/api/get-product/100  URL for import direct product         

