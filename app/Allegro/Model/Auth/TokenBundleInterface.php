<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:02
 */

namespace App\Allegro\Model\Auth;


use DateTime;
use DateTimeInterface;
use Lcobucci\JWT\Token;

interface TokenBundleInterface
{
    public function getAccessToken(): Token;

    public function getRefreshToken(): ?Token;

    public function getUserId(): ?string;

    public function getAccessExpirationTime(): DateTimeInterface;

    public function getRefreshExpirationTime(): ?DateTimeInterface;

    public function getGrantType(): ?string;

    public function getScope(): ?array;
}
