<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Настройки сайта')
        ->set_page_menu_position( 2 )
        ->set_icon ('dashicons-admin-generic')
        
        ->add_tab(__('Footer'), array(
            Field::make('complex', 'footer_contacts', 'Ссылки')
                ->add_fields( array(
                    Field::make('text', 'footer_contact_name', 'Название')
                        ->set_width(20),
                    Field::make('text', 'footer_contact_link', 'Ссылка на контакт')
                        ->set_width(40),
                    Field::make('image', 'footer_contact_image', 'Иконка контакта')
                        ->set_width(40),
                )),
            Field::make('text', 'footer_tel_contact_link', 'Ссылка на телефон')
            ->set_width(50)
            ->help_text('ссылка на телефон вида tel:+700000000'),
            Field::make('text', 'footer_tel_contact', 'Номер телефона')
            ->set_width(50)
            ->help_text('Номер телефона, отображающийся на сайте'),
))
->add_tab(__('Header'), array(
    Field::make('complex', 'contacts', 'Ссылки')
        ->add_fields( array(
            Field::make('text', 'contact_link', 'Ссылка на контакт')
                ->set_width(50),
            Field::make('image', 'contact_image', 'Иконка контакта')
                ->set_width(50)
        )),
))

->add_tab(__('Contact Form'), array(
            Field::make('text', 'contactform_head', 'Contact forms heading'),
            Field::make('text', 'contactform_shortcode', 'Contact forms shortcode')
));
