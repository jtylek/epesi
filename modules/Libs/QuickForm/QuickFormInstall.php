<?php
/**
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2007, Telaxus LLC
 * @version 1.0
 * @license SPL
 * @package epesi-libs
 * @subpackage QuickForm
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Libs_QuickFormInstall extends ModuleInstall {
	public function install() {
		Base_LangCommon::install_translations($this->get_type());
		Base_ThemeCommon::install_default_theme('Libs/QuickForm');
		return true;
	}

	public function uninstall() {
		Base_ThemeCommon::uninstall_default_theme('Libs/QuickForm');
		return true;
	}

	public function version() {
		return array('3.2.9');
	}
	public function requires($v) {
		return array(
		array('name'=>'Base/Lang','version'=>0),
		array('name'=>'Base/Theme','version'=>0));
	}
}

?>
