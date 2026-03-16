<?php

if (! function_exists('makeResponseArray')) {
    function makeResponseArray(bool $success, mixed $data, ?string $message, ?array $errors): array
    {
        return [
            'success' => $success,
            'data' => $data,
            'message' => $message,
            'errors' => $errors,
        ];
    }
}

