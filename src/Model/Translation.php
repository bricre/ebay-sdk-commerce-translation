<?php

namespace Ebay\Commerce\Translation\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the translations array, which shows the original text
 * supplied by the user in the request payload, and the text translated by eBay.
 * Only one input string can be translated at this time. Support for multiple
 * continuous text strings is expected in the future.
 */
class Translation extends AbstractModel
{
    /**
     * The original text, in the language specified in the from field, that was input
     * into the text field in the request.
     *
     * @var string
     */
    public $originalText = null;

    /**
     * The translation of the original text into the language specified in the to
     * field.
     *
     * @var string
     */
    public $translatedText = null;
}
