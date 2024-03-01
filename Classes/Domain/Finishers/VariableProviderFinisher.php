<?php

namespace Passionweb\FinisherVariableProvider\Domain\Finishers;


use TYPO3\CMS\Form\Domain\Finishers\AbstractFinisher;

class VariableProviderFinisher extends AbstractFinisher
{
    protected function executeInternal()
    {
        $this->finisherContext->getFinisherVariableProvider()->add(
            'custom',
            'salutation',
            'Hallo dear TYPO3-Community!'
        );
    }
}
