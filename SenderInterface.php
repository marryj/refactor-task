<?php
namespace App;

interface SenderInterface
{
    public function setCredentials(array $settings);

    public function send(array $data): int;
}