<?php
class AppError extends ErrorHandler {
    function _outputMessage($template) {
        $this->controller->beforeFilter();
        parent::_outputMessage($template);
    }
    
    public static function handleError($code, $description, $file = null, $line = null, $context = null) {
        echo 'There has been an error!';
    }
}