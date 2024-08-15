<?php

return [
    'notices' => [
        'created' => 'Se ha creado exitosamente un nuevo nest, :name.',
        'deleted' => 'Se eliminó exitosamente el nest solicitado del Panel.',
        'updated' => 'Se actualizaron con éxito las opciones de configuración del nest.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importó con éxito este huevo y sus variables asociadas.',
            'updated_via_import' => 'This Egg has been updated using the file provided.',
            'deleted' => 'Successfully deleted the requested egg from the Panel.',
            'updated' => 'Egg configuration has been updated successfully.',
            'script_updated' => 'Egg install script has been updated and will run whenever servers are installed.',
            'egg_created' => 'A new egg was laid successfully. You will need to restart any running daemons to apply this new egg.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'The variable ":variable" has been deleted and will no longer be available to servers once rebuilt.',
            'variable_updated' => 'The variable ":variable" has been updated. You will need to rebuild any servers using this variable in order to apply changes.',
            'variable_created' => 'New variable has successfully been created and assigned to this egg.',
        ],
    ],
];
