<?php

namespace app\libraries;
class AssetsManager
{
    public static function registerJS($js)
    {
        foreach ($js as $script) {
            if (strpos($script, 'http') === false) {
                echo '<script src="' . URLROOT . '/js/' . $script . '"></script>';
            } else {
                echo '<script src="' . $script . '"></script>';
            }

        }
    }

    public static function registerCSS($css)
    {
        foreach ($css as $style) {
            if (strpos($style, 'http') === false) {
                echo '<link rel="stylesheet" href="' . URLROOT . '/css/' . $style . '">';
            } else {
                echo '<link rel="stylesheet" href="' . $style . '">';
            }

        }
    }
}