<?php
namespace PoP\TranslationWP\ContractImplementations;

class TranslationAPI implements \PoP\Translation\Contracts\TranslationAPIInterface
{
    public function __($text, $domain = 'default')
    {
        return \__($text, $domain);
    }
}
