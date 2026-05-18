<x-layout>
  <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

    <div class="mb-8">
      <a href="{{ route('projects') }}" class="text-indigo-600 hover:text-indigo-900 flex items-center space-x-2">
        <span>&larr;</span>
        <span>Back to Projects</span>
      </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
      <div class="w-full h-32 bg-indigo-100 flex items-center justify-center">
          <span class="text-indigo-600 font-bold text-2xl">Dokumen Laporan</span>
      </div>

      <div class="p-8">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6 border-b pb-4">{{ $report->title }}</h1>

        <div class="prose max-w-none text-gray-700 mb-8">
          {!! $report->text !!}
        </div>
      </div>
    </div>
  </div>
</x-layout>
