<?php

namespace Symfony\Config;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HtmlSanitizerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultSanitizer;
    private $sanitizers;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultSanitizer($value): self
    {
        $this->defaultSanitizer = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function sanitizers($value): self
    {
        $this->sanitizers = $value;
    
        return $this;
    }
    
    public function getExtensionAlias(): string
    {
        return 'html_sanitizer';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['default_sanitizer'])) {
            $this->defaultSanitizer = $value['default_sanitizer'];
            unset($value['default_sanitizer']);
        }
    
        if (isset($value['sanitizers'])) {
            $this->sanitizers = $value['sanitizers'];
            unset($value['sanitizers']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultSanitizer) {
            $output['default_sanitizer'] = $this->defaultSanitizer;
        }
        if (null !== $this->sanitizers) {
            $output['sanitizers'] = $this->sanitizers;
        }
    
        return $output;
    }
    

}
