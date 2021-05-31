<?php


namespace Lsrz\Agent;

use Illuminate\Config\Repository;

class Agent
{
    protected $config;

    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    public function test()
    {
        return $this->config['agent'];
    }

}
