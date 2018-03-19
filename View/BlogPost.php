<div class="post">
    <div class="title"><?=$_GET['title']?></div>
    <div class="date">Modified at <?=$_GET['date']?></div>
    <div class="content"><?=$_GET['content']?></div>
    <?php foreach ($_GET['tags'] as $tag): ?>
        <div class="tag"><?=$tag?></div>
    <?php endforeach; ?>
</div>