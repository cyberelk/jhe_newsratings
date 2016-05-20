<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Ratings for News');

t3lib_extMgm::addLLrefForTCAdescr('tx_jhenewsratings_domain_model_data', 'EXT:jhe_newsratings/Resources/Private/Language/locallang_csh_tx_jhenewsratings_domain_model_data.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_jhenewsratings_domain_model_data');
$TCA['tx_jhenewsratings_domain_model_data'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:jhe_newsratings/Resources/Private/Language/locallang_db.xml:tx_jhenewsratings_domain_model_data',
		'label' => 'reference',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'reference,rating,votecount,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Data.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_jhenewsratings_domain_model_data.gif'
	),
);

?>