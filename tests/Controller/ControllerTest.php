<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ControllerTest extends WebTestCase
{
    public function testEndpointDoesNotReturnHttp400DueToSideEffectInCidrConstraint(): void
    {
        static::createClient()->request(
            method: 'POST',
            uri: '/',
            server: ['CONTENT_TYPE' => 'application/json'],
            content: '{"items":["1.2.3.4/28", "::1/64"]}'
        );

        $this->assertResponseIsSuccessful();
    }
}
