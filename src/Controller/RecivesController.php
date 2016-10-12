<?php
/**
 * Created by 21w.pl
 * User: Sylwester Kowal
 * Date: 2016-10-05
 * Time: 20:57
 */

namespace Delivery\Controller;


class RecivesController extends DeliveryAppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Mcrypt');
    }

    public function index()
    {
        $this->viewBuilder()->layout('Delivery.default');


        if (isset($this->request->query['data'])) {

            $data_order = $this->Mcrypt->decode($this->request->query['data'], $this->getRefererHost());
            if ($data_order) {
                #TODO Przygotować wybór kurierów
                if ($this->getRefererHost() == $data_order['HO']) {

                    $this->request->session()->write('Recives.data', $data_order);
                    $this->request->session()->write('Recives.CryptData', $this->request->query['data']);

                } else {
                    $this->Flash->error(__('Register in delivery.21order.com'));
                    $this->redirect(['controller' => 'Register', 'action' => 'index', $this->getRefererHost()]);
                }
            } else {
                $this->Flash->error(__('Register in delivery.21order.com'));
                $this->redirect(['controller' => 'Register', 'action' => 'index']);
            }
        }
    }


}

?>