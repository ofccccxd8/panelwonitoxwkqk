<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Está intentando eliminar la asignación predeterminada para este servidor, pero no hay ninguna asignación alternativa para usar.',
        'marked_as_failed' => 'Este servidor fue marcado como que falló en una instalación anterior. El estado actual no se puede alternar en este estado.',
        'bad_variable' => 'Hubo un error de validación con el :name variable.',
        'daemon_exception' => 'Hubo una excepción al intentar comunicarse con el demonio, lo que generó un error HTTP./:code response code. This exception has been logged. (request id: :request_id)',
        'default_allocation_not_found' => 'The requested default allocation was not found in this server\'s allocations.',
    ],
    'alerts' => [
        'startup_changed' => 'La configuración de inicio para este servidor ha sido actualizada. If this server\'s Se cambió el nest o el egg. Ahora se realizará una reinstalación.',
        'server_deleted' => 'El servidor se ha eliminado exitosamente del sistema.',
        'server_created' => 'El servidor se creó correctamente en el panel. Espere unos minutos para que el demonio instale completamente este servidor.',
        'build_updated' => 'Los detalles de compilación de este servidor se han actualizado. Algunos cambios pueden requerir un reinicio para que surtan efecto.',
        'suspension_toggled' => 'Server suspension status has been changed to :status.',
        'rebuild_on_boot' => 'Se ha marcado que este servidor requiere una reconstrucción del contenedor Docker. Esto sucederá la próxima vez que se inicie el servidor.',
        'install_toggled' => 'El estado de instalación de este servidor ha sido cambiado.',
        'server_reinstalled' => 'This server has been queued for a reinstallation beginning now.',
        'details_updated' => 'Los detalles del servidor se han actualizado correctamente.',
        'docker_image_updated' => 'Se cambió con éxito la imagen predeterminada de Docker para usar en este servidor. Es necesario reiniciar para aplicar este cambio.',
        'node_required' => 'Debe tener al menos un nodo configurado antes de poder agregar un servidor a este panel.',
        'transfer_nodes_required' => 'Debe tener al menos dos nodos configurados antes de poder transferir servidores.',
        'transfer_started' => 'Se ha iniciado la transferencia del servidor.',
        'transfer_not_viable' => 'El nodo que seleccionó no tiene el espacio en disco o la memoria disponibles necesarios para acomodar este servidor.',
    ],
];
