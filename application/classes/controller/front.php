<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Front extends Controller_Template {
    public $template = 'content';
 
    public function before() {
        parent::before();
        View::set_global('site_name', 'Egotist Beta');
        $this->template->content = '';
        $this->template->styles = array();
        $this->template->scripts = array('jquery.js');
    }

}