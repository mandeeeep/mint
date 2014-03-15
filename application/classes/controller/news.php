<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller {

    public function action_index() {
        URL::redirect();
    }

    public function action_get_featured_news() {
        $featured_news = array(
            array('title' => 'Pertol price hype', 'author' => 'mrig', 'posted_on' => '2012=11-1', 'content' => 'Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum 
            pellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante. 
            Nunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique. 
            Morbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus 
            a pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.'),
            array('title' => 'Pertol price hype', 'author' => 'mrig', 'posted_on' => '2012=10-19', 'content' => 'Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum 
            pellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante. 
            Nunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique. 
            Morbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus 
            a pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.'),
            array('title' => 'Pertol price hype', 'author' => 'mrig', 'posted_on' => '2012=10-12', 'content' => 'Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum 
            pellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante. 
            Nunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique. 
            Morbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus 
            a pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.'),
        );
        $this->request->response = View::factory('news/featured')
                ->set('username', 'Test User')
                ->set('featured', $featured_news);
    }
    public function action_get_full_news() {
        $article = 
            array('title' => 'Pertol price hype', 'author' => 'mrig', 'posted_on' => '2012=11-1', 'content' => 'Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum 
            pellentesque, ante sapien varius turpis, eu nonummy nunc urna scelerisque ante. 
            Nunc sed leo at dolor pharetra facilisis. Sed sed lectus at justo dapibus tristique. 
            Morbi molestie pulvinar elit. Donec dictum nibh nec est. Aliquam sagittis, lacus 
            a pharetra tempor, enim justo tempor nisi, at aliquet nulla metus sed augue.');
        $this->request->response = View::factory('news/view')
                ->set('username', 'Test User')
                ->set('article', $article);
    }
    
    public function action_get_home_headlines(){
        $categories = array(array(1,'Politics'),array(2,'Sports'),array(3,'Dharan Special'));
        foreach($categories as $category){
            $this->action_get_headlines($category);
        }
    }
    
    public function action_get_headlines($category) {
        $article1 = array(
            array('id'=>1,'title' => 'Pertol price hype'),
            array('id'=>2,'title' => 'PM too flexible to hometown'),
            array('id'=>3,'title' => 'Nomore Mr. popular, blag flag Shown'),
                );
        $article2 = array(
            array('id'=>4,'title' => 'Nepal score 1-0 at 11th hour'),
            array('id'=>5,'title' => 'Cricket Audience violence repeated'),
            array('id'=>6,'title' => 'New swimming pool inagurated'),
                );
        $article3 = array(
            array('id'=>7,'title' => 'This winter exceeds past records'),
            array('id'=>8,'title' => 'Dharan Sports Arena on construction'),
            array('id'=>9,'title' => 'Eveteasing, an issue that cant be neglected'),
                );
        $article = 'article'.$category[0];
        $this->request->response .= View::factory('news/headlines')
                ->set('category_name', $category[1])
                ->set('headlines', $$article);
    }

}