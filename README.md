Test task
=========

Настройка

1.Прописать настройеи подключения к DB в файле /config/db.php

2.В сонсоле выполнить команды:

    composer install
    
    yii migrate    
    на вопрос "Apply the above migration? (yes|no) [no]:" прописать yes и нажать enter 

3.Прописать путь в Apach/Nginx к файлу index.php по пути "путь до проекта"/web
 
Проверка

Внесение данных в DB GET запросом по URL:

    http://url/savereport?data={"code":1,"type":2,"message":"Ошибка2", "application":"Игра 5"}

Просмотр внесенных данных:

    1. Menu "Show"
    2. URL "http://url/show"
    
Модули

1.API:
 \modules\api
 
2.Show:
 \modules\show
 
DB

Main Model - \models\Data.php
Model рефлизации пагинации - \models\DataPagination.php

Migrations

\migrations\m170914_210234_data.php - миграция таблици data