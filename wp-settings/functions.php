<?php
    function add_scripts_and_styles() {
        //подключаем js скрипты
        wp_deregister_script( 'jquery' ); // подгружаем стандартный jquery
        //  подгружаем наш jquery
        // 1. Название модуля
        // 2. Путь: динамический + статичесий
        // 3. Зависимости (сейчас false, наш скрипт ни от чего не зависит)
        // 4. Версия null 
        // 5. true - тег перед закрывающим тегом body подключен
        wp_register_script( 'jquery', get_template_directory_uri( ) . 'assets/js/jquery.min.js', false,  null, true);
        // наконец подключаем наш jquery скрипт и можно удалить его в index.html
        wp_enqueue_script( 'jquery' );
        wp_register_script( 'main', get_template_directory_uri( ) . 'assets/js/main.js', array('jquery'),  null, true);

        // Подключаем стили
        wp_enqueue_style('normalize', get_template_directory_uri(  ) . 'assets/css/normalize.css');
        wp_enqueue_style('style', get_stylesheet_uri(  ), array('normalize'));

    }
    add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
?>