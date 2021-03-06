<?php

return [
    'mode'          => [
        'label'        => 'Mode',
        'instructions' => 'What kind of input would you like to display?',
        'option'       => [
            'dropdown' => 'Dropdown',
            'radio'    => 'Radio Buttons'
        ]
    ],
    'options'       => [
        'label'        => 'Options',
        'instructions' => 'Enter options below in a <strong>key: Value</strong> or <strong>Value</strong> only format. Enter each option on a new line.',
        'placeholder'  => "foo: Foo\nbar: Bar\nBaz"
    ],
    'default_value' => [
        'label'        => 'Default Value',
        'instructions' => 'Enter the default value if any.'
    ]
];
