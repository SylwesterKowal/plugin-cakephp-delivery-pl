<?php
/**
 * Created by PhpStorm.
 * User: Wlasciciel
 * Date: 2016-08-16
 * Time: 23:29
 */

namespace Delivery\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\Entity;
use Cake\ORM\TableRegistry;
use Exception;
use Product\Model\Entity\Product;


class McryptComponent extends Component
{

    public function decode($data, $referer_host)
    {
        try {

            $key = md5(crc32($referer_host), true);
            $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
            $ciphertext_dec = base64_decode($data);
            $iv_dec = substr($ciphertext_dec, 0, $iv_size);
            $ciphertext_dec = substr($ciphertext_dec, $iv_size);
            $plaintext_dec = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $ciphertext_dec, MCRYPT_MODE_CBC, $iv_dec);
            $data_order = @unserialize($plaintext_dec);

            return $data_order;
        } catch (Exception $e) {
            return false;
        }
    }

}