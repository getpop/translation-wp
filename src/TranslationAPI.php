<?php
namespace PoP\TranslationWP;
use function __;

class TranslationAPI implements \PoP\Translation\TranslationAPIInterface
{
    public function __($text, $domain = 'default'): string
    {
        return __($text, $domain);
    }
}
