<?php declare(strict_types = 1);
 
namespace Modules\NpDashboard;
 
use APP;
 
/**
 * Please see Core\CModule class for additional reference.
 */
class Module extends \Core\CModule {
	/**
	 * Initialize module.
	 */
	public function init(): void {
		// Initialize main menu (CMenu class instance).
		APP::Component()
			->get('menu.main')
			->findOrAdd(_('Configuration'))
			->getSubmenu()->insertAfter(_('Maintenance'),((new \CMenuItem(_('NetPing Dashboard')))
				->setAction('npdashboard.view'))
			);
	}
}
