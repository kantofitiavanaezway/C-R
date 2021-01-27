<?php
    session_start();
	function getQuery($data)
	{
		$arr=array();
		for($i=0;$i<count($data);$i++)
		{
			$var=explode('=',$data[$i]);
			$arr[$var[0]]=$var[1];
		}
		return $arr;
	}
	function getMode($url)
	{
		$arr=array();
		for($i=1;$i<count($url);$i++)
		{
			array_push($arr,$url[$i]);
		}
		return $arr;
	}
	$path=array();
	$query="";
	$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['REQUEST_URI']);
	$parts=parse_url($request);
	$url=explode('/',$parts['path']);
	if(array_key_exists('query', $parts))
	{
		$query=explode('&',$parts['query']);
	}
	if(count($url)>1)
	{
		for($i=0;$i<count(getMode($url));$i++)
		{
			if($i==0) define('MODE',getMode($url)[0]);
			if($i==1) define('ACTION',getMode($url)[1]);
		}
	}
?>