<?php

namespace ContainerFphrDGZ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddUserCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\AddUserCommand' shared autowired service.
     *
     * @return \App\Command\AddUserCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/AddUserCommand.php';
        include_once \dirname(__DIR__, 4).'/src/Utils/Validator.php';

        $container->privates['App\\Command\\AddUserCommand'] = $instance = new \App\Command\AddUserCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')), ($container->privates['App\\Utils\\Validator'] ?? ($container->privates['App\\Utils\\Validator'] = new \App\Utils\Validator())), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));

        $instance->setName('app:add-user');

        return $instance;
    }
}
