<?php
$extensionPath = t3lib_extMgm::extPath('phpunit');
return array(
	'tx_phpunit_cli_phpunit' => $extensionPath . 'class.tx_phpunit_cli_phpunit.php',
	'tx_phpunit_database_testcase' => $extensionPath . 'class.tx_phpunit_database_testcase.php',
	'tx_phpunit_testcase' => $extensionPath . 'class.tx_phpunit_testcase.php',
	'tx_phpunit_testlistener' => $extensionPath . 'class.tx_phpunit_testlistener.php',
	'tx_phpunit_module1' => $extensionPath . 'mod1/class.tx_phpunit_module1.php',
	'tx_phpunit_module1_ajax' => $extensionPath . 'mod1/class.tx_phpunit_module1_ajax.php',
	'tx_phpunit_reports_status' => $extensionPath . 'Classes/Reports/Status.php',
	'tx_phpunit_test_testcase' => $extensionPath . 'Tests/tx_phpunit_test_testcase.php',
	'tx_phpunit_test_testsuite' => $extensionPath . 'Tests/tx_phpunit_testsuite.php',
	'tx_phpunit_service_testfinder' => $extensionPath . 'Classes/Service/TestFinder.php',
	'vfsstream' => $extensionPath . 'PEAR/vfsStream/vfsStream.php',
);
?>