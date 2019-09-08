<?php
namespace OmniFlow;


class Config {
	
    /* Configuration Variables to be setup at installation */
	var $dbtype = 'mysql';
	var $host = '127.0.0.1';
	var $user = 'medmon_btn';
	var $db = 'medmon_btn';
	var $password = 'm3dm0nbtn';
	var $scriptPath=__DIR__;
	var $processPath;
    var $sendEmail=true;
	static $pageUrl;
	static $configInstance;
	
	public function __construct()
	{
		//$this->processPath=$this->scriptPath.'/processes';
		$this->processPath='files/workflow';
	}
	public static function getConfig()
	{
		if (Config::$configInstance==null)
			Config::$configInstance=new Config();
			
		return Config::$configInstance;
		
	}
}
