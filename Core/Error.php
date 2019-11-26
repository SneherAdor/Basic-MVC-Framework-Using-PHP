<?php 
namespace Core;

class Error
{
	public static function errorHandler($level, $message, $file, $line)
	{
		if (error_reporting() !== 0) {
			throw new \ErrorException($message, 0, $message, $file, $line);
			
		}
	}

	public static function exceptionHandler($exception)
	{
		echo "<h2>Fetal Error</h2>";
		echo "<p>Uncought Exception: '".get_class($exception)."'</p>";
		echo "<p>Message: '".$exception->getMessage()."'</p>";
		echo "<p>Stack trace: <pre>".$exception->getTraceAsString()."</pre></p>";
		echo "<p>Throw in ".$exception->getFile()." on line ".$exception->getLine()."</p>";
	}
}