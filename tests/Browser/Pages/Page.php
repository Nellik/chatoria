<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Page as BasePage;

abstract class Page extends BasePage
{
    /**
     * Get the global element shortcuts for the site.
     *
     * @return array
     */
    public static function siteElements()
    {
        return [
            '@chatMessages' => '.chat__messages',
            '@firstChatMessages' => '.chat__messages .chat__message:first-child',
            '@ownMessages' => '.chat__message--own',
            '@onlineList' => '.users',
        ];
    }
}
