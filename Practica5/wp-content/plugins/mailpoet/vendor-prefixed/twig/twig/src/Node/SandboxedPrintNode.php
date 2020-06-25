<?php
 namespace MailPoetVendor\Twig\Node; if (!defined('ABSPATH')) exit; use MailPoetVendor\Twig\Compiler; use MailPoetVendor\Twig\Node\Expression\ConstantExpression; use MailPoetVendor\Twig\Node\Expression\FilterExpression; class SandboxedPrintNode extends \MailPoetVendor\Twig\Node\PrintNode { public function compile(\MailPoetVendor\Twig\Compiler $compiler) { $compiler->addDebugInfo($this)->write('echo '); $expr = $this->getNode('expr'); if ($expr instanceof \MailPoetVendor\Twig\Node\Expression\ConstantExpression) { $compiler->subcompile($expr)->raw(";\n"); } else { $compiler->write('$this->env->getExtension(\'\\MailPoetVendor\\Twig\\Extension\\SandboxExtension\')->ensureToStringAllowed(')->subcompile($expr)->raw(");\n"); } } protected function removeNodeFilter(\MailPoetVendor\Twig\Node\Node $node) { if ($node instanceof \MailPoetVendor\Twig\Node\Expression\FilterExpression) { return $this->removeNodeFilter($node->getNode('node')); } return $node; } } \class_alias('MailPoetVendor\\Twig\\Node\\SandboxedPrintNode', 'MailPoetVendor\\Twig_Node_SandboxedPrint'); 