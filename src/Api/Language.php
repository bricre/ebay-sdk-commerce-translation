<?php

namespace Ebay\Commerce\Translation\Api;

use Ebay\Commerce\Translation\Model\TranslateRequest;
use Ebay\Commerce\Translation\Model\TranslateResponse;

class Language extends AbstractAPI
{
    /**
     * This method translates listing title and listing description text from one
     * language into another. For a full list of supported language translations, see
     * the table in the API Overview page.
     *
     * @param TranslateRequest $Model
     *
     * @return TranslateResponse
     */
    public function translate(TranslateRequest $Model): TranslateResponse
    {
        return $this->request(
        'translate',
        'POST',
        'translate',
        $Model->getArrayCopy(),
        [],
        []
        );
    }
}
