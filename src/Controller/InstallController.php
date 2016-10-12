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
    private $user;
    private $pass;

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Mcrypt');
    }


    public function index()
    {
        $this->viewBuilder()->layout('ajax');
        $this->setModels();


        if (isset($this->request->query['data'])) {

            $this->host = $this->Mcrypt->decode($this->request->query['data'], $this->getRefererHost());
            $this->code = $this->generateCode($this->host);
            $this->pass = $this->Mcrypt->generatePassword();

            if ($this->getRefererHost() == $this->host) {

                if ($this->installStore()) {
                    echo $this->code;
                } else {
                    echo 'Install ERROR';
                }

            }
        }
    }

    private function installStore()
    {
        $entity = $this->Users->newEntity();

        $entity = $this->Users->patchEntity($entity, $this->prepareData());
        if ($this->Users->save($entity)) {
            $this->Flash->success(__('The user settings has been saved.'));
            return true;
        } else {
            $this->Flash->error(__('The user setting could not be saved. Please, try again.'));
            return false;
        }
    }

    private function prepareData()
    {
        $record = [];
        $record['host'] = $this->host;
        $record['code'] = $this->code;
        $record['creaqted'] = date('Y-m-d H:i:s');
        $record['status'] = 1;


    }


    private function setModels()
    {
        $this->loadModel('Delivery.Users');
    }

}

?>