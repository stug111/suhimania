<?php

add_action('customize_register', function($customizer) {
    // Настройки сайта
    $customizer->add_section(
        'settings-site', array(
            'title' => 'Настройки сайта',
            'description' => 'Контактная информация на сайте',
            'priority' => 11,
        )
    );

    $customizer->add_setting(
        'time_work_from', array('default' => '')
    );
    $customizer->add_control(
        'time_work_from',
        array(
            'label' => 'Время работы (будни)',
            'section' => 'settings-site',
            'type' => 'text'
        )
    );

    $customizer->add_setting(
        'time_work_to', array('default' => '')
    );
    $customizer->add_control(
        'time_work_to',
        array(
            'label' => 'Время работы (выходные)',
            'section' => 'settings-site',
            'type' => 'text'
        )
    );

    $customizer->add_setting(
        'phone_1', array('default' => '')
    );
    $customizer->add_control(
        'phone_1',
        array(
            'label' => 'Телефон 1',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => 'Введите номер телефона'
        )
    );

    $customizer->add_setting(
        'phone_2', array('default' => '')
    );
    $customizer->add_control(
        'phone_2',
        array(
            'label' => 'Телефон 1',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => 'Введите номер телефона'
        )
    );

    $customizer->add_setting(
        'app_store', array('default' => '')
    );
    $customizer->add_control(
        'app_store',
        array(
            'label' => 'Ссылка на приложение в App Store',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => ''
        )
    );

    $customizer->add_setting(
        'google_play', array('default' => '')
    );
    $customizer->add_control(
        'google_play',
        array(
            'label' => 'Ссылка на приложение в Google Play',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => ''
        )
    );

    $customizer->add_setting(
        'vk', array('default' => '')
    );
    $customizer->add_control(
        'vk',
        array(
            'label' => 'Ссылка на Вконтакте',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => ''
        )
    );

    $customizer->add_setting(
        'insta', array('default' => '')
    );
    $customizer->add_control(
        'insta',
        array(
            'label' => 'Ссылка на Instagram',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => ''
        )
    );

    $customizer->add_setting(
        'fb', array('default' => '')
    );
    $customizer->add_control(
        'fb',
        array(
            'label' => 'Ссылка на Facebook',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => ''
        )
    );

    $customizer->add_setting(
        'ok', array('default' => '')
    );
    $customizer->add_control(
        'ok',
        array(
            'label' => 'Ссылка на Одноклассники',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => ''
        )
    );

    $customizer->add_setting(
        'popup_slider', array('default' => '')
    );
    $customizer->add_control(
        'popup_slider',
        array(
            'label' => 'ID блока для всплывающего окна',
            'section' => 'settings-site',
            'type' => 'text',
            'description' => ''
        )
    );

});
