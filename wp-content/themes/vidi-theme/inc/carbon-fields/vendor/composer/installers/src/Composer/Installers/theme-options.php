<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
Container::make('theme_options', 'Настройки темы')
         ->add_fields(array(
	         Field::make('image', 'header_logo', 'Верхний логотип')
                 ->set_width(50),
             Field::make('image', 'footer_logo', 'Нижний логотип')
                 ->set_width(50),
             Field::make('text', 'header_tagline_1', 'Слоган 1')
                 ->set_width(50),
             Field::make('text', 'header_tagline_2', 'Слоган 2')
                 ->set_width(50),
             Field::make('text', 'footer_copyright', 'Копирайт')
                 ->set_width(50),
             Field::make('text', 'videobanner_link', 'Ссылка на видеобаннере')
                 ->set_width(50),
             Field::make('text', 'videobanner_file_link', 'Ссылка на ролик видеобаннера')
                 ->set_width(50),
         ));

// Add second options page under 'Basic Options'
Container::make('theme_options', 'Соцсети')
         ->set_page_parent('Настройки темы')  // title of a top level Theme Options page
         ->add_fields(array(
		Field::make('text', 'facebook_link', 'Facebook'),
        Field::make('text', 'vk_link', 'ВКонтакте'),
        Field::make('text', 'youtube_link', 'YouTube'),
        Field::make('text', 'instagram_link', 'Instagram'),
	));