СКРИПТ ИМПОРТА СОДЕРЖИМОГО xlsx в БД на Symfony
#
#Создайте структуру таблицы в БД с помощью команды(если ещё не создан):

php bin/console make:migration
####
php bin/console doctrine:migrations:migrate
#
#Импорт данных
Чтобы импортировать данные из xslx-файла, выполните следующую команду:
###
php bin/console app:import-data

#
#Файл Импорт.Остатки.2024.02.14.xlsx находится по пути "\src\Импорт.Остатки.2024.02.14.xlsx "

###
#
Использовалась бд Postgresql
