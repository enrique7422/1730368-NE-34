<?php
 namespace MailPoetVendor\Twig\Loader; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Error\LoaderError; use MailPoetVendor\Twig\Source; interface SourceContextLoaderInterface { public function getSourceContext($name); } \class_alias('MailPoetVendor\\Twig\\Loader\\SourceContextLoaderInterface', 'MailPoetVendor\\Twig_SourceContextLoaderInterface'); 