<?php

namespace ContainerCdokpWl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Listener_Guard_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authentication.listener.guard.main' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-guard/Firewall/GuardAuthenticationListener.php';

        return $container->privates['security.authentication.listener.guard.main'] = new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener(($container->privates['security.authentication.guard_handler'] ?? $container->load('getSecurity_Authentication_GuardHandlerService')), ($container->privates['security.authentication.manager'] ?? $container->getSecurity_Authentication_ManagerService()), 'main', new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Security\\Authenticator'] ?? $container->load('getAuthenticatorService'));
        }, 1), ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), true);
    }
}
