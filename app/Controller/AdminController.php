<?php

declare(strict_types=1);

namespace App\Controller;

use Hyperf\Di\Annotation\Inject;
use Qbhy\HyperfAuth\AuthManager;

class AdminController extends AbstractController
{
    /**
     * @Inject
     * @var AuthManager
     */
    protected $auth;

    public function index()
    {


    }

    public function login()
    {
        $validator = $this->validation->make(
            $this->request->all(),
            [
                'username' => 'required|string',
                'password' => 'required|string',
            ],
        );
        if ($validator->fails())
        {
            return $this->fail($validator->errors()->first());
        }
        $status = $this->auth->guard('jwt')->login
    }
}