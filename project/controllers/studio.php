<?php
use \neTpyceB\TMCms\Routing\Controller;

defined('INC') or exit;

class StudioController extends Controller {
    public static function getComponents() {
        return array(
            'title',
            'text' => array(
                'type' => 'textarea',
                'edit' => 'wysiwyg'
            )
        );
    }

    public function index() {

    }
}