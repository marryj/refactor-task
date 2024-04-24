<?php
namespace App\Improved;

interface Sender
{
    public function setCredentials(array $settings);

    public function send(array $data);
}