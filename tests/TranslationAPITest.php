<?php
declare(strict_types=1);
namespace PoP\TranslationWP;

use PoP\Translation\Facades\TranslationAPI;

class TranslationAPITestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that applyFilter returns $value
     */
    public function testTranslate(): void
    {
        $translationapi = TranslationAPI::getInstance();
    }
}
