<?php

class PaymentController
{

    private $model = null;
    private $view = null;

    public function __construct($paymentModel, $paymentView)
    {
        $this->model = $paymentModel;
        $this->view = $paymentView;
    }

    public function getAll()
    {
        $all = $this->model->getPayments();
        $this->view->outputPayments($all);
    }
}
