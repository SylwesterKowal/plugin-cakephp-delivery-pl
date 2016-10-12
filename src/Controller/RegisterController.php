<?php
/**
 * Created by 21w.pl
 * User: Sylwester Kowal
 * Date: 2016-10-05
 * Time: 20:57
 */

namespace Delivery\Controller;

use Cake\Network\Request;

class RegisterController extends DeliveryAppController
{
    private $password;
    private $hash_password;
    private $username;
    private $code;

    public function index($host = '')
    {
        $this->register($host);
    }

    private function register($host = '')
    {
        if(!empty($host)) {
            $this->username = $host;
            $this->password = $this->generatePassword();
            $this->hash_password = (new DefaultPasswordHasher)->hash($this->password);
            $this->code = $this->generateCode($host);
        }
    }


    private function generatePassword()
    {
        return substr(md5(mt_rand(0, 32) . time()), 0, 10);
    }


}

?>