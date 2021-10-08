﻿# Описание проекта

Игры в "Крестики-нолики" (tic-tac-toe) с компьютером на поле произвольного размера (от 3x3 до 10x10).

* * *

* Для отображения используются символы (фигуры) "X" и "O".
* Начинают ходить всегда крестики, кем играет человек определяется случайным образом.
* Информация о датах и исходах всех партий, а также о всех ходах, сделанных во время игры, сохраняется в базе данных SQLite.
* Для каждой партии в базе хранится следующая информация:
  * Размер поля
  * Дата игры
  * Имя игрока
  * Какой фигурой играл человек
  * Какая фигура выиграла в партии
  * Запись ходов в формате: `номер хода | координата X | координата O`
* В программе реализованы три режима, которым соответствуют ключи:
  * `--new` или `-n`. Новая игра.
  * `--list`или `-l`. Вывод списка всех сохраненных партий.
  * `--replay id` или `-r`. Повтор игры с идентификатором id.
  * `--help` или `-h` Вывод краткой информации о приложении, формате ввода координат и доступных ключах для запуска в разных режимах.

* * *

## Требования

Минимальная версия PHP: 7.4.7 \
Минимальная версия Composer: 1.9.3 \

* * *

## Инструкция по установке и запуску игры

Из Github:

1. Склонировать проект на локальную машину;
2. Установить composer, если он не установлен;
3. Перейти в корневой каталог;
4. Выполнить в консоли команду `composer update`;
5. Перейти в каталог bin из корнегого каталога и запустить файл tic-tac-toe.bat.

Из Packagist:

1. Установить composer, если он не установлен;
2. Перейти в каталог, в который вы будете клонировать проект;
3. Выполнить команду `composer create-project onerayman/tic-tac-toe`;
4. Перейти в каталог vendor/bin;
5. Запустить файл tic-tac-toe.bat.

* * *

## Ссылки

Packagist: https://packagist.org/packages/onerayman/tic-tac-toe
