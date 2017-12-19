<?php
namespace app\libraries;
class AssetsManager {
    public static function registerJS($js){
        foreach ($js as $script) {
            echo '<script src="'.URLROOT.'/js/' . $script . '"></script>';
        }
    }

    public static function registerCSS($css){
        foreach ($css as $style) {
            echo '<link rel="stylesheet" href="'.URLROOT.'/css/' . $style.'">';
        }
    }
}