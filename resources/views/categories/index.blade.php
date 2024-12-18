<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('カテゴリ一覧') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          @if ($categories->isEmpty())
            <p>カテゴリが存在しません。</p>
          @else
            @foreach ($categories as $category)
            <div class="mb-4 p-4 bg-gray-100 dark:bg-gray-700 rounded-lg">
              <p class="text-gray-800 dark:text-gray-300">{{ $category->name }}</p>
              <a href="{{ route('items.index', $category) }}" class="text-blue-500 hover:text-blue-700">{{ $category->name }}の選択</a>
            </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
