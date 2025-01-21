<?php
  include 'partials/header.view.php';
  include 'partials/nav.view.php';
  include 'partials/banner.view.php';
?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST">
      <div class="space-y-12">
        <div class="col-span-full">
          <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
          <div class="mt-2">
            <input name="title" id="title" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="<?= $_POST['title'] ?? '' ?>">

            <?php if (isset($errors['title'])) : ?>
              <p class="text-red-500 text-sm"><?= $errors['title'] ?></p>
            <?php endif; ?>
          </div>

          <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
          <div class="mt-2">
            <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= $_POST['description'] ?? '' ?></textarea>
            <?php if (isset($errors['description'])) : ?>
              <p class="text-red-500 text-sm"><?= $errors['description'] ?></p>
            <?php endif; ?>
          </div>
        </div>

        <button type="submit" class="rounded-md bg-indigo-600 mt-4 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>
  </div>
</main>

<?php
  include 'partials/footer.view.php';
?>
