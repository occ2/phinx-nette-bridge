<?php

namespace Banyacz\Phinx;

use Nette\DI\CompilerExtension;
use Phinx\Config\Config;
use Phinx\Console\Command\Breakpoint;
use Phinx\Console\Command\Create;
use Phinx\Console\Command\Migrate;
use Phinx\Console\Command\Rollback;
use Phinx\Console\Command\Status;

/**
 * Class Extension
 * @package Banyacz\Phinx
 * @author  Josef Banya <josef@banya.cz>
 */
class Extension extends CompilerExtension
{
	/** @var array */
	private static $commands = [
		Create::class,
		Migrate::class,
		Rollback::class,
		Status::class,
		Breakpoint::class,
	];

	/** {@inheritdoc} */
	public function beforeCompile()
	{
		$this->getContainerBuilder()->addDefinition($this->prefix('config'))
			->setFactory(Config::class, [$this->getConfig()]);

		foreach (static::$commands as $class) {
			$name = lcfirst(str_replace('Phinx\Console\Command\\', '', $class));
			$command = $this->name . ':' . strtolower(preg_replace('#([a-z])([A-Z])#', '$1-$2', $name));

			$this->getContainerBuilder()->addDefinition($this->prefix('console.commands.' . $name))
				->setFactory($class)
				->addSetup('setName', [$command])
				->addSetup('setConfig', [$this->prefix('@config')])
				->addTag('console.command');
		}
	}
}