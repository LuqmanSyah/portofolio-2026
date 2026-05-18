<x-layout>
  <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

    <div class="mb-8">
      <a href="{{ route('projects') }}" class="text-indigo-600 hover:text-indigo-900 flex items-center space-x-2">
        <span>&larr;</span>
        <span>Back to Projects</span>
      </a>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
      @if ($project->thumbnail)
        <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}" class="w-full h-96 object-cover">
      @else
        <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
          <span class="text-gray-400 text-xl">No Image Available</span>
        </div>
      @endif

      <div class="p-8 mt-2">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-4">
          <h1 class="text-3xl font-extrabold text-gray-900">{{ $project->title }}</h1>

          <div class="mt-4 md:mt-0 flex space-x-2">
            @if ($project->progress_status)
              <span class="text-sm font-medium text-indigo-600 bg-indigo-100 px-3 py-1 rounded inline-block">
                {{ $project->progress_status }}
              </span>
            @endif

            @if ($project->is_final_project)
              <span class="text-sm font-medium text-green-600 bg-green-100 px-3 py-1 rounded inline-block">
                Final Project
              </span>
            @endif
          </div>
        </div>

        <div class="prose max-w-none text-gray-700 mb-8 whitespace-pre-line">
          {{ $project->short_description }}
        </div>

        <div class="flex flex-col sm:flex-row gap-4 mt-8 border-t border-gray-100 pt-6">
          @if ($project->github_url)
            <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
              class="inline-flex justify-center items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-800 transition">
              <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                  clip-rule="evenodd" />
              </svg>
              View on GitHub
            </a>
          @endif

          @if ($project->pdf_report)
            <a href="{{ Storage::url($project->pdf_report) }}" target="_blank" rel="noopener noreferrer"
              class="inline-flex justify-center items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 transition">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
              </svg>
              Download PDF Report
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</x-layout>
