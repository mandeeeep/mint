<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {
    #bottleneck for me - wish i could setttle this limitation of one layout per controller
    public $template = 'default';
    
    public function action_index() {
        $content = View::factory('hi');
        $request = Request::factory('news/get_home_headlines');
        $request->execute();
        $midbar = $request->response;
        $request = Request::factory('news/get_featured_news');
        $request->execute();
        $sidebar = $request->response;
        $content->randum = rand(1, 10);
        $this->template->midbar = $midbar;
        $this->template->sidebar = $sidebar;
        $this->template->content = $content;
    }

}

// End Welcome
