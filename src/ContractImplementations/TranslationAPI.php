<?php
namespace PoP\TranslationWP\ContractImplementations;

class TranslationAPI implements \PoP\Translation\Contracts\TranslationAPIInterface
{
    public function __($text, $domain = 'default'): string
    {
        return \__($text, $domain);
    }
}
