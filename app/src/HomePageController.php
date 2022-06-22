<?php

namespace SilverStripe\Lessons;

use PageController;    
// use SilverStripe\ORM\DataObject;

class HomePageController extends PageController 
{
    public function LatestArticles($count = 2) 
  { 
    return ArticlePage::get()
               ->sort('Created', 'DESC')
               ->limit($count);
  } 
}