<?php
 namespace MailPoetVendor\Twig\Node; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Compiler; class SandboxNode extends \MailPoetVendor\Twig\Node\Node { public function __construct(\MailPoetVendor\Twig\Node\Node $body, int $lineno, string $tag = null) { parent::__construct(['body' => $body], [], $lineno, $tag); } public function compile(\MailPoetVendor\Twig\Compiler $compiler) { $compiler->addDebugInfo($this)->write("if (!\$alreadySandboxed = \$this->sandbox->isSandboxed()) {\n")->indent()->write("\$this->sandbox->enableSandbox();\n")->outdent()->write("}\n")->subcompile($this->getNode('body'))->write("if (!\$alreadySandboxed) {\n")->indent()->write("\$this->sandbox->disableSandbox();\n")->outdent()->write("}\n"); } } \class_alias('MailPoetVendor\\Twig\\Node\\SandboxNode', 'MailPoetVendor\\Twig_Node_Sandbox'); 