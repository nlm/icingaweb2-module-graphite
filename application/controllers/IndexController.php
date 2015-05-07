<?php

use Icinga\Web\Controller\ActionController;

class Graphite_IndexController extends ActionController
{
    public function indexAction()
    {
        $this->view->url = sprintf(
            '%s&target=%s.%s&source=0&width=800&height=700&colorList=049BAF&lineMode=connected&connectedLimit=%s',
            $this->getParam('base_url'),
            $this->getParam('metric_prefix', 'icinga'),
            $this->getParam('target'),
            $this->getParam('connect_limit', 10)
        );
    }
}
