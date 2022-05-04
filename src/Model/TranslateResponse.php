<?php

namespace Ebay\Commerce\Translation\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This is the base type of the translate method response payload.
 */
class TranslateResponse extends AbstractModel
{
    /**
     * The enumeration value indicates the language of the input text. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $from = null;

    /**
     * The enumeration value indicates the language of the translated text. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $to = null;

    /**
     * An array showing the input and translated text. Only one input string can be
     * translated at this time. Support for multiple continuous text strings is
     * expected in the future.
     *
     * @var \Ebay\Commerce\Translation\Model\Translation[]
     */
    public $translations = null;
}
