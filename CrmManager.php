<?php
namespace App;


/**
 * Create crmManager object
 * $sender = new BazSender(); // Instantiate a sender (could change based on configuration)
 * $sender->setCredentials($settings); //get settings from config file
 *
 * $crmManager = new CrmManager($sender);
 * $crmManager->sendPerson($clientEntity);
 * //**
 * Class CrmManager
 * @package App
 */
class CrmManager
{

    public function __construct(private readonly SenderInterface $client)
    {
    }

    /**
     * Sends the person to a crm
     *
     * @param array $clientEntity
     * @return int
     */
    public function sendPerson(array $clientEntity): int
    {
        return $this->client->send($clientEntity);
    }
}