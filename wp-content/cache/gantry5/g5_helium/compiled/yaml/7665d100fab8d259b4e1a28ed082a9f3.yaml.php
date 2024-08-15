<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'E:\\xampp\\htdocs\\portfolio/wp-content/themes/g5_helium/blueprints/content/single/meta-comments.yaml',
    'modified' => 1723703102,
    'data' => [
        'name' => 'Comments Meta',
        'description' => 'Options for displaying comments meta',
        'type' => 'single',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Comments',
                    'description' => 'Display number of comments.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Comments',
                    'description' => 'Link comment meta to the comments list.',
                    'default' => 0
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Comments Prefix',
                    'description' => 'Display text directly before the comments count.'
                ]
            ]
        ]
    ]
];
