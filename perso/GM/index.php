//Question 11 page 2 Php :

<?php

class TestClass {

    public function getTestValue() {
        if (isset($_GET['test'])) {
            return $_GET['test'];
        } else {
            return 'DefaultTestValue';
        }
    }
}

$testObject = new TestClass();

$testValue = $testObject->getTestValue();

echo "The value of 'test' parameter is: $testValue";
?>

//Question 12 page 2 Php :

<?php
class MemoryUsage {

    public function getMemoryUsage() {
        $currentMemory = memory_get_usage(true);

        $maxMemory = $this->convertToBytes(ini_get('memory_limit'));

        return [
            'current_memory' => $this->formatBytes($currentMemory),
            'max_memory' => $this->formatBytes($maxMemory),
        ];
    }

    private function convertToBytes($value) {
        $unit = strtoupper(substr($value, -1));
        $value = (int)$value;
        switch ($unit) {
            case 'G':
                $value = 1024;
            case 'M':
                $value= 1024;
            case 'K':
                $value = 1024;
        }
        return $value;
    }

    private function formatBytes($bytes, $precision = 2) {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}

$memoryUsageObject = new MemoryUsage();

$memoryUsage = $memoryUsageObject->getMemoryUsage();

echo "Current Memory Usage: {$memoryUsage['current_memory']}\n";
echo "Maximum Memory Allowed: {$memoryUsage['max_memory']}\n";
?>