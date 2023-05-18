<?php


namespace App\Allegro\Model\Request\TaxSettings;


use GuzzleHttp\Psr7\Request;
use App\Allegro\Constants\ContentType;
use App\Allegro\Model\Request\RequestTrait;

class GetTaxSettingsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $categoryId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/tax-settings', ['category.id' => $categoryId]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
