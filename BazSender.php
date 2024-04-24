<?php
namespace App;

class BazSender implements SenderInterface
{
    protected array $settings;

    /**
     * Sends data to the Baz crm
     *
     * @param array $data
     * @return int
     */
    public function send(array $data): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return 200;
    }

    public function setCredentials(array $settings): void
    {
        if (empty($settings['user'])) {
            throw new \InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new \InvalidArgumentException('Password must be set!');
        }

        $this->settings = $settings;
    }
}
