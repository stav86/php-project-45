#Makefile
install: #установить зависимости
	composer install

brain-games: #запуск игры
	php bin/brain-games

validate: #проверка на ошибки
	composer validate
