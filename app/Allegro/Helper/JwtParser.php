<?php

namespace App\Allegro\Helper;

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Signer\Blake2b;
use Lcobucci\JWT\Signer\Key\InMemory;

class JwtParser
{
    private static $configuration = null;

    public static function get(): Parser
    {
        if (null === self::$configuration) {
            self::$configuration = Configuration::forSymmetricSigner(new Blake2b(), InMemory::base64Encoded('MpQd6dDPiqnzFSWmpUfLy4+Rdls90Ca4C8e0QD0IxqY='));
        }

        return self::$configuration->parser();
    }
}
