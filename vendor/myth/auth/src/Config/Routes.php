<?php

/*
 * Myth:Auth routes file.
 */
$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], function ($routes) {
    // Login/out
    $routes->get('login', 'AuthController::login', ['as' => 'login']);
    $routes->post('login', 'AuthController::attemptLogin');
    $routes->get('loginAdmin', 'AuthController::loginAdmin', ['as' => 'loginAdmin']);
    $routes->post('loginAdmin', 'AuthController::attemptloginAdmin');
    $routes->get('loginGuru', 'AuthController::loginGuru', ['as' => 'loginGuru']);
    $routes->post('loginGuru', 'AuthController::attemptloginGuru');
    $routes->post('login', 'AuthController::attemptLogin');
    $routes->get('logout', 'AuthController::logout');

    // Registration
    $routes->get('register', 'AuthController::register', ['as' => 'register']);
    $routes->post('register', 'AuthController::attemptRegister');
    $routes->get('registerGuru', 'AuthController::registerGuru', ['as' => 'registerGuru']);
    $routes->post('registerGuru', 'AuthController::attemptRegisterGuru');
    $routes->get('registerAdmin', 'AuthController::registerAdmin', ['as' => 'registerAdmin']);
    $routes->post('registerAdmin', 'AuthController::attemptRegisterAdmin');

    // Activation
    $routes->get('activate-account', 'AuthController::activateAccount', ['as' => 'activate-account']);
    $routes->get('resend-activate-account', 'AuthController::resendActivateAccount', ['as' => 'resend-activate-account']);

    // Forgot/Resets
    $routes->get('forgot', 'AuthController::forgotPassword', ['as' => 'forgot']);
    $routes->post('forgot', 'AuthController::attemptForgot');
    $routes->get('reset-password', 'AuthController::resetPassword', ['as' => 'reset-password']);
    $routes->post('reset-password', 'AuthController::attemptReset');
});
