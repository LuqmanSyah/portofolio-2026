<x-layout>
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <!-- Profile Section -->
    <div class="bg-white shadow rounded-lg px-6 py-8 mb-12">
      <h1 class="text-3xl font-extrabold text-gray-900 mb-4">Hello, I'm a Developer</h1>
      <p class="text-lg text-gray-600">
        Welcome to my portfolio! I specialize in building robust web applications using Laravel, Tailwind CSS, and
        various modern technologies.
        This space highlights my journey, skills, and the projects I've built along the way.
      </p>
    </div>

    <!-- Skills Section -->
    <div>
      <h2 class="text-2xl font-bold text-gray-900 mb-6">My Skills</h2>

      @if ($skills->isEmpty())
        <p class="text-gray-500">No skills added yet.</p>
      @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach ($skills->groupBy('category') as $category => $categorySkills)
            <div class="bg-white shadow rounded-lg p-6">
              <h3 class="text-lg font-semibold border-b pb-2 mb-4 text-gray-800">{{ $category ?: 'Other' }}</h3>
              <ul class="space-y-2">
                @foreach ($categorySkills as $skill)
                  <li class="flex items-center space-x-3 text-gray-600">
                    @if ($skill->icon)
                      <img src="{{ Storage::url($skill->icon) }}" alt="{{ $skill->name }} logo"
                        class="w-6 h-6 object-contain">
                    @else
                      <span class="w-2 h-2 bg-indigo-500 rounded-full inline-block"></span>
                    @endif
                    <span>{{ $skill->name }}</span>
                  </li>
                @endforeach
              </ul>
            </div>
          @endforeach
        </div>
      @endif
    </div>
  </div>
</x-layout>
