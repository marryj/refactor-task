<?php
namespace App\Improved;

class UseCrmManagerController
{
    public function __construct(CrmManager $crmManager)
    {
        $this->crmManager = $crmManager;
    }

    public function index([] $clientEntity)
    {
        $this->crmManager->sendPerson($clientEntity);
    }
}