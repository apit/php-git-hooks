<?php

namespace Module\PhpUnit\Infrastructure\Tool;

use Infrastructure\Tool\ToolPathFinder;
use Module\PhpUnit\Model\PhpUnitProcessorInterface;
use Symfony\Component\Process\ProcessBuilder;

class PhpUnitProcessor extends AbstractPhpUnitProcessor implements PhpUnitProcessorInterface
{
    /**
     * @param $options
     *
     * @return bool
     */
    public function process($options)
    {
        $processBuilder = new ProcessBuilder(
            [
                'php',
                $this->toolPathFinder->find('phpunit'),
                $options,
            ]
        );

        return $this->runProcess($processBuilder);
    }
}
