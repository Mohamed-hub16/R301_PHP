//Question 11 page 2 Php :

<?php

// Définition d'une classe TestClass
class TestClass {

    // Méthode pour obtenir la valeur du paramètre 'test' de la requête GET
    public function getTestValue() {
        if (isset($_GET['test'])) {
            return $_GET['test'];
        } else {
            return 'DefaultTestValue';
        }
    }
}

// Instanciation de la classe TestClass
$testObject = new TestClass();

// Appel de la méthode pour obtenir la valeur du paramètre 'test'
$testValue = $testObject->getTestValue();

// Affichage de la valeur du paramètre 'test'
echo "The value of 'test' parameter is: $testValue";
?>

//Question 12 page 2 Php :

<?php
// Définition d'une classe MemoryUsage
class MemoryUsage {

    // Méthode pour obtenir l'utilisation actuelle de la mémoire
    public function getMemoryUsage() {
        // Obtenir la quantité de mémoire utilisée actuellement
        $currentMemory = memory_get_usage(true);

        // Obtenir la quantité maximale de mémoire autorisée
        $maxMemory = $this->convertToBytes(ini_get('memory_limit'));

        // Retourner les informations sur l'utilisation de la mémoire
        return [
            'current_memory' => $this->formatBytes($currentMemory),
            'max_memory' => $this->formatBytes($maxMemory),
        ];
    }

    // Méthode pour convertir la limite de mémoire en octets
    private function convertToBytes($value) {
        $unit = strtoupper(substr($value, -1));
        $value = (int)$value;
        switch ($unit) {
            case 'G':
                $value *= 1024;
            case 'M':
                $value *= 1024;
            case 'K':
                $value *= 1024;
        }
        return $value;
    }

    // Méthode pour formater la taille de la mémoire en unités lisible
    private function formatBytes($bytes, $precision = 2) {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= (1 << (10 * $pow));

        // Retourner la taille formatée avec précision
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}

// Instanciation de la classe MemoryUsage
$memoryUsageObject = new MemoryUsage();

// Appel de la méthode pour obtenir les informations sur l'utilisation de la mémoire
$memoryUsage = $memoryUsageObject->getMemoryUsage();

// Affichage des informations sur l'utilisation de la mémoire
echo "Current Memory Usage: {$memoryUsage['current_memory']}\n";
echo "Maximum Memory Allowed: {$memoryUsage['max_memory']}\n";
?>
