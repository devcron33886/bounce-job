<main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
    <div class="border-b border-gray-200 pb-10 pt-24">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900">Explore All Services</h1>
        <p class="mt-4 text-base text-gray-500">Checkout out the latest services that are available!</p>
    </div>

    <div class="pb-24 pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
        <aside>
            <h2 class="sr-only">Categories</h2>
            <form class="border-b border-gray-200 bg-white pb-10" action="#">
                <div class="pt-10">
                    <fieldset>

                        <div class="space-y-3 pt-6">
                            @foreach ($categories as $category)
                                <div class="flex items-center">
                                    <input id="category-1" name="category[]" value="tees" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="category-1"
                                        class="ml-3 text-sm text-gray-600">{{ $category->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                </div>
            </form>
        </aside>
        <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
            <h2 id="product-heading" class="sr-only">Services</h2>

            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-2">
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg"
                            alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green."
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee 8-Pack
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Get the full lineup of our Basic Tees. Have a
                            fresh shirt all week, and an extra for laundry day.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">8 colors</p>
                            <p class="text-base font-medium text-gray-900">$256</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                            alt="Front of plain black t-shirt."
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black
                            t-shirt every day.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">Black</p>
                            <p class="text-base font-medium text-gray-900">$32</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-03.jpg"
                            alt="Front of plain white t-shirt."
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Kinda White Basic Tee
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">It's probably, like, 5000 Kelvin instead of 6000
                            K.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">White</p>
                            <p class="text-base font-medium text-gray-900">$32</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-04.jpg"
                            alt="Front of plain dark gray t-shirt."
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Stone Basic Tee
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">White tees stain easily, and black tees fade.
                            This is going to be gray for a while.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">Charcoal</p>
                            <p class="text-base font-medium text-gray-900">$32</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-05.jpg"
                            alt="Three shirts arranged on table in mustard, dark gray, and olive."
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Fall Basic Tee 3-Pack
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Who need stark minimalism when you could have
                            earth tones? Embrace the season.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">Charcoal</p>
                            <p class="text-base font-medium text-gray-900">$96</p>
                        </div>
                    </div>
                </div>
                <div class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                            alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                            class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                    </div>
                    <div class="flex flex-1 flex-col space-y-2 p-4">
                        <h3 class="text-sm font-medium text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Linework Artwork Tee 3-Pack
                            </a>
                        </h3>
                        <p class="text-sm text-gray-500">Get all 3 colors of our popular Linework design
                            and some variety to your monotonous life.</p>
                        <div class="flex flex-1 flex-col justify-end">
                            <p class="text-sm italic text-gray-500">3 colors</p>
                            <p class="text-base font-medium text-gray-900">$108</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>
