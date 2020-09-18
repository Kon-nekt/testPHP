<?php

namespace App\backend\src;

use App\backend\controllers\noteController;
use Datto\JsonRpc\Evaluator as JsonRpcEvaluator;
use Datto\JsonRpc\Exceptions\ArgumentException;
use Datto\JsonRpc\Exceptions\MethodException;

class Evaluator implements JsonRpcEvaluator
{
    public function evaluate($method, $arguments)
    {
        if ($method === 'create') {
            return self::create($arguments);
        }

        throw new MethodException();
    }

    private static function create($arguments)
    {
        list($title, $body) = $arguments;

        if (!is_string($title) || !is_string($body)) {
            throw new ArgumentException();
        }

        return noteController::create($title, $body);
    }
}
