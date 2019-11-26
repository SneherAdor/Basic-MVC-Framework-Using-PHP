<?php 
namespace Core;
use Core\View;

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
		$code = $exception->getCode();
			if ($code != 404) {
				$code = 500;
			}

			http_response_code($code);

		if (\App\Config::SHOW_ERRORS) {
			
			echo "<h2>Fetal Error</h2>";
			echo "<p>Uncought Exception: '".get_class($exception)."'</p>";
			echo "<p>Message: '".$exception->getMessage()."'</p>";
			echo "<p>Stack trace: <pre>".$exception->getTraceAsString()."</pre></p>";
			echo "<p>Throw in ".$exception->getFile()." on line ".$exception->getLine()."</p>";
		} else {
			$log = dirname(__DIR__).'/logs/'.date('Y-m-d').'.txt';
			ini_set('error_log', $log);

			$message = "Uncought Exception: '".get_class($exception);
			$message .= "Message: '".$exception->getMessage();
			$message .= "\nStack trace: ".$exception->getTraceAsString();
			$message .= "\nThrow in ".$exception->getFile()." on line ".$exception->getLine()."\n\n";

			error_log($message);
			View::render("errors/$code");
		}
		
	}
}