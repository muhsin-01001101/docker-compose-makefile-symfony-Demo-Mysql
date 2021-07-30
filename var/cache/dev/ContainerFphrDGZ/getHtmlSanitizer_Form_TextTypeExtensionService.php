<?php

namespace ContainerFphrDGZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHtmlSanitizer_Form_TextTypeExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'html_sanitizer.form.text_type_extension' shared service.
     *
     * @return \HtmlSanitizer\Bundle\Form\TextTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'/vendor/tgalopin/html-sanitizer-bundle/src/Form/TextTypeExtension.php';

        return $container->privates['html_sanitizer.form.text_type_extension'] = new \HtmlSanitizer\Bundle\Form\TextTypeExtension(($container->privates['html_sanitizer.registry'] ?? $container->getHtmlSanitizer_RegistryService()), 'default');
    }
}
