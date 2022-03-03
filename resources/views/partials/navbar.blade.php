<div class="relative bg-white border-b-2 border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center py-5 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="/" class="text-xl font-black text-indigo-600">Blog Laravel WPU</a>
      </div>

      <nav class="hidden md:flex space-x-10">
        <a href="/" class="text-base font-medium text-gray-500 hover:text-gray-900"> Home </a>
        <a href="/about" class="text-base font-medium text-gray-500 hover:text-gray-900"> About </a>
        <a href="/posts" class="text-base font-medium text-gray-500 hover:text-gray-900"> Posts </a>
        <a href="/categories" class="text-base font-medium text-gray-500 hover:text-gray-900"> Categories </a>
      </nav>
      <div class="flex items-center justify-end md:flex-1 lg:w-0">
        @auth
        <form action="/logout" method="post">
          @csrf
          @method("DELETE")
          <button class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">Log out</button>
        </form>
        @endauth

        @guest
        <a href="/login" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Log in</a>
        <a href="/register" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">Register</a>
        @endguest
      </div>
    </div>
  </div>
</div>