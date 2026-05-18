<x-layout>
  <div class="max-w-3xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl font-extrabold text-gray-900 mb-8 text-center">Get in Touch</h1>

    @if (session('success'))
      <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded rounded-md">
        {{ session('success') }}
      </div>
    @endif

    <div class="bg-white shadow rounded-lg p-8">
      <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
        @csrf

        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
          <div class="mt-1">
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md py-2 px-3 border">
          </div>
          @error('name')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
          <div class="mt-1">
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md py-2 px-3 border">
          </div>
          @error('email')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
          <div class="mt-1">
            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required
              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md py-2 px-3 border">
          </div>
          @error('subject')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
          <div class="mt-1">
            <textarea id="message" name="message" rows="5" required
              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md py-2 px-3 border">{{ old('message') }}</textarea>
          </div>
          @error('message')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <button type="submit"
            class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
</x-layout>
