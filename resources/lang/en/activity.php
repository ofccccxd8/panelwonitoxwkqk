<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Error al iniciar sesión',
        'success' => 'Iniciado sesión',
        'password-reset' => 'Restablecer contraseña',
        'reset-password' => 'Restablecimiento de contraseña solicitado',
        'checkpoint' => 'Se solicita autenticación de dos factores',
        'recovery-token' => 'Token de recuperación de dos factores usado.',
        'token' => 'Reto de dos factores resuelto.',
        'ip-blocked' => 'Solicitud bloqueada de una dirección IP no listada para :identifier',
        'sftp' => [
            'fail' => 'Error de inicio de sesión SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Correo electrónico cambiado. anterior: :old nuevo: :new',
            'password-changed' => 'Contraseña cambiada.',
        ],
        'api-key' => [
            'create' => 'Nueva clave API creada: :identifier',
            'delete' => 'Clave API eliminada: :identifier',
        ],
        'ssh-key' => [
            'create' => 'Clave SSH :fingerprint añadida a la cuenta',
            'delete' => 'Clave SSH :fingerprint eliminada de la cuenta',
        ],
        'two-factor' => [
            'create' => 'Autenticación de dos factores habilitada',
            'delete' => 'Autenticación de dos factores deshabilitada',
        ],
    ],
    'server' => [
        'reinstall' => 'Servidor reinstalado',
        'console' => [
            'command' => 'Ejecutó ":command" en el servidor',
        ],
        'power' => [
            'start' => 'Inició el servidor',
            'stop' => 'Detuvo el servidor',
            'restart' => 'Reinició el servidor',
            'kill' => 'Eliminó el proceso del servidor.',
        ],
        'backup' => [
            'download' => 'Descargó la copia de seguridad :name',
            'delete' => 'Eliminó la copia de seguridad :name',
            'restore' => 'Restauró la copia de seguridad :name (archivos eliminados: :truncate)',
            'restore-complete' => 'Restauración de la copia de seguridad :name completada',
            'restore-failed' => 'Fallo al completar la restauración de la copia de seguridad :name',
            'start' => 'Inició una nueva copia de seguridad :name',
            'complete' => 'Marcó la copia de seguridad :name como completa',
            'fail' => 'Marcó la copia de seguridad :name como fallida',
            'lock' => 'Bloqueó la copia de seguridad :name',
            'unlock' => 'Desbloqueó la copia de seguridad :name',
        ],
        'database' => [
            'create' => 'Creó la nueva base de datos :name',
            'rotate-password' => 'Contraseña rotada para la base de datos :name',
            'delete' => 'Eliminó la base de datos :name',
        ],
        'file' => [
            'compress_one' => 'Comprimió :directory:file',
            'compress_other' => 'Comprimió :count archivos en :directory',
            'read' => 'Vio el contenido de :file',
            'copy' => 'Creó una copia de :file',
            'create-directory' => 'Creó el directorio :directory:name',
            'decompress' => 'Descomprimió :files en :directory',
            'delete_one' => 'Eliminó :directory:files.0',
            'delete_other' => 'Eliminó :count archivos en :directory',
            'download' => 'Descargó :file',
            'pull' => 'Descargó un archivo remoto de :url a :directory',
            'rename_one' => 'Renombró :directory:files.0.from a :directory:files.0.to',
            'rename_other' => 'Renombró :count archivos en :directory',
            'write' => 'Escribió nuevo contenido en :file',
            'upload' => 'Comenzó una carga de archivos',
            'uploaded' => 'Subió :directory:file',
        ],
        'sftp' => [
            'denied' => 'Acceso SFTP bloqueado debido a permisos',
            'create_one' => 'Creó :files.0',
            'create_other' => 'Creó :count nuevos archivos',
            'write_one' => 'Modificó el contenido de :files.0',
            'write_other' => 'Modificó el contenido de :count archivos',
            'delete_one' => 'Eliminó :files.0',
            'delete_other' => 'Eliminó :count archivos',
            'create-directory_one' => 'Creó el directorio :files.0',
            'create-directory_other' => 'Creó :count directorios',
            'rename_one' => 'Renombró :files.0.from a :files.0.to',
            'rename_other' => 'Renombró o movió :count archivos',
        ],
        'allocation' => [
            'create' => 'Añadió :allocation al servidor',
            'notes' => 'Actualizó las notas para :allocation de ":old" a ":new"',
            'primary' => 'Estableció :allocation como la asignación principal del servidor',
            'delete' => 'Eliminó la asignación :allocation',
        ],
        'schedule' => [
            'create' => 'Creó el cronograma :name',
            'update' => 'Actualizó el cronograma :name',
            'execute' => 'Ejecutó manualmente el cronograma :name',
            'delete' => 'Eliminó el cronograma :name',
        ],
        'task' => [
            'create' => 'Creó una nueva tarea de ":action" para el cronograma :name',
            'update' => 'Actualizó la tarea de ":action" para el cronograma :name',
            'delete' => 'Eliminó una tarea para el cronograma :name',
        ],
        'settings' => [
            'rename' => 'Renombró el servidor de :old a :new',
            'description' => 'Cambiaron la descripción del servidor de :old a :new',
        ],
        'startup' => [
            'edit' => 'Cambiaron la variable :variable de ":old" a ":new"',
            'image' => 'Actualizó la imagen de Docker para el servidor de :old a :new',
        ],
        'subuser' => [
            'create' => 'Añadió :email como subusuario',
            'update' => 'Actualizó los permisos del subusuario para :email',
            'delete' => 'Eliminó a :email como subusuario',
        ],
    ],
];
