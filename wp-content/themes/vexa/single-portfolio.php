<?php
get_header(); ?>

    <section class="py-20 relative overflow-hidden xl:overflow-visible"
             style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/backgound-head.svg'); background-position: bottom; background-size: cover;
                 background-repeat: no-repeat;">
        <div class="container mx-auto px-4 md:px-6 max-w-[1440px]">
            <h1 class="text-[65px] text-white"><?php the_title(); ?></h1>
            <div class=""><?php vexa_breadcrumbs(); ?></div>
        </div>
        <div class="custom_blur -z-10"></div>
    </section>

    <div class="py-16 md:py-24 max-w-[1440px] mx-auto lg:mb-64 mb-32 px-5 lg:px-0">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16">
            <!-- Left Column - Image -->
            <div class="order-1">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl group">
                    <img src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?w=800&h=600&fit=crop"
                         alt="Fashion Photoshoot"
                         class="w-full h-auto transition-transform duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-pink-500/30 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                </div>
            </div>

            <!-- Right Column - Content -->
            <div class="order-2 flex flex-col justify-center space-y-6 lg:space-y-8">
                <!-- Title with gradient badge -->
                <div>
                    <div class="inline-flex items-center gap-3 mb-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-orange-500 to-pink-500 flex items-center justify-center">
                            <span class="text-white text-xl font-bold">F</span>
                        </div>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">
                            Fashion Photoshoot
                        </h1>
                    </div>
                </div>

                <!-- Description -->
                <div class="space-y-4">
                    <p class="text-gray-400 text-base sm:text-lg leading-relaxed">
                        Over the years, we have worked with Fortune 500s and brand-new startups. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers, and growing overall sales. Over the years, we have worked with Fortune 500s and brand-new startups. We help ambitious businesses like yours generate more profits by building awareness, driving web traffic, connecting with customers, and growing overall sales.
                    </p>
                </div>

                <!-- Likes and Share -->
                <div class="flex items-center gap-6 py-4 border-t border-b border-gray-700/50">
                    <button class="flex items-center gap-2 text-gray-400 hover:text-pink-500 transition-colors duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"/>
                        </svg>
                        <span class="font-medium">Likes (28)</span>
                    </button>
                    <button class="flex items-center gap-2 text-gray-400 hover:text-blue-500 transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                        </svg>
                        <span class="font-medium">Share</span>
                    </button>
                </div>

                <!-- Project Info Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:gap-8 pt-4">
                    <!-- Categories -->
                    <div>
                        <h3 class="text-white font-bold text-lg mb-3">Categories</h3>
                        <p class="text-blue-400 hover:text-blue-300 transition-colors cursor-pointer">UI/UX Design</p>
                    </div>

                    <!-- Client -->
                    <div>
                        <h3 class="text-white font-bold text-lg mb-3">Client</h3>
                        <p class="text-gray-400">Dolce & Gabbana</p>
                    </div>

                    <!-- Release Date -->
                    <div>
                        <h3 class="text-white font-bold text-lg mb-3">Release Date</h3>
                        <p class="text-gray-400">March 14, 2021</p>
                    </div>

                    <!-- Tags -->
                    <div>
                        <h3 class="text-white font-bold text-lg mb-3">Tags</h3>
                        <p class="text-gray-400">uncategorized</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
