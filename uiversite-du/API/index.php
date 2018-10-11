<?php
require 'db.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get('/transactions','getAllTransaction');

$app->run();

// GET http://www.yourwebsite.com/api/transactions
/**
     * Méthode getAlltransaction
     */
    function getAllTransaction() {
        $sql = "SELECT t.idtrans, 
        t.idpaie, 
        t.numquitus, 
        t.nometudiant,
        t.montant,
        t.datepaie,
        t.heurepaie, 
        t.agence, 
        t.ville, 
        t.refpaiement,
        t.idetudiant,
        t.annee,
        t.telephone from paiementuds t WHERE 1";
try {
$db = getDB();
$stmt = $db->query($sql); 
$transaction = $stmt->fetchAll(PDO::FETCH_OBJ);
$db = null;
echo '{"transaction": ' . json_encode($transaction) . '}';
} catch(PDOException $e) {
    echo '{"transaction": ' . json_encode($transaction) . '}';
    } catch(PDOException $e) {
//error_log($e->getMessage(), 3, '/var/tmp/phperror.log'); //Write error log
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}
?>