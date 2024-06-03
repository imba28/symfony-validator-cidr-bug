<?php

namespace App\Controller;


use Symfony\Component\Validator\Constraints as Assert;

final class Dto
{
    /**
     * @var string[]
     */
    #[Assert\All(new Assert\Cidr())]
    public array $items;
}
