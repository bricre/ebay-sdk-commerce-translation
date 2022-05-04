<?php

namespace Ebay\Commerce\Translation\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This is the base type of the translate method request payload.
 */
class TranslateRequest extends AbstractModel
{
    /**
     * The language of the input text to be translated. Not all LanguageEnum values are
     * supported in this field. For a full list of supported language translations, see
     * the table in the API Overview page. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $from = null;

    /**
     * The input text to translate. For ITEM_DESCRIPTION translations, HTML/CSS markup
     * and links can be included, but will count toward max character limit. Max
     * Length: 1,000 characters for ITEM_TITLE 100,000 characters for ITEM_DESCRIPTION,
     * including markup/tagsMax Occurrence: 1. Only one continuous text string
     * currently supported.
     *
     * @var string[]
     */
    public $text = null;

    /**
     * The target language for the translation of the input text. Not all LanguageEnum
     * values are supported in this field. For a full list of supported language
     * translations, see the table in the API Overview page. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/translation/types/api:LanguageEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $to = null;

    /**
     * Input the listing entity to be translated. Valid Values: ITEM_TITLE and
     * ITEM_DESCRIPTION For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/translation/types/api:TranslationContextEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $translationContext = null;
}
