<?php

return [
    'email' => [
        'title' => 'Actualizar tu correo electrónico',
        'updated' => 'Su dirección de correo electrónico ha sido actualizada.',
    ],
    'password' => [
        'title' => 'Cambia tu contraseña',
        'requirements' => 'Su nueva contraseña debe tener al menos 8 caracteres.',
        'updated' => 'Tu contraseña ha sido actualizada.',
    ],
    'two_factor' => [
        'button' => 'Configure 2-Factor Authentication',
        'disabled' => 'La autenticación de dos factores ha sido deshabilitada en su cuenta. Ya no se le pedirá que proporcione un token al iniciar sesión.',
        'enabled' => '¡Se ha habilitado la autenticación de dos factores en su cuenta! A partir de ahora, al iniciar sesión se te pedirá que proporciones el código generado por tu dispositivo.',
        'invalid' => 'The token provided was invalid.',
        'setup' => [
            'title' => 'Configurar la autenticación de dos factores',
            'help' => 'Can\'t scan the code? Enter the code below into your application:',
            'field' => 'Enter token',
        ],
        'disable' => [
            'title' => 'Deshabilitar la autenticación de dos factores.',
            'field' => 'Enter token',
        ],
    ],
];
