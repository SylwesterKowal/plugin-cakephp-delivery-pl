<?php
/**
 * Created by 21w.pl
 * User: Sylwester Kowal
 * Date: 2016-10-07
 * Time: 00:26
 */


namespace Delivery\Controller;


class InstallController extends DeliveryAppController
{
    private $host;
    private $code;

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Delivery.Mcrypt');
    }


    public function index()
    {
        $this->viewBuilder()->layout('ajax');


        if (isset($this->request->query['data'])) {

            $this->host = $this->Mcrypt->decode($this->request->query['data'], $this->getRefererHost());
            $this->code = $this->generateCode($this->host);


            if ($this->getRefererHost() == $this->host) {
                #TODO Add to DB

                echo $this->code;
            }
        }
    }


}

?>