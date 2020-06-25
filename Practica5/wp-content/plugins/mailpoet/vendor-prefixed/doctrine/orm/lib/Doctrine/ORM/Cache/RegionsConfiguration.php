<?php
 namespace MailPoetVendor\Doctrine\ORM\Cache; if (!defined('ABSPATH')) exit; class RegionsConfiguration { private $lifetimes = array(); private $lockLifetimes = array(); private $defaultLifetime; private $defaultLockLifetime; public function __construct($defaultLifetime = 3600, $defaultLockLifetime = 60) { $this->defaultLifetime = (int) $defaultLifetime; $this->defaultLockLifetime = (int) $defaultLockLifetime; } public function getDefaultLifetime() { return $this->defaultLifetime; } public function setDefaultLifetime($defaultLifetime) { $this->defaultLifetime = (int) $defaultLifetime; } public function getDefaultLockLifetime() { return $this->defaultLockLifetime; } public function setDefaultLockLifetime($defaultLockLifetime) { $this->defaultLockLifetime = (int) $defaultLockLifetime; } public function getLifetime($regionName) { return isset($this->lifetimes[$regionName]) ? $this->lifetimes[$regionName] : $this->defaultLifetime; } public function setLifetime($name, $lifetime) { $this->lifetimes[$name] = (int) $lifetime; } public function getLockLifetime($regionName) { return isset($this->lockLifetimes[$regionName]) ? $this->lockLifetimes[$regionName] : $this->defaultLockLifetime; } public function setLockLifetime($name, $lifetime) { $this->lockLifetimes[$name] = (int) $lifetime; } } 