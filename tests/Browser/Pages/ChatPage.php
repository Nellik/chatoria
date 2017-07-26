<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;

class ChatPage extends Page
{
    /**
     * Get the URL for the page.
     *
     * @return string
     */
    public function url()
    {
        return '/chat';
    }

    public function typeMessage(Browser $browser, $body=null)
    {
      $browser->type('@body', $body)->pause(500);
    }

    public function sendMessage(Browser $browser)
    {
      $browser->keys('@body', ['{enter}']);
    }

    /**
     * Assert that the browser is on the page.3
     *
     * @param  Browser  $browser
     * @return void
     */
    public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }

    /**
     * Get the element shortcuts for the page.
     *
     * @return array
     */
    public function elements()
    {
        return [
            '@body' => 'textarea[id="body"]',
        ];
    }
}
