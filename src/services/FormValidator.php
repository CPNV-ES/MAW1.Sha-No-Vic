<?php

namespace App\Services;

use App\Services\Renderer;

class FormValidator
{
    public static function csrfValidator()
    {
        $token = filter_input(INPUT_POST, 'token');
        if (isset($token) && $token == $_SESSION['token']) {
            return true;
        }
        http_response_code(403);
        Renderer::displayError("Maybe you tried to change something you didn't have access to.");
    }
}