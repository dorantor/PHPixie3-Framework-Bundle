<?php

namespace NS\BUNDLE\Console;

use NS\BUNDLE\BUNDLEBuilder;
use PHPixie\Console\Command\Config;
use PHPixie\Console\Command\Implementation;
use PHPixie\BundleFramework\Components;

/**
 * Your base command class
 */
abstract class Command extends Implementation
{
    /**
     * @var BUNDLEBuilder
     */
    protected $builder;

    /**
     * @param Config $config
     * @param BUNDLEBuilder $builder
     */
    public function __construct($config, $builder)
    {
        $this->builder = $builder;
        parent::__construct($config);
    }

    /**
     * @return Components
     */
    protected function components()
    {
        return $this->builder->components();
    }

    /**
     * @param Config $config
     * @return void
     */
    abstract protected function configure($config);
}