<nav class="hidden lg:block sticky top-0 bg-white shadow-md z-20">
    <div class="container mx-auto px-4 py-2">
        <ul class="menu menu-horizontal flex w-full justify-center gap-4">
            @foreach (nav_categories() as $category)
                <li class="relative group">
                    <label tabindex="0"
                        class="text-base font-semibold px-4 py-2 text-gray-800 hover:text-primary-500 cursor-pointer transition-colors">
                        {{ strtoupper($category->name) }}
                    </label>

                    @if ($category->subcategories)
                        <ul tabindex="0"
                            class="absolute top-full left-0 w-56 bg-gray-50 text-gray-800 rounded-md shadow-lg opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200 z-10">
                            @foreach ($category->subcategories as $subcategory)
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-primary-100 hover:text-primary-600 rounded transition-colors">
                                        {{ strtoupper($subcategory->name) }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</nav>
