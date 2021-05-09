<?php

use Phalcon\Mvc\Controller;

class EnterController extends Controller
{
    /**
     * @throws \Phalcon\Incubator\MongoDB\Mvc\Collection\Exception
     */
    public function getAction()
    {
        if($this->request->isGet() == true)
        {
            $currentDate = date('d.m.Y h:m');
            $enterCollection = new EnterCollection();
            $enterCollection->date = $currentDate;
            $enterCollection->save();
            $this->response->setStatusCode(200, 'OK');
            $this->response->send();
        } else {
            $this->response->setStatusCode(404, 'Not Found');
        }
    }
}
