<?php

namespace Difra\Fontawesome5;

use Difra\Envi\Action;
use Difra\Events\Event;

/**
 * Class Plugin
 * @package Difra\Plugins\Fontawesome5
 */
class Plugin extends \Difra\Plugin
{
    /**
     * @inheritdoc
     */
    protected function init()
    {
        \Difra\Events\System::getInstance(Event::EVENT_RENDER_INIT)->registerHandler([static::class, 'addHTML']);
    }

    public static function addHTML(Event $event)
    {
        $html = Action::getController()->html;
        $html->getHead()->addStylesheet('/fontawesome/css/fontawesome.css');
        $html->getHead()->addStylesheet('/fontawesome/css/solid.css');
    }
}

