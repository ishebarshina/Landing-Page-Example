# Выкладываем сайт на WordPress
**README не завершен**<br>
Этот репозиторий содержит фалы статической верстки, а также каталог `wp-settings`, где содержатся фалы темы для Wordpress.
Ниже следует подробная инструкция по созданию сайта на WP.
## Установка WordPress
1. Перед началом работы с WordPress необходимо установить OpenServer. 
  Настройте порты. Убедитесь, что OpenServer запускается. 
2. Скачиваем архив с WordPress с официального сайта.
  Откройте OpenServer Настройки - Модули. Выставите версии PHP, MySQL, Apache, которые требует WordPress
3. В папке C:\OpenServer\domains создаем папку сайта-проекта. В эту созданную папку копируем все файлы из архива вордпресс, скачанного с сайта. *Внимание!* Необходимо из каталога вордпресс перенести все файлы в корень проекта, а каталог и архив удалить, иначе потом придется править файлы БД.
4. Файл wp-config-sample.php копируем и переименовываем в wp-config.php
5. Правой кнопкой щелкаем по OpenServer --Дополнительно -- PHPMyAdmin. 
  Указываем пользователя и пароль (e.g. root / root)
  Создаем БД с котировкой `utf8-general-ci`. Пусть наша БД называется `wordpresstest`
6. Эти сведения указываем в нашем файле wp-config.php
```
	define( 'DB_NAME', 'wordpresstest' );
	
	/** Database username */
	define( 'DB_USER', 'root' );
	
	/** Database password */
	define( 'DB_PASSWORD', 'root' );
	
	/** Database hostname */
	define( 'DB_HOST', 'localhost' );
```
7. Перезапускаем OpenServer. Правой кнопкой щелкаем по OpenServer -- Мои проекты -- Открываем нужный нам проект
8. Выбираем язык, следуем инструкциям WordPress. Если вы выбрали сложный пароль, не забудьте сохранить его себе куда-нибудь, он вам понадобится. Можно указать почту, она тоже понажобится - если потребуется восстановить пароль.

## Создание темы
1. Сейчас у вас уже есть три дефолтные темы от WordPress - они находятся в каталоге `wp-content` -- `themes`. Изучив содержимое каталогов с темами, вы увидете, что все они имеют одинаковую структуру. В каждой теме есть папка assets, в которой хранятся файлы сайта css, images, js. Весь сайт разбивается на php файлы: `index.php`, `style.css`, `header.php`, `footer.php`, `functions.php`. 
2. Чтобы создать свою тему, создадим новую папку `test-cms` в каталоге `themes`.
3. Создадим превью темы. Сделаем скриншот главной страницы нашего сайта и разместим в корне каталога `test-cms`. Размер изображения должен быть равным 1200 х 900 px.
4. Создаем в корне файл  style.css, копируем в него комментарий из style.css из другой темы. Можно копировать не все, в целом достаточно следующего:
```
	/*
	Theme Name: BlackWhite Landing Template
	Domain: twentytwenty
	Version: 2.0
	Tested up to: 6.0
	Requires at least: 4.7
	Requires PHP: 5.2.4
	Description: Landing Page Template
	Tags: blog, one-column
	Author: rekilina
	*/
```
Теперь у нас добавилась информация о теме.

5. Создаем файл index.php -- копируем в него полностью содержимое нашего index.html файла со статической версткой

## Подключение скриптов и стилей

1. Копируем все наши стили из основного css файла в файл style.css, который мы создали в корне каталога test-cms.
2. Создаем файлы header.php, footer.php, functions.php
### header
3. Переносим всю часть index.php от DOCTYPE до конца <header> в файл header.php.
	Теперь наш файл index.php выглядит немного "безголовым" :) 
	На пустующем месте оторванной головы пишем <?php get_header(); ?>
	В файле header.php в теге <head> указываем <?php wp_head(); ?> 
``` 
<head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>BW Theme</title>
    	<?php wp_head(); ?>
</head>
```
4. Сразу после тега `<body>` указываем `<?php wp_body_open(); ?>`, и затем следует `<header>` из нашей статической верстки.
Что будет, если вы забудете удалить header из `index.php`? Ну, будет два header-a :)

### footer
5. С футером всё аналогично. Переносим тег `<footer>` и его содержимое в файл `footer.php`. <br>На месте отсутствующего футера в файле `index.php` пишем `<?php get_footer(); ?>`. <br>В файле `footer.php` в самом начале перед кодом футера указываем: `<?php wp_footer(); ?>`.

### Подключаем стили и скрипты
6. Настала очередь файла `functions.php`. Нам понадобится реализовать свою функцию `function add_scripts_and_styles() {...}`, в которой будут подключаться наши стили и js-скрипты. У меня скрипты написаны на jQuery, поэтому его тоже необходио будет подключить и указать в зависимостях. Итак, каркас файла выглядит так:
```
<?php
	function add_scripts_and_styles() {
		...
	}
	add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
?>
```
Полезная ссылка: [wp_deregister_script](https://wp-kama.ru/function/wp_deregister_script)
7. Теперь будем писать функцию `add_scripts_and_styles()`. Подключаем jQuery<br>
Удаляем базовую регистрацию jQuery скрипта
```
wp_deregister_script( 'jquery' );
```
Подключаем jQuery, который используется в нашем проекте с помощью функции `wp_register_script()`.<br>
Аргумент 1. Название модуля 'jquery'<br>
Аргумент 2. Путь - указываем динамический + статический<br>
Аргумент 3. Зависимости (в данном случае их нет  - false)<br>
```
	wp_register_script( 'jquery', get_template_directory_uri( ) . 'assets/js/jquery.min.js', false,  null, true);
```
Наконец подключаем наш jquery скрипт и можно удалить его подключение в index.php
```
	wp_enqueue_script( 'jquery' );
```
8. Подключаем скрипт с анимациями и указываем в зависимостях iQuery  и можно удаляем его подключение в index.php
```
	wp_register_script( 'main', get_template_directory_uri( ) . 'assets/js/main.js', array('jquery'),  null, true);
```
9. Подключаем стили. Удаляем подключение стилей в `<head>` файла `index.php`
```
	wp_enqueue_style('normalize', get_template_directory_uri(  ) . 'assets/css/normalize.css');
	wp_enqueue_style('style', get_stylesheet_uri(  ), array('normalize'));
```
10. Итоговый вид файла `functions.php`
```
<?php
    function add_scripts_and_styles() {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', get_template_directory_uri( ) . 'assets/js/jquery.min.js', false,  null, true);
        wp_enqueue_script( 'jquery' );
        wp_register_script( 'main', get_template_directory_uri( ) . 'assets/js/main.js', array('jquery'),  null, true);
        wp_enqueue_style('normalize', get_template_directory_uri(  ) . 'assets/css/normalize.css');
        wp_enqueue_style('style', get_stylesheet_uri(  ), array('normalize'));
    }
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
?>
```

**README не завершен**


