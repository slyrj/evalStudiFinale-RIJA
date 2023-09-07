<?php
include 'partials/header.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: signin.php');
    exit();
}
// Récupl'ID du message 
if (isset($_GET['id'])) {
    $messageId = $_GET['id'];
} else {
    header('Location: admin/messages.php');
    exit();
}
// Récup détails du message depuis la base de données 
$query = "SELECT * FROM contact_forms WHERE id = :messageId";
$messageStatement = $pdo->prepare($query);
$messageStatement->bindParam(':messageId', $messageId, PDO::PARAM_INT);
$messageStatement->execute();
$message = $messageStatement->fetch(PDO::FETCH_ASSOC);
?>
<div class="container">
    <h2>Détails du message</h2>
    <p><strong>Nom :</strong> <?= htmlspecialchars($message['name'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Email :</strong> <?= htmlspecialchars($message['email'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Tél :</strong> <?= htmlspecialchars($message['phone_number'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Objet :</strong> <?= htmlspecialchars($message['object'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Contenu :</strong></p>
    <p><?= htmlspecialchars($message['content'], ENT_QUOTES, 'UTF-8'); ?></p>
    <p><strong>Date :</strong> <?= htmlspecialchars($message['created_at'], ENT_QUOTES, 'UTF-8'); ?></p>
    <a href="messages.php" class="btn btn-primary">Retour à la liste</a>
</div>
<?php include 'partials/footer.php'; ?>