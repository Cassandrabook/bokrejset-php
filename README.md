DATABAS
Databasen heter bokrejset och har 4 tabeller:

books
id int
title varchar(50)
pages int
author_id int (FK)

users
id int
name varchar(50)

userbooks
review varchar(150)
bookId int (FK)
userId int (FK)

authors
id int
firstname varchar(32)
lastname varchar(32)
