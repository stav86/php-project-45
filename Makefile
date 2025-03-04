#Makefile

install: #установка зависимостей
	composer install

brain-games: #запуск приветствия
	php bin/brain-games

validate: #проверка на ошибки
	composer validate

lint: #запуск линтера
	composer exec --verbose phpcs -- --standard=PSR12 src test
	composer exec --verbose phpstan

brain-even: #запуск игры "Проверка на четность"
	php bin/brain-even

brain-calc: #запуск игры "Калькулятор"
	php bin/brain-calc

brain-gcd: #запуск игры "Игра НОД"
	php bin/brain-gcd

brain-progression: #запуск игры "Арифмитическая прогрессия"
	php bin/brain-progression

brain-prime: #запуск игры "Простое ли число?"
	php bin/brain-prime

test:
	composer exec --verbose phpunit tests

test-coverage:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml

test-coverage-text:
	XDEBUG_MODE=coverage composer exec --verbose phpunit tests -- --coverage-text

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src tests


console:
	composer exec --verbose psysh