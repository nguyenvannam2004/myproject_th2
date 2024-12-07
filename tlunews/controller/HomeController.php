<?php

require_once APP_ROOT.'/tlunews/service/NewsService.php';

class HomeController
{
    public function index()
    {
        $NewsSer = new NewService();
        $news = $NewsSer->getallNews();
        include APP_ROOT.'/tlunews/views/home/index.php';
    }
}