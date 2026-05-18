<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Portfolio') }}</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900 font-sans antialiased min-h-screen flex flex-col">

  <!-- Navigation -->
  <nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <div class="flex-shrink-0 flex items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-indigo-600">Portfolio</a>
          </div>
          <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
            <a href="{{ route('home') }}"
              class="{{ request()->routeIs('home') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
            <a href="{{ route('projects') }}"
              class="{{ request()->routeIs('projects') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Projects</a>
            <a href="{{ route('contact') }}"
              class="{{ request()->routeIs('contact') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700' }} inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <main class="flex-grow">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-white mt-auto border-t border-gray-200">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <p class="text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Portfolio. All rights reserved.
      </p>
    </div>
  </footer>

</body>

</html>
