<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @version $Id: API.php 3270 2010-10-28 18:21:55Z vipsoft $
 * 
 * @category Piwik_Plugins
 * @package Piwik_Provider
 */

/**
 * @see plugins/Provider/functions.php
 */
require_once PIWIK_INCLUDE_PATH . '/plugins/Provider/functions.php';

/**
 * 
 * @package Piwik_Provider
 */
class Piwik_Provider_API 
{
	static private $instance = null;
	
	static public function getInstance()
	{
		if (self::$instance == null)
		{
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function getProvider( $idSite, $period, $date )
	{
		Piwik::checkUserHasViewAccess( $idSite );
		$archive = Piwik_Archive::build($idSite, $period, $date );
		$dataTable = $archive->getDataTable('Provider_hostnameExt');
		$dataTable->filter('Sort', array(Piwik_Archive::INDEX_NB_VISITS));
		$dataTable->queueFilter('ColumnCallbackAddMetadata', array('label', 'url', 'Piwik_getHostnameUrl'));
		$dataTable->queueFilter('ColumnCallbackReplace', array('label', 'Piwik_getHostnameName'));
		$dataTable->queueFilter('ReplaceColumnNames');
		$dataTable->queueFilter('ReplaceSummaryRowLabel');
		return $dataTable;
	}
}

