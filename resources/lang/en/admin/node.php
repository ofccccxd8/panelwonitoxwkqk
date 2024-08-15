<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'El FQDN o la dirección IP proporcionada no se resuelve en una dirección IP válida.',
        'fqdn_required_for_ssl' => 'Se requiere un nombre de dominio completo que se resuelva en una dirección IP pública para poder utilizar SSL para este nodo.',
    ],
    'notices' => [
        'allocations_added' => 'Las asignaciones se han agregado correctamente a este nodo.',
        'node_deleted' => 'El nodo se ha eliminado correctamente del panel.',
        'location_required' => 'Debe tener al menos una ubicación configurada antes de poder agregar un nodo a este panel.',
        'node_created' => 'Nuevo nodo creado correctamente. Puede configurar automáticamente el demonio en esta máquina visitando el\'Configuration\' tab. <strong>Before you can add any servers you must first allocate at least one IP address and port.</strong>',
        'node_updated' => 'La información del nodo ha sido actualizada. Si se cambió alguna configuración del demonio, deberá reiniciarlo para que esos cambios surtan efecto.',
        'unallocated_deleted' => 'Deleted all un-allocated ports for <code>:ip</code>.',
    ],
];
