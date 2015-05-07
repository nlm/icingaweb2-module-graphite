<?php

use Icinga\Web\Controller\ActionController;

class Graphite_IndexController extends ActionController
{
    public function indexAction()
    {
        $this->view->graph_width = $this->getParam('graph_width');
        $this->view->graph_height = $this->getParam('graph_height');

        $this->view->url = sprintf(
            '%s&target=%s.%s&source=0&width=%d&height=%d&colorList=049BAF&lineMode=connected&connectedLimit=%d',
            $this->getParam('base_url'),
            $this->getParam('metric_prefix'),
            $this->getParam('target'),
            $this->getParam('graph_width'),
            $this->getParam('graph_height'),
            $this->getParam('connect_limit')
        );
    }
}
