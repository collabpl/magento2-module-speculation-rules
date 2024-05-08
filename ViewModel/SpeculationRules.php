<?php
/**
 * @category  Collab
 * @package   Collab\SpeculationRules
 * @author    Marcin Jędrzejewski <m.jedrzejewski@collab.pl>
 * @copyright 2024 Collab
 * @license   MIT
 */

declare(strict_types=1);

namespace Collab\SpeculationRules\ViewModel;

use Collab\SpeculationRules\Api\Data\ConfigInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class SpeculationRules implements ArgumentInterface
{
    public function __construct(
        protected readonly ConfigInterface $config
    ) {
    }

    public function getSpecRules(): string
    {
        return $this->config->getSpeculationRules();
    }
}
