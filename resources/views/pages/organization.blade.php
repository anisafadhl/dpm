@extends('layouts.app')
@section('title', 'Struktur Organisasi')

@section('content')
<div class="min-h-screen pt-24 sm:pt-32 pb-16 sm:pb-20 bg-gray-50 dark:bg-black transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16 sm:mb-20 reveal-on-scroll">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">Struktur Organisasi</h2>
            <div class="w-20 sm:w-24 h-1 bg-dpm-teal mx-auto rounded mb-4"></div>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-sm sm:text-base">Mengenal tim profesional di balik kesuksesan proyek-proyek inovatif PT Duta Parama Mandiri.</p>
        </div>

        <div class="relative max-w-5xl mx-auto reveal-on-scroll">
            
            <div class="flex justify-center mb-12 sm:mb-16 relative z-10 org-line-vertical">
                <div class="bg-white dark:bg-dpm-card border border-gray-200 dark:border-gray-800 rounded-xl shadow-lg p-6 w-full max-w-[280px] text-center hover:border-dpm-teal dark:hover:border-dpm-teal transition duration-300">
                    <img src="[https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=256&q=80](https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=256&q=80)" alt="Direktur Utama" class="w-24 h-24 rounded-full mx-auto object-cover border-4 border-gray-100 dark:border-gray-800 mb-4">
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white">Budi Santoso, IAI</h3>
                    <p class="text-dpm-teal font-semibold text-sm mb-2">Direktur Utama</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Pengalaman 20+ tahun dalam manajemen arsitektur korporat berskala global.</p>
                </div>
            </div>

            <div class="hidden md:block absolute w-[75%] h-1 top-[228px] left-[12.5%] z-0 org-connector"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-24 mb-12 sm:mb-16 relative z-10">
                <div class="flex flex-col items-center org-line-vertical">
                    <div class="bg-white dark:bg-dpm-card border border-gray-200 dark:border-gray-800 rounded-xl shadow-lg p-6 w-full max-w-[280px] text-center hover:border-dpm-teal transition duration-300">
                        <img src="[https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=256&q=80](https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=256&q=80)" alt="Kepala Arsitek" class="w-20 h-20 rounded-full mx-auto object-cover border-4 border-gray-100 dark:border-gray-800 mb-4">
                        <h3 class="text-md font-bold text-gray-900 dark:text-white">Andi Wijaya, ST, M.Ars</h3>
                        <p class="text-dpm-teal font-semibold text-sm mb-2">Principal Architect</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Pakar desain struktural modern dan bangunan ramah lingkungan.</p>
                    </div>
                </div>
                <div class="flex flex-col items-center org-line-vertical">
                    <div class="bg-white dark:bg-dpm-card border border-gray-200 dark:border-gray-800 rounded-xl shadow-lg p-6 w-full max-w-[280px] text-center hover:border-dpm-teal transition duration-300">
                        <img src="[https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=256&q=80](https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=256&q=80)" alt="Manajer Proyek" class="w-20 h-20 rounded-full mx-auto object-cover border-4 border-gray-100 dark:border-gray-800 mb-4">
                        <h3 class="text-md font-bold text-gray-900 dark:text-white">Sari Indah, MT</h3>
                        <p class="text-dpm-teal font-semibold text-sm mb-2">Project Manager</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Ahli efisiensi timeline proyek dan manajemen konstruksi lapangan.</p>
                    </div>
                </div>
            </div>

            <div class="hidden md:block absolute w-[80%] h-1 top-[495px] left-[10%] z-0 org-connector"></div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 relative z-10 pt-4 md:pt-0">
                <div class="bg-white dark:bg-dpm-card border border-gray-200 dark:border-gray-800 rounded-xl shadow p-5 text-center hover:shadow-lg transition relative before:hidden md:before:block before:absolute before:w-0.5 before:h-8 before:bg-dpm-teal before:-top-8 before:left-1/2">
                    <img src="[https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80](https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80)" alt="Staff" class="w-16 h-16 rounded-full mx-auto object-cover mb-3">
                    <h3 class="text-sm font-bold text-gray-900 dark:text-white">Rizky Pratama</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">Senior Drafter</p>
                </div>
                <div class="bg-white dark:bg-dpm-card border border-gray-200 dark:border-gray-800 rounded-xl shadow p-5 text-center hover:shadow-lg transition relative before:hidden md:before:block before:absolute before:w-0.5 before:h-8 before:bg-dpm-teal before:-top-8 before:left-1/2">
                    <img src="[https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=200&q=80](https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=200&q=80)" alt="Staff" class="w-16 h-16 rounded-full mx-auto object-cover mb-3">
                    <h3 class="text-sm font-bold text-gray-900 dark:text-white">Dian Sastro</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">Interior Designer</p>
                </div>
                <div class="bg-white dark:bg-dpm-card border border-gray-200 dark:border-gray-800 rounded-xl shadow p-5 text-center hover:shadow-lg transition relative before:hidden md:before:block before:absolute before:w-0.5 before:h-8 before:bg-dpm-teal before:-top-8 before:left-1/2">
                    <img src="[https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=200&q=80](https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=200&q=80)" alt="Staff" class="w-16 h-16 rounded-full mx-auto object-cover mb-3">
                    <h3 class="text-sm font-bold text-gray-900 dark:text-white">Bagus Cahyono</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">MEP Engineer</p>
                </div>
                <div class="bg-white dark:bg-dpm-card border border-gray-200 dark:border-gray-800 rounded-xl shadow p-5 text-center hover:shadow-lg transition relative before:hidden md:before:block before:absolute before:w-0.5 before:h-8 before:bg-dpm-teal before:-top-8 before:left-1/2">
                    <img src="[https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=200&q=80](https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=200&q=80)" alt="Staff" class="w-16 h-16 rounded-full mx-auto object-cover mb-3">
                    <h3 class="text-sm font-bold text-gray-900 dark:text-white">Nina Anggraeni</h3>
                    <p class="text-gray-500 dark:text-gray-400 text-xs">Site Supervisor</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
