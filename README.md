## Что делает программа:
- Шаблон для онлайн игры с возможностью входа по логину
- Работает с БД (работа с SQL)
- Выводит таблицу лидеров 

## Структура БД:
Таблицы:

![BASE_Struct](https://github.com/user-attachments/assets/951ae05c-3456-4964-bcc5-6551404e7916)

Структура players:

![players](https://github.com/user-attachments/assets/c95a69db-73d3-4cee-80dd-ddb246483d2b)

Cтруктура races:

![races](https://github.com/user-attachments/assets/fffe3d7c-91c9-4fce-88e9-153a5d5f4c4d)


## Структура программы:
1. func.php - функции для работы с базой данных и запросами
2. login.php - Страница входа
3. register.php - проверка есть ли игрок с таким именем и расой (Если нет, то создаёт нового)
4. game.php - страница игры
5. result.php - обрабатывает результат игры
6. scores.php - выводит таблицу лидеров

### login.php

![login](https://github.com/user-attachments/assets/afc55f44-4860-487c-a757-d0c38aab71ca)

### game.php

![game](https://github.com/user-attachments/assets/a9d55ff3-e055-461d-9595-9f3a43d1014d)

### scores.php
![scores](https://github.com/user-attachments/assets/84d7498f-8a8c-4a95-b40b-d55fff157141)



## Как запустить программу:
1. Запускаем _EasyPHP Devserver_
2. -->C:\Program Files (x86)\EasyPHP-Devserver-17\eds-binaries\dbserver\mysql5...27\bin запустить: mysql.exe -u root -p
3. source ...\scheme.sql;
4. source ...\data.sql;
5. В браузере открываем localhost
6. В открывшемся окне нажимем BACK to DASHBOARD и устанавливаем путь до файлов в WORKING DIRECTORIES
7. В localhost отктываем _login.php_ 
