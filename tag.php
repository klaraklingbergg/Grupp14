<?php
//försök till att koppla taggarna till inläggen
require_once '<assets/includes/header.php';
require_once 'assets/config/db.php';
$tag =$_GET['tag'] ?? null;
?>
<main class= "container mt-5">
    <h1> tagg: <?php echo htmlspecialchars($tag); ?></h1>

<?php if ($tag): ?>
    $sql = "SELECT * FROM users WHERE tag = :tag";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':tag', $tag);
    $stmt->execute();

    $results =$stmt->fetchAll();
<?php if ($results): ?>
        <?php foreach ($results as $row): ?>
    
            <div class="card mb-3 p-3">
                <h5><?php echo htmlspecialchars($row['title']); ?></h5>
            <p><?php echo htmlspecialchars($row['content']); ?></p>
            </div>
            <?php endforeach; ?>
    <?php else: ?>
        <p> Inga inlägg med denna tagg ännu</p>
    <?php endif; ?>
    <?php else: ?>
        <p>Ingen tagg vald</p>
    <?php endif; ?>
    
</main>