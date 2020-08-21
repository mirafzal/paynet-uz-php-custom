<?php
/**
 * Created by PhpStorm.
 * User: yura_sultonov
 * Date: 5/23/19
 * Time: 11:28 PM
 */

class Constants
{
    // минималная сумма на сумах
    const MINIMUM_AMOUNT = 1;
    // логин пайнета
    const PAYNET_USERNAME = "testuser";
    // пароль пайнета
    const PAYNET_PASSWORD = "1234";
    // идентификатор сервиса пайнета
    const PAYNET_SERVICE_ID = 1;
    // URL на файла wsdl.php
    const WSDL_URL = "https://roboss.uz/paynet-soap-server/wsdl/wsdl.php";
    // URL на файла index.php (где написано SoapServer)
    const INDEX_URL = "https://roboss.uz/paynet-soap-server/index.php"; 
}