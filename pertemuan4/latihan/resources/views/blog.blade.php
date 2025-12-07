<x-layout>
    <x-slot:title>
        Blog
    </x-slot:title>

    {{-- Hero Section --}}
    <section class="mt-8 bg-white">
        <div class="max-w-5xl mx-auto px-4 py-30 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6">
                <span class="text-blue-700">Blog</span>
                <span class="text-gray-900">& Artikel Terbaru</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Jelajahi berbagai artikel menarik seputar teknologi, tips belajar, lifestyle,
                dan banyak kumpulan tulisan lainnya.
            </p>
        </div>
    </section>

    {{-- Blog List --}}
    <section class="bg-gray-100 py-12">
        <div class="max-w-6xl mx-auto px-4">

            <h2 class="text-2xl font-bold text-gray-800 mb-6">Postingan Terbaru</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Card 1 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-xl transition overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=800"
                        alt="Technology" class="h-48 w-full object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-900">Inovasi Teknologi Masa Kini</h3>
                        <p class="text-gray-600 mt-2 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel lacus elit.
                        </p>
                        <a href="#"
                        class="inline-block mt-4 text-blue-600 font-medium hover:underline">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-xl transition overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?q=80&w=800"
                        alt="Education" class="h-48 w-full object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-900">Panduan Belajar Efektif</h3>
                        <p class="text-gray-600 mt-2 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris euismod commodo augue.
                        </p>
                        <a href="#"
                        class="inline-block mt-4 text-blue-600 font-medium hover:underline">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="bg-white rounded-lg shadow hover:shadow-xl transition overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800"
                        alt="Business" class="h-48 w-full object-cover">
                    <div class="p-5">
                        <h3 class="text-xl font-semibold text-gray-900">Strategi Bisnis Modern</h3>
                        <p class="text-gray-600 mt-2 text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra eu nibh et tempus.
                        </p>
                        <a href="#"
                        class="inline-block mt-4 text-blue-600 font-medium hover:underline">
                            Baca Selengkapnya →
                        </a>
                    </div>
                </div>

            </div>

            {{-- Load More --}}
            <div class="text-center mt-10">
                <a href="/posts"
                   class="px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition">
                    Lihat Semua Postingan
                </a>
            </div>

        </div>
    </section>
</x-layout>