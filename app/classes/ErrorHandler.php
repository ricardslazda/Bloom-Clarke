<?php


namespace App\classes;


use Whoops\Handler\PrettyPageHandler;

class ErrorHandler
{
    public function outputFriendlyError()
    {
        ob_end_clean();
        view('errors/generic');
        exit;
    }
    public static function emailAdmin($data)
    {
        $mail = new Mail;
        $mail->send($data);
        return new static;
    }

    public function handleErrors($error_number, $error_message, $error_file, $error_line)
    {
        $error = "[{$error_number}] An error occurred in file {$error_file}
         on line {$error_line}: {$error_message}";
        $environment = getenv('APP_ENV');
        if($environment === 'local'){
            $whoops = new \Whoops\Run();
            $whoops->pushHandler(new PrettyPageHandler());
            $whoops->register();
        } else {
            $data = [
                'to' => getenv('ADMIN_EMAIL'),
                'subject' => 'System error',
                'view' => 'errors',
                'name' => 'Admin',
                'body' => $error
            ];
            ErrorHandler::emailAdmin($data)->outputFriendlyError();
        }
    }
}