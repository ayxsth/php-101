<?php
  include 'partials/header.view.php';
  include 'partials/nav.view.php';
  include 'partials/banner.view.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <ul>
      <?php foreach ($todos as $todo) : ?>
        <li>
          <a href="/php-101/todo.php?id=<?= $todo['id'] ?>" class="text-blue-500 hover:underline">
            <?= $todo['title'] ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</main>

<?php
  include 'partials/footer.view.php';
?>
