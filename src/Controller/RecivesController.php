<?php
/**
 * Created by 21w.pl
 * User: Sylwester Kowal
 * Date: 2016-10-05
 * Time: 20:57
 */

namespace Delivery\Controller;

use Cake\Network\Request;

class RecivesController extends DeliveryAppController
{
    public function index()
    {
        $this->viewBuilder()->layout('Delivery.default');

        $key = md5('45506235512298206672313471444118', true);
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);

        if (isset($this->request->query['data'])) {

            $data = $this->request->query['data'];
            $ciphertext_dec = base64_decode($data);
            $iv_dec = substr($ciphertext_dec, 0, $iv_size);
            $ciphertext_dec = substr($ciphertext_dec, $iv_size);
            $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);

            $data_order = unserialize($plaintext_dec);

            $this->set('data_order',$data_order);

        }
    }
}

?>