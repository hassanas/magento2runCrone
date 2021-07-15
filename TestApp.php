<?php
class TestApp extends \Magento\Framework\App\Http implements \Magento\Framework\AppInterface
{
    public function launch()
    {
        //echo "Ali";exit;
        /** @var \Vendor\Module\Cron\Test $cron */
        $cron = \Magento\Framework\App\ObjectManager::getInstance()
            ->create('Evx\SAPImport\Cron\ImportStocks'); // any file which you want to execute

        $cron->execute();
        return $this->_response;
    }

    public function catchException(\Magento\Framework\App\Bootstrap
    $bootstrap, \Exception $exception) : bool
    {
        return false;
    }
}