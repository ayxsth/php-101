<?php
include 'views/partials/header.view.php';
include 'views/partials/nav.view.php';
include 'views/partials/banner.view.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <?php foreach($notes as $note) : ?>
      <p><?=$note['body']?></p>
    <?php endforeach; ?>
  </div>
</main>

<?php
include 'views/partials/footer.view.php';
?>
