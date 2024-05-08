<?php

class SubscriptionController
{

    private $model = null;
    private $view = null;

    public function __construct($subscriptionModel, $subscriptionView)
    {
        $this->model = $subscriptionModel;
        $this->view = $subscriptionView;
    }

    public function getAll()
    {
        $all = $this->model->getSubscriptions();
        $this->view->outputSubscriptions($all);
    }
}
