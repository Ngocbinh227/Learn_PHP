<?php
interface Logger {
    public function logInfo();
    public function logWarning();
    public function logError();
}
class FileLogger implements Logger {
    public function logInfo() {

    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    protected $logg;
    public function __construct($logg) {
        $this->logg = $logg;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function getLog() {
        return $this->logg;
    }
}
class DatabaseLogger implements Logger {
    public function logInfo() {

    }
    public function logWarning() {
        
    }
    public function logError() {
        
    }
    protected $logg;
    public function __construct($logg) {
        $this->logg = $logg;
        $this->logInfo();
        $this->logWarning();
        $this->logError();
    }
    public function getLog() {
        return $this->logg;
    }
}
$less7_1 = new FileLogger("bug...1");
$less7_2 = new DatabaseLogger("bug...2");
echo $less7_1->getLog(). "<br>";
echo $less7_2->getLog(). "<br>";