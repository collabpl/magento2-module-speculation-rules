<?php
/**
 * @category  Collab
 * @package   Collab\SpeculationRules
 * @author    Marcin Jędrzejewski <m.jedrzejewski@collab.pl>
 * @copyright 2024 Collab
 * @license   MIT
 */

declare(strict_types=1);

namespace Collab\SpeculationRules\Api\Data;

interface ConfigInterface
{
    public const XML_PATH_SPECULATION_RULES_ENABLED = 'collab_speculationrules/general/enabled';
    public const XML_PATH_SPECULATIONRULES_SPECS = 'collab_speculationrules/general/spec_rules';

    public function isEnabled(): bool;
    public function getSpeculationRules(): string;
}
