<?php

return [
    // List of namespaces that include your enums.
    'namespaces' => [
        'App\Enums\*',
    ],

    // Name of the disk that's the location you'd like the js files to be output to.
    // Be sure to add this disk in your config/filesystems.php
    'output_disk' => 'enum-js',

    // A list of transforms for the js output file path.
    'output_transform' => [
        'App\\Enums\\' => '',
    ],

    // Whether the output files should end with .ts.
    'ts_output_files' => false,
];
