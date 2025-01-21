<?php
  include 'partials/header.view.php';
  include 'partials/nav.view.php';
  include 'partials/banner.view.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <a href="/php-101/todos.php" class="text-blue-500 hover:underline"><= Back to Todos</a>
      <h2 class="text-2xl font-bold tracking-tight text-gray-900"><?=$todo['title']?></h2>
      <p><?=$todo['description']?></p>
  </div>
</main>

<?php
  include 'partials/footer.view.php';
?>
