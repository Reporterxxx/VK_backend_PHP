## Техническое задание

Тебя назначили архитектором нового проекта - интернет-магазина крупного ритейлера, который работает во всех городах России.
На сайте будет представлено большое разнообразие товаров: от книг и игрушек до еды и косметики.
После встречи с заказчиком, в рамках первого этапа разработки, были вынесены основные тезисы:
1. Интернет-магазин имеет 3 функциональных блока: личный кабинет пользователя, каталог товаров, административный модуль ("админка").
2. Каталог товаров организован в древовидную структуру: **группа -> категория -> подкатегория**.
Эта структура управляется через админку контент-менеджерами.
У каждого элемента структуры есть название, изображение.
Товар находится на уровне подкатегории. Причем, он может находиться только в одной подкатегории.
Например: "Мужчинам" -> "Одежда" -> "Джемперы" -> товар "Джемпер мужской синий р44".
Подкатегория может принадлежать только одной категории. А категория, в свою очередь, только одной группе.
3. Товары  создаются и редактируются в админке.
При создании товара обязательно указать его название, изображение, цену и количество данного товара на складах.
У товара могут быть дополнительные поля (вес, новый/б.у, длина, ширина и т.п.), причем, у разных товаров могут быть разные поля.
Например, у книг - это тип обложки и количество страниц, а у еды - это ккал и БЖУ.
4. При входе в интернет-магазин, пользователя обязательно попросят выбрать город.
В разных городах цена на один и тот же товар может различаться.
В каждом городе 1 и более складов. Один и тот же товар может быть в большом количестве на одном складе и отсутствовать на другом.
Данные о складах и количествах товара так же задаются в админке.
5. Чтобы оформить заказ, пользователь должен зарегистрироваться. Товары можно положить в "Корзину" и потом оформить доставку.
6. За доставку заказа отвечает внешняя логистическая система. В ней можно только зарегистрировать доставку и получить ее статус.
7. В каталоге товаров должен быть полнотекстовый поиск по товарам.
8. Данные о товарах обновляются не очень часто. Также есть жесткие требования ко времени отклика запросов к каталогу товаров.

Необходимо:
1. Выбрать базу данных (реляционная, документоориентированная, ключ-значение и т.п.). Возможно использование нескольких баз данных.
Описать схему данных.
Решить, где будет храниться медиаконтент. 
Свое решение необходимо обосновать, описать плюсы и минусы.
2. Нарисовать схему, в которой будут показаны все компоненты системы и их взаимодействие: функциональные модули, базы данных, внешние системы и т.п.
3. Реализовать прототип API по оформлению заказа: прописывать код полностью не надо, достаточно в виде верхнеуровневого наброска на PHP - интерфейсы, классы, методы без реализации.
Поскольку это тестовое задание - от вас не требуется знание всех в мире фреймворков и новомодных БД.
Основное - это умение перевести условия задачи на технологии, с которыми вы работали или просто знакомы.
4. Загрузите решение (текстовый файл с описанием прототипа, PHP-код, ссылка на схему и т.п.) в репозиторий на github/gitlab/bitbucket и приложи ссылку на него в ответ.
Не забудь разрешить доступ.

## Реализация

#### 1. Выбор базы данных. Описание схемы данных. Решение по хранению медиаконтента
#### 2. Программно-техническая архитектура проекта.
#### 3. Прототип API по оформлению заказа
