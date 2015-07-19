<?php

class RenderHtml implements RenderInterface
{
    public function render($text) {
        return "<b>{$text}</b>";
    }
}

?>