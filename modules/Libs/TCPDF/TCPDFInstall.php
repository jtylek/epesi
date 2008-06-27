<?php
/**
 * FPDFInstall class.
 * 
 * @author Paul Bukowski <pbukowski@telaxus.com>
 * @copyright Copyright &copy; 2006, Telaxus LLC
 * @version 1.0
 * @license SPL
 * @package epesi-libs
 * @subpackage tcpdf
 */
defined("_VALID_ACCESS") || die('Direct access forbidden');

class Libs_TCPDFInstall extends ModuleInstall {
	public function install() {
		Base_ThemeCommon::install_default_theme($this->get_type());
		$this->create_data_dir();
		DB::CreateTable('libs_tcpdf_pdf_index',
						'created_on T,'.
						'filename C(32)',
						array('constraints'=>''));
		return true;
	}
	
	public function uninstall() {
		Base_ThemeCommon::uninstall_default_theme($this->get_type());
		DB::DropTable('libs_tcpdf_pdf_index');
		return true;
	}

	public function version() {
		return array('3.1.001');
	}
	public function requires($v) {
		return array();
	}
}

?>
