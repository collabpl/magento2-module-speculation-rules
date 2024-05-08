<?php
/**
 * @category  Collab
 * @package   Collab\SpeculationRules
 * @author    Marcin Jędrzejewski <m.jedrzejewski@collab.pl>
 * @copyright 2024 Collab
 * @license   MIT
 */

declare(strict_types=1);

namespace Collab\SpeculationRules\Model\Data;

use Collab\SpeculationRules\Api\Data\ConfigInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Store\Model\StoreManagerInterface;

class Config implements ConfigInterface
{

    public function __construct(
        protected ScopeConfigInterface $scopeConfig,
        protected StoreManagerInterface $storeManager
    ) {
    }

    public function isEnabled(): bool
    {
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_SPECULATION_RULES_ENABLED,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getSpeculationRules(): string
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_SPECULATIONRULES_SPECS,
            ScopeInterface::SCOPE_STORE
        );
    }
}
