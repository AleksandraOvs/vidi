<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
        
Container::make('post_meta', 'Контент для главной страницы')
    ->show_on_page('main-page')
   
    ->add_fields( array(
        Field::make('text', 'crb_main_header', 'Main header')
        ->set_width(20),

        Field::make('complex', 'crb_header_list')
            ->set_width(20)
            ->set_classes( 'complex-column' )
            ->add_fields( array (
                Field::make('text', 'header_list_item', 'Header list item')
            )),

        Field::make('text', 'crb_button_text', 'Button text' )
        ->set_width(15),

        Field::make('text', 'crb_button_link', 'Button link' )
        ->set_width(15),
        ))
        
    ->add_fields( array (    
        Field::make( 'media_gallery', 'crb_hero_video', 'Видео для первого экрана' )
        ->set_type( 'video' )
        ->set_width(10),
    ))

    ->add_fields( array(
        Field::make( 'complex', 'counts')
        ->set_classes('block-counts')
        ->add_fields (array (
           Field::make('image', 'crb_counts_icon', 'Count icon')
           ->set_width(33),
           Field::make('text', 'crb_counts_number', 'Number')
           ->set_width(33),
           Field::make('text', 'crb_counts_description', 'Description')
           ->set_width(33)
        ))
    ))

    ->add_fields( array(
        Field::make( 'complex', 'video_types')
        ->add_fields (array (
            Field::make('image', 'crb_vtypes_image', 'Video Types Image')
            ->set_width(25),
            Field::make('image', 'crb_vtypes_gif', 'Video Types Gif')
            ->set_width(25),
            Field::make('text', 'crb_vtypes_subtitle', 'Video Types Subtitle')
            ->set_width(25),
            Field::make('text', 'crb_vtypes_text', 'Video Types Text')
            ->set_width(25)
            ))
        ))

    ->add_fields( array(
        Field::make( 'complex', 'we_work')
        ->add_fields (array (
            Field::make('image', 'crb_we_work_image', 'We Work Image')
            ->set_width(25),
            Field::make('text', 'crb_we_work_count', 'We Work Count')
            ->set_width(25),
            Field::make('text', 'crb_we_work_subtitle', 'We Work Subtitle')
            ->set_width(25),
            Field::make('text', 'crb_we_work_text', 'We Work Text')
            ->set_width(25)
            ))
        ))
    
    ->add_fields( array(
        Field::make( 'complex', 'cases')
        ->add_fields (array (
            Field::make('image', 'crb_cases_image', 'We Work Image')
            ->set_width(33),
            Field::make('text', 'crb_cases_subtitle', 'We Work Subtitle')
            ->set_width(33),
            Field::make('text', 'crb_cases_text', 'We Work Text')
            ->set_width(33)
            ))
        ));
    
    Container::make('post_meta', 'Добавить в портфолио')
           ->show_on_post_type('Portfolio')
           ->add_fields (array (
               Field::make('text', 'crb_portfolio_link', 'Youtube link'),
               Field::make('image', 'crb_portfolio_placeholder', 'Project Placeholder'),
               Field::make('media_gallery', 'crb_portfolio_sources', 'Project Sources')
               -> set_type('video')
           ));
    
    
        
    
    
    