@extends('layouts.app')
@section('title', 'Portfolio Lengkap')

@section('content')
<div class="min-h-screen pt-32 pb-20 bg-gray-50 dark:bg-dpm-dark">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="mb-12 reveal-on-scroll">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 dark:text-white mb-2">Database Portfolio</h2>
            <div class="w-16 sm:w-24 h-1 bg-dpm-teal rounded mb-4"></div>
            <p class="text-gray-600 dark:text-gray-400 text-sm sm:text-base">Jelajahi arsip proyek kami dari berbagai kategori.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 reveal-on-scroll">
            @forelse($projects as $project)
            <div class="bg-white dark:bg-dpm-card border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden shadow-sm flex flex-col group hover:shadow-md transition duration-300">
                <div class="relative h-48 sm:h-56 overflow-hidden">
                    <img src="{{ $project->image_url }}" alt="Project" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute top-3 right-3 {{ $project->status == 'Selesai' ? 'bg-green-500' : 'bg-orange-500' }} text-white text-xs font-bold px-2 py-1 rounded shadow-lg backdrop-blur-sm z-10">
                        {{ $project->status }}
                    </div>
                </div>
                <div class="p-4 sm:p-5 flex-grow flex flex-col justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-dpm-teal transition line-clamp-2">{{ $project->title }}</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-xs sm:text-sm mb-4 line-clamp-2">{{ $project->description }}</p>
                    </div>
                    
                    @if(session('is_admin'))
                    <div class="flex justify-between gap-2 pt-3 border-t border-gray-100 dark:border-gray-800 mt-2">
                        <button class="text-blue-500 dark:text-blue-400 hover:text-blue-600 text-xs flex items-center justify-center gap-1 bg-blue-50 dark:bg-blue-900/20 py-1.5 px-2 rounded-lg w-1/2 transition">
                            <i class="fa-solid fa-pen"></i> Edit
                        </button>
                        <button class="text-red-500 dark:text-red-400 hover:text-red-600 text-xs flex items-center justify-center gap-1 bg-red-50 dark:bg-red-900/20 py-1.5 px-2 rounded-lg w-1/2 transition">
                            <i class="fa-solid fa-trash"></i> Hapus
                        </button>
                    </div>
                    @endif
                </div>
            </div>
            @empty
            <div class="col-span-1 sm:col-span-2 lg:col-span-3 text-center text-gray-500 dark:text-gray-400 py-10 border border-dashed border-gray-300 dark:border-gray-700 rounded-xl">
                Belum ada project yang ditambahkan di database.
            </div>
            @endforelse
        </div>

        @if(session('is_admin'))
        <div class="fixed bottom-6 right-6 md:bottom-12 md:right-12 z-[65]">
            <button class="w-12 h-12 sm:w-14 sm:h-14 bg-dpm-teal hover:bg-teal-600 text-white rounded-full shadow-[0_8px_20px_rgba(93,178,193,0.5)] flex items-center justify-center text-xl sm:text-2xl transition-transform hover:scale-110">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>
        @endif

    </div>
</div>
@endsection
