@extends('layout.app')
@section('content')
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">

    <h1 class="text-3xl font-extrabold text-gray-900 mb-8">My Projects</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      @if ($report)
        <!-- Card Laporan Khusus -->
        <div class="bg-indigo-50 border border-indigo-200 shadow rounded-lg overflow-hidden flex flex-col">
          <div class="w-full h-48 bg-indigo-200 flex items-center justify-center">
            <span class="text-indigo-600 font-bold text-xl">Dokumen Laporan</span>
          </div>
          <div class="p-6 flex-1 flex flex-col">
            <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $report->title }}</h2>
            <p class="text-sm text-gray-500 mb-4">Laporan khusus terkait detail project atau administrasi progress.</p>
            <div class="mt-auto space-y-2">
              <div class="text-xs font-medium text-white bg-indigo-600 px-2 py-1 rounded inline-block">
                Laporan
              </div>
            </div>
            <div class="mt-6 flex flex-col space-y-3">
              <a href="{{ route('report.detail', $report->slug) }}"
                class="text-indigo-700 hover:text-indigo-900 text-sm font-bold transition">
                View Detail &rarr;
              </a>
            </div>
          </div>
        </div>
      @endif

      @foreach ($projects as $project)
        <div class="bg-white shadow rounded-lg overflow-hidden flex flex-col">
          @if ($project->thumbnail)
            <img src="{{ Storage::url($project->thumbnail) }}" alt="{{ $project->title }}"
              class="w-full h-48 object-cover">
          @else
            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
              <span class="text-gray-400">No Image</span>
            </div>
          @endif

          <div class="p-6 flex-1 flex flex-col">
            <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $project->title }}</h2>
            <p class="text-sm text-gray-500 mb-4">{{ $project->short_description }}</p>

            <div class="mt-auto space-y-2">
              @if ($project->progress_status)
                <div class="text-xs font-medium text-indigo-600 bg-indigo-100 px-2 py-1 rounded inline-block">
                  {{ $project->progress_status }}
                </div>
              @endif

              @if ($project->is_final_project)
                <div class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded inline-block">
                  Final Project
                </div>
              @endif
            </div>

            <div class="mt-6 flex flex-col space-y-3">
              <a href="{{ route('project.detail', $project->slug) }}"
                class="text-indigo-600 hover:text-indigo-900 text-sm font-medium transition">
                View Detail &rarr;
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    @if ($projects->isEmpty() && !$report)
      <p class="text-gray-500 mt-4">No projects available yet.</p>
    @endif
  </div>
@endsection
