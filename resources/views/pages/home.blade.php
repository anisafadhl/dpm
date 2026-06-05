@extends('layouts.app')
@section('title', 'Beranda')

@section('content')
<div id="homeView" class="overflow-x-hidden">
    <section class="relative pt-20 min-h-[85vh] flex items-center justify-center bg-black">
        <img src="[https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80](https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=1920&q=80)" class="absolute inset-0 w-full h-full object-cover opacity-50">
        <div class="relative z-10 text-center px-4 reveal-on-scroll is-visible">
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight leading-tight">Mewujudkan Visi Melalui <br class="hidden sm:block"><span class="text-dpm-teal">Arsitektur Presisi.</span></h1>
            <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                Keahlian bertahun-tahun dalam merancang dan membangun struktur ikonik yang memadukan estetika, fungsi, dan keberlanjutan.
            </p>
            <a href="{{ route('portfolio') }}" class="inline-block bg-dpm-teal text-white font-bold py-3 px-10 rounded-full shadow-lg hover:bg-teal-600 transition">Jelajahi Portfolio</a>
        </div>
    </section>

    <section class="relative z-20 -mt-8 sm:-mt-16 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 reveal-on-scroll">
        <div class="bg-white dark:bg-dpm-card rounded-xl shadow-xl grid grid-cols-2 md:grid-cols-4 gap-y-6 md:gap-y-0 py-6 sm:py-8 text-center border border-gray-100 dark:border-gray-800 divide-x dark:divide-gray-800">
            <div><div class="text-3xl sm:text-4xl font-black text-gray-900 dark:text-white mb-1">1000+</div><div class="text-xs sm:text-sm text-dpm-grey uppercase tracking-wider">Project Selesai</div></div>
            <div><div class="text-3xl sm:text-4xl font-black text-gray-900 dark:text-white mb-1">15+</div><div class="text-xs sm:text-sm text-dpm-grey uppercase tracking-wider">Thn Pengalaman</div></div>
            <div><div class="text-3xl sm:text-4xl font-black text-gray-900 dark:text-white mb-1">50+</div><div class="text-xs sm:text-sm text-dpm-grey uppercase tracking-wider">Penghargaan</div></div>
            <div><div class="text-3xl sm:text-4xl font-black text-gray-900 dark:text-white mb-1">100%</div><div class="text-xs sm:text-sm text-dpm-grey uppercase tracking-wider">Kepuasan Klien</div></div>
        </div>
    </section>

    <section class="py-16 sm:py-24 bg-white dark:bg-dpm-card overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-12 sm:gap-16 reveal-on-scroll">
            <div class="w-full md:w-1/2">
                <div class="w-16 h-1 bg-dpm-teal mb-6"></div>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">Membangun Fondasi Masa Depan <span class="text-dpm-teal">Hari Ini.</span></h2>
                <p class="text-gray-600 dark:text-gray-400 text-lg leading-relaxed mb-6">
                    PT Duta Parama Mandiri adalah firma desain dan konstruksi komprehensif. Kami menantang batas-batas desain konvensional untuk menghadirkan ruang yang tidak hanya memukau secara visual, namun juga mengoptimalkan fungsi dan kenyamanan manusia di dalamnya.
                </p>
                <a href="{{ route('organization') }}" class="text-dpm-teal font-bold hover:text-teal-700 flex items-center gap-2 transition">
                    Kenali Tim Profesional Kami <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <div class="w-full md:w-1/2 relative mt-8 md:mt-0">
                <img src="[https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=800&q=80](https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&w=800&q=80)" class="rounded-lg shadow-2xl z-10 relative w-full object-cover">
                <div class="absolute -bottom-6 -left-4 w-full h-full border-4 border-dpm-teal rounded-lg z-0"></div>
            </div>
        </div>
    </section>
</div>
@endsection
