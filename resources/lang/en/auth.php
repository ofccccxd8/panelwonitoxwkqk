<?php

return [
    'sign_in' => 'Iniciar Sesión',
    'go_to_login' => 'Ir a Iniciar sesión',
    'failed' => 'No se pudo encontrar ninguna cuenta que coincida con esas credenciales.',

    'forgot_password' => [
        'label' => 'Has olvidado tu contraseña?',
        'label_help' => 'Enter your account email address to receive instructions on resetting your password.',
        'button' => 'Recover Account',
    ],

    'reset_password' => [
        'button' => 'Reset and Sign In',
    ],

    'two_factor' => [
        'label' => '2-Factor Token',
        'label_help' => 'This account requires a second layer of authentication in order to continue. Please enter the code generated by your device to complete this login.',
        'checkpoint_failed' => 'The two-factor authentication token was invalid.',
    ],

    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'password_requirements' => 'Password must be at least 8 characters in length and should be unique to this site.',
    '2fa_must_be_enabled' => 'The administrator has required that 2-Factor Authentication be enabled for your account in order to use the Panel.',
];
