<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $this->ionAuth = new \IonAuth\Libraries\IonAuth(); 
        $data['ionAuth'] = $this->ionAuth;
        return $data;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Non è necessario alcun codice qui
    }
}
