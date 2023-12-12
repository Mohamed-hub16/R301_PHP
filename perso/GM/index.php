//Question 11 page 2 Php :

<?php

// Définition d'une classe TestClass
class TestClass {

    // Méthode pour obtenir la valeur du paramètre 'test' de la requête GET
    public function getTestValue() {
        // Vérifie si la clé 'test' existe dans les paramètres de requête GET
        if (isset($_GET['test'])) {
            // Si 'test' est défini, retourne sa valeur
            return $_GET['test'];
        } else {
            // Si 'test' n'est pas défini, retourne une valeur par défaut 'DefaultTestValue'
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
        // Obtient l'unité de taille à partir de la dernière lettre de la chaîne
        $unit = strtoupper(substr($value, -1));
        // Convertit la partie numérique de la chaîne en entier
        $value = (int)$value;
        // Switch basé sur l'unité de taille pour la conversion
        switch ($unit) {
            // Si l'unité est 'G' (gigaoctets), multiplie par 1024 pour obtenir la valeur en mégaoctets
            case 'G':
                $value *= 1024;
            // Si l'unité est 'M' (mégaoctets), multiplie par 1024 pour obtenir la valeur en kilooctets
            case 'M':
                $value *= 1024;
            // Si l'unité est 'K' (kilooctets), multiplie par 1024 pour obtenir la valeur en octets
            case 'K':
                $value *= 1024;
                break;  // Break ici pour éviter la cascade et sortir du switch
        }
        // Retourne la valeur convertie en octets
        return $value;
    }

    // Méthode pour formater la taille de la mémoire en unités lisible
    private function formatBytes($bytes, $precision = 2) {
        // Définition des unités de taille
        $units = array('B', 'KB', 'MB', 'GB', 'TB');
        // Assure que la quantité de données est au moins 0
        $bytes = max($bytes, 0);
        // Calcule la puissance de 1024 à laquelle les octets doivent être divisés
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        // Assure que la puissance calculée ne dépasse pas la plus grande unité disponible
        $pow = min($pow, count($units) - 1);
        // Convertit la quantité de données en octets en une unité de taille appropriée
        $bytes /= (1 << (10 * $pow));
        // Retourne la taille formatée avec précision
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