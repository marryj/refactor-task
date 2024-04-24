<?php
namespace App\Improved;

class OtherCrmSender implements Sender
{
    protected array $settings;

    /**
     * Sends data to the Baz crm
     *
     * @param array $data
     * @return int
     */
    public function send(array $data)
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return 200;
    }

    public function setCredentials(array $settings)
    {
        if (empty($settings['token'])) {
            throw new InvalidArgumentException('Auth token must be set!');
        }

        $this->settings = $settings;
    }
}
