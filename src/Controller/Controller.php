<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Attribute\Route;

#[AsController]
#[Route('/', methods: ['POST'], format: 'json')]
final class Controller
{
    public function __invoke(#[MapRequestPayload] Dto $dto): Response
    {
        return new Response();
    }
}
