<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    {{-- Hero Section --}}
    <section class="mt-10">
        <div class="max-w-6xl mx-auto px-4 py-25 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Selamat Datang di <span class="text-blue-600">MyBlog</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Blog sederhana berisi artikel, tutorial, dan berbagai tulisan menarik seputar teknologi, kehidupan,
                dan hal-hal yang kamu suka. Yuk mulai jelajahi!
            </p>

            <a href="/posts"
               class="inline-block mt-6 px-6 py-3 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition">
                Lihat Semua Post
            </a>
        </div>
    </section>

    {{-- Featured Section --}}
    <section class="mt-10 bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Kategori Populer</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-900">Teknologi</h3>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ullam quam id molestiae itaque. Consequuntur, tempore voluptas beatae ut quisquam ab eaque voluptate iusto sequi temporibus vitae doloremque exercitationem debitis?
                    </p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-900">Tutorial</h3>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, ipsa. Nesciunt sunt nobis hic dolore cupiditate, quod eveniet voluptatem necessitatibus provident ducimus maiores quo minima, libero, esse vitae explicabo temporibus!
                    </p>
                </div>

                <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold text-gray-900">Lifestyle</h3>
                    <p class="text-gray-600 mt-2">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis cupiditate nisi deleniti quaerat accusamus reprehenderit error impedit, quod, ipsam earum possimus harum, iure consequuntur consequatur unde optio veniam sunt amet!
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
