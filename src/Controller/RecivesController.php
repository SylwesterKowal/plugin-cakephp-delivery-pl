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
    public function index()
    {
        $this->viewBuilder()->layout('ajax');
        $this->autoRender = false;
        return 'xxxxxxxxxxxxxxxxxxxxxx';
//        $result = parse_url($_SERVER["HTTP_REFERER"]);
//        $host = $result['host'];
//        $key = md5('45506235512298206672313471444118', true);
//        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
//
//
//        if (isset($_POST['data'])) {
//            $ciphertext_dec = base64_decode($_POST['data']);
//            $iv_dec = substr($ciphertext_dec, 0, $iv_size);
//            $ciphertext_dec = substr($ciphertext_dec, $iv_size);
//            $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
//
//            file_put_contents('index.html', $plaintext_dec);
//
//            $data = json_decode($plaintext_dec);
//            if ($data->SET_HOST == $host) {
//                echo 1;
//            }
//        } else {
//            echo 0;
//        }
    }
}

?>