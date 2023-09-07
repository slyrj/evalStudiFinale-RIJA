<?php
include 'partials/header.php';

// Check si User connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION['user_id'])) {
    header('Location: connexion.php');
    exit();
}

// Récupération des messages depuis la base de données
$query = "SELECT * FROM contact_forms";
$messagesStatement = $pdo->query($query);
$messages = $messagesStatement->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container-sm">
    <div class="message">
        <?php
        if (isset($_SESSION['delete-message-success'])) :
            echo '<p class="text-center text-muted msg-alert"><font color="green">' . $_SESSION['delete-message-success'] . '</font></p>';
            unset($_SESSION['delete-message-success']);
            echo '<hr>';
        elseif (isset($_SESSION['delete-message-error'])) :
            echo '<p class="text-center text-muted msg-alert"><font color="red">' . $_SESSION['delete-message-error'] . '</font></p>';
            unset($_SESSION['delete-message-error']);
            echo '<hr>';
        endif;
        ?>
    </div>
    <h2>Messages reçus</h2>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Objet</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($messages as $message) : ?>
                    <tr>
                        <td><?php echo $message['id']; ?></td>
                        <td><?php echo $message['name']; ?></td>
                        <p><strong>Email :</strong> <?= htmlspecialchars($message['email'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <td><?php echo $message['object']; ?></td>
                        <td><?php echo $message['created_at']; ?></td>
                        <td>
                            <a href="view-message.php?id=<?php echo $message['id']; ?>" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                            <a href="logic/delete-message.php?id=<?php echo $message['id']; ?>" class="btn btn-danger btn-sm"> <i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php include 'partials/footer.php'; ?>