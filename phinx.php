<?php

require __DIR__.'/bootstrap/config.php';

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/database/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/database/seeds'
    ],
    'migration_base_class' => '\App\Core\Migration',
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => 'production',
        'production' => $database['phinx'],
    ],
    'version_order' => 'creation'
];