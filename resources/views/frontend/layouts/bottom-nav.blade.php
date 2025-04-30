   <nav class="hidden lg:block sticky top-0 bg-base-200 shadow-md z-20">
       <div class="container mx-auto px-4 py-2">
           <ul class="menu menu-horizontal flex w-full justify-center gap-3">
               @foreach (nav_categories() as $category)
                   <!-- Electronics -->
                   <li class="dropdown dropdown-start dropdown-hover">
                       <label tabindex="0" class="text-base font-medium hover:text-primary px-4 py-2 transition-all">
                           {{ strtoupper($category->name) }}
                       </label>
                       @if ($category->subcategories)
                           <ul tabindex="0"
                               class="dropdown-content menu menu-md p-2 shadow bg-base-100 rounded-box w-48">
                               @foreach ($category->subcategories as $subcategory)
                                   <li><a class="hover:bg-primary/10">{{ strtoupper($subcategory->name) }}</a></li>
                               @endforeach
                           </ul>
                       @endif
                   </li>
               @endforeach
           </ul>
       </div>
   </nav>
