<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>

          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <a href="<?= $baseUrl; ?>" class="<?= isPageActive($baseUrl) ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?> rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>

              <a href="<?= $baseUrl ?>about/" class="<?= isPageActive($baseUrl . 'about/') ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?> rounded-md px-3 py-2 text-sm font-medium">About</a>

              <a href="<?= $baseUrl ?>career/" class="<?= isPageActive($baseUrl . 'career/') ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"; ?> rounded-md px-3 py-2 text-sm font-medium">Career</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
