<?php

return [
    'daemon_connection_failed' => 'Hubo una excepción al intentar comunicarse con el daemon, resultando en un código de respuesta HTTP/:code. Esta excepción ha sido registrada.',
    'node' => [
        'servers_attached' => 'Un nodo no debe tener servidores vinculados para ser eliminado.',
        'daemon_off_config_updated' => 'La configuración del daemon <strong>ha sido actualizada</strong>, sin embargo, se encontró un error al intentar actualizar automáticamente el archivo de configuración en el Daemon. Necesitarás actualizar manualmente el archivo de configuración (config.yml) para que el daemon aplique estos cambios.',
    ],
    'allocations' => [
        'server_using' => 'Un servidor está actualmente asignado a esta asignación. Una asignación solo puede eliminarse si no hay un servidor asignado.',
        'too_many_ports' => 'No se admite agregar más de 1000 puertos en un solo rango a la vez.',
        'invalid_mapping' => 'El mapeo proporcionado para :port no es válido y no pudo ser procesado.',
        'cidr_out_of_range' => 'La notación CIDR solo permite máscaras entre /25 y /32.',
        'port_out_of_range' => 'Los puertos en una asignación deben ser mayores que 1024 y menores o iguales a 65535.',
    ],
    'nest' => [
        'delete_has_servers' => 'Un Nest con servidores activos vinculados no puede ser eliminado del Panel.',
        'egg' => [
            'delete_has_servers' => 'Un Huevo con servidores activos vinculados no puede ser eliminado del Panel.',
            'invalid_copy_id' => 'El Huevo seleccionado para copiar un script no existe o está copiando un script en sí mismo.',
            'must_be_child' => 'La directiva "Copiar Configuraciones Desde" para este Huevo debe ser una opción secundaria para el Nest seleccionado.',
            'has_children' => 'Este Huevo es padre de uno o más otros Huevos. Por favor, elimina esos Huevos antes de eliminar este Huevo.',
        ],
        'variables' => [
            'env_not_unique' => 'La variable de entorno :name debe ser única para este Huevo.',
            'reserved_name' => 'La variable de entorno :name está protegida y no puede asignarse a una variable.',
            'bad_validation_rule' => 'La regla de validación ":rule" no es una regla válida para esta aplicación.',
        ],
        'importer' => [
            'json_error' => 'Hubo un error al intentar analizar el archivo JSON: :error.',
            'file_error' => 'El archivo JSON proporcionado no era válido.',
            'invalid_json_provided' => 'El archivo JSON proporcionado no está en un formato que pueda ser reconocido.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'No se permite editar tu propia cuenta de subusuario.',
        'user_is_owner' => 'No puedes agregar al propietario del servidor como subusuario para este servidor.',
        'subuser_exists' => 'Un usuario con esa dirección de correo electrónico ya está asignado como subusuario para este servidor.',
    ],
    'databases' => [
        'delete_has_databases' => 'No se puede eliminar un servidor de host de base de datos que tiene bases de datos activas vinculadas a él.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'El tiempo de intervalo máximo para una tarea encadenada es de 15 minutos.',
    ],
    'locations' => [
        'has_nodes' => 'No se puede eliminar una ubicación que tiene nodos activos vinculados a ella.',
    ],
    'users' => [
        'node_revocation_failed' => 'No se pudo revocar las claves en <a href=":link">Nodo #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No se encontraron nodos que cumplan con los requisitos especificados para la implementación automática.',
        'no_viable_allocations' => 'No se encontraron asignaciones que cumplan con los requisitos para la implementación automática.',
    ],
    'api' => [
        'resource_not_found' => 'El recurso solicitado no existe en este servidor.',
    ],
];
