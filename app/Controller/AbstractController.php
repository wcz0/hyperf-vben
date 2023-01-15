<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Contract\ResponseInterface;
use Hyperf\Validation\Contract\ValidatorFactoryInterface;
use Psr\Container\ContainerInterface;

class AbstractController
{
    #[Inject]
    protected ContainerInterface $container;

    #[Inject]
    protected RequestInterface $request;

    #[Inject]
    protected ResponseInterface $response;

    #[Inject]
    protected ValidatorFactoryInterface $validation;

    public function success($data = [], $message = 'success', $code = 200)
    {
        return $this->response->json([
            'code' => $code,
            'type' => 'success',
            'message' => $message,
            'result' => $data,
        ]);
    }

    public function fail(string $message = 'error',int $code = 400)
    {
        return $this->response->json([
            'code' => $code,
            'type' => 'success',
            'message' => $message,
        ]);
    }
}
