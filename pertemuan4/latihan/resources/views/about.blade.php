<x-layout>
    <x-slot:title>
        About
    </x-slot:title>

    {{-- Hero Section --}}
    <section class="mt-10">
        <div class="max-w-5xl mx-auto px-4 py-32 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Tentang <span class="text-blue-600">MyBlog</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque expedita, repellendus magni ipsa facere obcaecati! Tempore nobis nesciunt facilis perferendis sint, aspernatur repudiandae molestiae id accusantium, adipisci eligendi ut quis.
            </p>
        </div>
    </section>

    <section class="bg-white py-16 border-t">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div>
                <img src="{{ asset('images/about.jpg') }}"
                     class="rounded-xl shadow" alt="About Illustration">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Apa itu <span class="text-blue-600">MyBlog?</span></h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ab mollitia. Dolore tempore at temporibus corrupti deleniti rem, rerum libero esse ea eos molestias ullam quam nulla obcaecati est mollitia?
                </p>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sequi quod maxime consectetur maiores doloremque ratione ab aperiam, itaque soluta! Ullam modi cumque ab maxime assumenda error aspernatur id praesentium!
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">Visi & Misi</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Berbagi Pengetahuan</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat quidem ullam atque sint quo neque, earum eum laudantium quae, doloribus vitae architecto modi amet! Sint molestias quis consequuntur. Laborum, quia?
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Menginspirasi</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quisquam ea reprehenderit. Quia, officia dolor? Architecto ipsam aspernatur reiciendis, nostrum excepturi inventore, similique itaque delectus maiores consequatur amet, commodi officia!
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2">Membangun Komunitas</h3>
                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, expedita recusandae. Odio rerum facere impedit eveniet? Soluta sint quam dolorum inventore autem totam laboriosam. Voluptatem enim nostrum accusantium repellat incidunt!
                    </p>
                </div>

            </div>
        </div>
    </section>
</x-layout>