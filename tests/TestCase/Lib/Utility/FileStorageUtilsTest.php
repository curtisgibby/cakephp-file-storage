<?php
namespace FileStorage\Test\TestCase\Lib\Utility;

use Cake\TestSuite\TestCase;
use FileStorage\Lib\Utility\FileStorageUtils;

/**
 * 
 */
class FileStorageUtilsTest extends TestCase {
/**
 * testRandomPath
 *
 * @return void
 */
	public function testRandomPath() {
		$result = FileStorageUtils::randomPath('someteststring');
		$this->assertEquals($result, '38' . DS . '88' . DS . '98' . DS);
	}

/**
 * testTrimPath
 *
 * @return void
 */
	public function testTrimPath() {
		$result = FileStorageUtils::trimPath('foobar/');
		$this->assertEquals($result, 'foobar');
	}

/**
 * testNormalizePath
 *
 * @return void
 */
	public function testNormalizePath() {
		if (DS == '\\') {
			$result = FileStorageUtils::normalizePath('/nice/path/test');
			$this->assertEquals($result, '\nice\path\test');
		} else {
			$result = FileStorageUtils::normalizePath('\nice\path\test');
			$this->assertEquals($result, '/nice/path/test');
		}
	}
}