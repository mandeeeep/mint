<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contenzo extends Controller_Front {
   public $template = 'blog';
    public function action_index() {
        $request_featured = Request::factory('news/get_featured_news');
        $request_featured->execute();
        $sidebar = $request_featured->response;
        $request_news = Request::factory('news/get_full_news');
        $request_news->execute();
        $content = $request_news->response;
        $this->template->sidebar = $sidebar;
        $this->template->content = $content;
    }

}

// End Welcome
