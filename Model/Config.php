<?php

namespace Ethangrant\MageRelay\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
class Config
{
    const XML_PATH_MAGE_RELAY_ENABLED = 'mage_relay/general/enabled';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function enabled(int $store): bool
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_MAGE_RELAY_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }
}
