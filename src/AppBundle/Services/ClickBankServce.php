<?php

namespace AppBundle\Services;

use AppBundle\Entity\Vendor;
use AppBundle\Model\IPN;

/**
 * Description of ClickBankServce
 *
 * @author med
 */
class ClickBankServce {
    //put your code here
        public function decryptIPN(Vendor $vendor, $ipn)
    {
        $ipnJson = json_decode($ipn, true);
        $encrypted = $ipnJson["notification"];
        $iv = $ipnJson["iv"];

        $decrypted = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128,
            substr(sha1($vendor->getSecretPhrase()), 0, 32),
            base64_decode($encrypted),
            MCRYPT_MODE_CBC,
            base64_decode($iv)), "\0..\32");

        return new IPN($iv, $decrypted);
    }

}
