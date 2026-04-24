<?php\n/*\n Template Name: Blog\n*/\n?>\n<?php get_header(); ?>\n<main>\n
        <!-- Hero Section with Asymmetric Layout -->
        <section class="relative overflow-hidden bg-surface-container-low pt-20 pb-32">
            <div class="max-w-screen-2xl mx-auto px-8 grid grid-cols-1 md:grid-cols-12 items-center gap-12">
                <div class="md:col-span-7 z-10">
                    <span
                        class="font-label uppercase tracking-[0.2em] text-secondary text-sm font-semibold mb-4 block">Our
                        Journal</span>
                    <h1 class="font-headline text-6xl md:text-8xl text-on-surface tracking-tighter leading-tight mb-8">
                        The Eternal <br /><span class="text-primary italic">Whisper</span>
                    </h1>
                    <nav class="flex items-center gap-3 text-on-surface-variant font-label text-xs tracking-widest">
                        <a class="hover:text-primary transition-colors" href="#">HOME</a>
                        <span class="material-symbols-outlined text-[10px]"
                            data-icon="chevron_right">chevron_right</span>
                        <span class="text-primary font-bold">BLOGS</span>
                    </nav>
                </div>
                <div class="md:col-span-5 relative">
                    <div class="aspect-[4/5] overflow-hidden rounded-xl shadow-2xl relative">
                        <img alt="Sacred flame ritual" class="w-full h-full object-cover"
                            data-alt="Close-up of a sacred oil lamp 'Diya' with a glowing warm flame, soft incense smoke in the background, warm amber lighting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6Ag3id8JIKdp2IerftsuU4dRvdKMOSRDIYzl4up048qsoy2wQUkq-X2ZxTEjM7xZE86QDjldCZEpLc-5tbYxe6lok-PAHbW-eaEMqS8BkusSzjUa7DEHheQZ4RmuuW6cLFnUBI8KA8lpPBOTOtow0-jvO3x-nNRbLsEq6Ic2rsulrJYYll8zRtcdgG1hKq7qulwdzKDvD-HkTXk_LBJZvu7I5RezKn413iWkLT2H1LiRGoqKOkmh1yM2N45LUYk0whjiBLzXCFAU" />
                        <div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
                    </div>
                    <!-- Decorative element -->
                    <div
                        class="absolute -bottom-8 -left-8 w-48 h-48 agni-gradient opacity-20 blur-3xl -z-10 rounded-full">
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Grid & Sidebar -->
        <section class="max-w-screen-2xl mx-auto px-8 py-24">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
                <!-- Blog Grid -->
                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <!-- Blog Post 1 -->
                        <article class="group">
                            <div
                                class="relative mb-6 overflow-hidden rounded-xl bg-surface-container-highest aspect-[16/10]">
                                <img alt="Temple Architecture"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    data-alt="Intricate stone carvings on an ancient Hindu temple wall, golden morning sunlight creating deep shadows and highlights"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXmkd6rCPt87V8G9Sd0ize7NSXdyKrBpnsC0NHzfU2YXCIizZMKrb8osZw3zpLHWBvso7JB53OtN4rM0QfVkF9FkIMwwPnKvyUdv4K56gyzB-KtTTJ7eFQtbc9wK2xrUlX_DQxhmMNzbWGU6oRBsQkA3eqQL8_o6iOH0Ivca4Z-OXBoRiFNvvqpLLmVHnIRFGqJM6Yt6vtUQt-ROpcxC0n5eGl7qboP9LK7b7lNIWzuA-5RFDZfehtWxL66SOdQV5ZzXrSg39rwmU" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-secondary-container text-on-secondary-container px-4 py-1 rounded-full text-xs font-bold font-label tracking-wider uppercase">Rituals</span>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <span
                                    class="font-label text-xs text-on-surface-variant tracking-widest uppercase">OCTOBER
                                    24, 2023</span>
                                <h2
                                    class="font-headline text-3xl text-on-surface leading-snug group-hover:text-primary transition-colors cursor-pointer">
                                    Unveiling the Mysteries of Prana Pratishtha</h2>
                                <p class="text-on-surface-variant font-body leading-relaxed line-clamp-3">
                                    Deep within the sanctum of the ancient shrines, the ritual of Prana Pratishtha
                                    brings the divine essence into physical form. Explore the metaphysical significance
                                    of this sacred ceremony...
                                </p>
                                <a class="inline-flex items-center gap-2 text-primary font-bold tracking-tight hover:gap-4 transition-all duration-300"
                                    href="#">
                                    READ MORE
                                    <span class="material-symbols-outlined text-sm"
                                        data-icon="arrow_right_alt">arrow_right_alt</span>
                                </a>
                            </div>
                        </article>
                        <!-- Blog Post 2 -->
                        <article class="group">
                            <div
                                class="relative mb-6 overflow-hidden rounded-xl bg-surface-container-highest aspect-[16/10]">
                                <img alt="Meditation Session"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    data-alt="Peaceful meditation setting with marigold petals scattered around a copper bowl, soft morning mist in the background"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuClcTT16pv5EnpNmAuSq-e7ENU-yI4zvsP6vFrBAJa_bkXkaGHjee1R16zTby4qgfSrJyhY_Tlm0H6aji5kM631Yk7y2FKMUka1kvNwDk0x3ap-0GjcaE5KyWHAnni2MTslb8-tlOCKWSxRKz__w-lURArLWNfW1_ht0mH7cTLiE3G0seTjDuOVIj1sKN2HG1RQEdZFJn6wU_smSu1oowkrUvJxTpuprgjWf_rwMHfNTNaxHHEd4Nx8XNW1NCqWzkgXMLI0uUKR0ho" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-secondary-container text-on-secondary-container px-4 py-1 rounded-full text-xs font-bold font-label tracking-wider uppercase">Wisdom</span>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <span
                                    class="font-label text-xs text-on-surface-variant tracking-widest uppercase">OCTOBER
                                    20, 2023</span>
                                <h2
                                    class="font-headline text-3xl text-on-surface leading-snug group-hover:text-primary transition-colors cursor-pointer">
                                    Silence: The Language of the Soul</h2>
                                <p class="text-on-surface-variant font-body leading-relaxed line-clamp-3">
                                    In a world filled with digital noise, the practice of Mauna (silence) offers a path
                                    to rediscovering one's inner equilibrium and hearing the subtle voice of the
                                    divine...
                                </p>
                                <a class="inline-flex items-center gap-2 text-primary font-bold tracking-tight hover:gap-4 transition-all duration-300"
                                    href="#">
                                    READ MORE
                                    <span class="material-symbols-outlined text-sm"
                                        data-icon="arrow_right_alt">arrow_right_alt</span>
                                </a>
                            </div>
                        </article>
                        <!-- Blog Post 3 (Featured Style) -->
                        <article
                            class="md:col-span-2 group grid grid-cols-1 md:grid-cols-2 gap-8 bg-surface-container-low rounded-2xl p-8 items-center">
                            <div class="overflow-hidden rounded-xl aspect-square md:aspect-video">
                                <img alt="Ganga Aarti"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    data-alt="Dusk at the Ganges river bank, dozens of glowing ritual lamps reflected in the water, vibrant atmosphere of devotion"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9EWpTYFWQyBQxym9d0kJHcEH0iJlDuTenEVUBm7gLGZQbDWm_kZ3ecor926aAYCb4iesIqPj18xwvWzH-tKfYcOqSnli3_RknOR4zm0v8Qs3SaIdgP0Tv0zZiZFTtE0Wap2I1r8OuWfiDYmUdIZvsmf3QOH_0W7ZMerQCwuSACq7L368ZF_OEDV_FQEfGLpqL9cA8i0Gx1v_huJfUy-V_WkgA_tovzFvkUPshElTDxgx6LU4Wi2bK5FBoxHFPmlelaBh42JFHQA4" />
                            </div>
                            <div class="space-y-6">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="bg-secondary-container text-on-secondary-container px-4 py-1 rounded-full text-xs font-bold font-label tracking-wider uppercase">Community</span>
                                    <span
                                        class="font-label text-xs text-on-surface-variant tracking-widest uppercase">OCTOBER
                                        15, 2023</span>
                                </div>
                                <h2
                                    class="font-headline text-4xl text-on-surface leading-tight group-hover:text-primary transition-colors cursor-pointer">
                                    The Echoes of Varanasi: A Pilgrimage</h2>
                                <p class="text-on-surface-variant font-body leading-relaxed">
                                    Journey through the narrow winding lanes of the world's oldest living city. From the
                                    evening Aarti to the morning prayers at the Ghats, Varanasi remains the spiritual
                                    heart of the civilization.
                                </p>
                                <a class="inline-flex h-12 items-center justify-center px-8 agni-gradient text-white font-bold rounded-md active:scale-95 duration-150 shadow-lg shadow-primary/20"
                                    href="#">
                                    READ THE FULL STORY
                                </a>
                            </div>
                        </article>
                        <!-- Blog Post 4 -->
                        <article class="group">
                            <div
                                class="relative mb-6 overflow-hidden rounded-xl bg-surface-container-highest aspect-[16/10]">
                                <img alt="Sacred Text"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                                    data-alt="Antique parchment with Sanskrit calligraphy, lit by a soft warm desk lamp, aesthetic of wisdom and study"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1wLr0EFYxTma9JiZDIQudyl473i-7RLhvzwGT4gB1AmSSZ7DHIbCYSJ66gfAhtecUf2ki8nZsCuf2cyfElFvXt40TGa6pm8PI-eHnsvmeQoWpyS_Lg0L1Kal8LpQ3yE4a4nhbvVmGxKFDrOQvxbwXRfY8Y25sED2-2TbcrPJt1ngmOTXmLNFfxgNA-bEmGb5TFm63FrUlzj2GiojSjlzpNHPD1nyTsefh3tfUNpOa3TlUhIVPp5GhRfvc6G0O5d71FZ_p2Df1UzQ" />
                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-secondary-container text-on-secondary-container px-4 py-1 rounded-full text-xs font-bold font-label tracking-wider uppercase">Wisdom</span>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <span
                                    class="font-label text-xs text-on-surface-variant tracking-widest uppercase">OCTOBER
                                    10, 2023</span>
                                <h2
                                    class="font-headline text-3xl text-on-surface leading-snug group-hover:text-primary transition-colors cursor-pointer">
                                    Understanding Dharma in Modern Times</h2>
                                <p class="text-on-surface-variant font-body leading-relaxed line-clamp-3">
                                    How do ancient principles of righteousness apply to the complex ethical landscape of
                                    the 21st century? We bridge the gap between tradition and daily life...
                                </p>
                                <a class="inline-flex items-center gap-2 text-primary font-bold tracking-tight hover:gap-4 transition-all duration-300"
                                    href="#">
                                    READ MORE
                                    <span class="material-symbols-outlined text-sm"
                                        data-icon="arrow_right_alt">arrow_right_alt</span>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- Sidebar -->
                <aside class="lg:col-span-4 space-y-16">
                    <!-- Search -->
                    <div class="bg-surface-container rounded-2xl p-8">
                        <h3 class="font-headline text-xl text-on-surface mb-6 flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary" data-icon="search">search</span>
                            Search Journal
                        </h3>
                        <div class="relative">
                            <input
                                class="w-full bg-surface-bright border-none border-b-2 border-outline-variant focus:border-primary focus:ring-0 rounded-none py-3 px-0 font-body transition-colors placeholder:text-stone-400"
                                placeholder="Explore topics..." type="text" />
                        </div>
                    </div>
                    <!-- Categories -->
                    <div>
                        <h3
                            class="font-headline text-2xl text-on-surface mb-8 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-12 after:h-0.5 after:bg-primary">
                            Categories
                        </h3>
                        <ul class="space-y-4">
                            <li
                                class="flex items-center justify-between group cursor-pointer py-2 hover:bg-surface-container-low px-2 transition-colors rounded-lg">
                                <span class="text-on-surface-variant font-medium group-hover:text-primary">Rituals &amp;
                                    Puja</span>
                                <span
                                    class="bg-surface-container-highest text-on-surface text-[10px] px-2 py-0.5 rounded-full font-bold">12</span>
                            </li>
                            <li
                                class="flex items-center justify-between group cursor-pointer py-2 hover:bg-surface-container-low px-2 transition-colors rounded-lg">
                                <span class="text-on-surface-variant font-medium group-hover:text-primary">Spiritual
                                    Wisdom</span>
                                <span
                                    class="bg-surface-container-highest text-on-surface text-[10px] px-2 py-0.5 rounded-full font-bold">08</span>
                            </li>
                            <li
                                class="flex items-center justify-between group cursor-pointer py-2 hover:bg-surface-container-low px-2 transition-colors rounded-lg">
                                <span class="text-on-surface-variant font-medium group-hover:text-primary">Community
                                    Stories</span>
                                <span
                                    class="bg-surface-container-highest text-on-surface text-[10px] px-2 py-0.5 rounded-full font-bold">15</span>
                            </li>
                            <li
                                class="flex items-center justify-between group cursor-pointer py-2 hover:bg-surface-container-low px-2 transition-colors rounded-lg">
                                <span class="text-on-surface-variant font-medium group-hover:text-primary">Festival
                                    Calendar</span>
                                <span
                                    class="bg-surface-container-highest text-on-surface text-[10px] px-2 py-0.5 rounded-full font-bold">05</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Recent Posts -->
                    <div>
                        <h3
                            class="font-headline text-2xl text-on-surface mb-8 relative pb-2 after:content-[''] after:absolute after:bottom-0 after:left-0 after:w-12 after:h-0.5 after:bg-primary">
                            Recent Wisdom
                        </h3>
                        <div class="space-y-8">
                            <a class="flex gap-4 group" href="#">
                                <div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img alt="Recent 1"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                        data-alt="Small brass prayer bell on a silk cloth, warm lighting"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDEOjrntZcp0ICXp5d1KKD24NMHsAkd__XaE0ri_V7f4_3tIWLX-iHfeoPTKJPPwad1erLJJMWEN6MqIPNuFcov9loie2kKSOAHmuNjeg3WFiUHIz9f6rRyjJWiGGaEPTotRXnvDvXIQyDbwI0Vd0nN9dxQlAqqLb08AunvRw3GoNfu6pNkvwCksfUaiwphKf6_4fHJSfUTlcezm6ncvox1LpPEkX4zroOhJ9J6-V4_f6fkgHRFFfYVMtVxwo0vtb2uRDG6cufO5wY" />
                                </div>
                                <div>
                                    <h4
                                        class="font-headline text-sm leading-tight group-hover:text-primary transition-colors">
                                        The Art of Satsang in Daily Life</h4>
                                    <span
                                        class="text-[10px] font-label text-on-surface-variant uppercase mt-2 block tracking-widest">Oct
                                        2, 2023</span>
                                </div>
                            </a>
                            <a class="flex gap-4 group" href="#">
                                <div class="w-20 h-20 rounded-lg overflow-hidden flex-shrink-0">
                                    <img alt="Recent 2"
                                        class="w-full h-full object-cover group-hover:scale-110 transition-transform"
                                        data-alt="Close up of incense sticks burning, fragrant white smoke swirls"
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHxuEzyctl0bwR-xjU5Np9iLuA9365MC2a_ZZ6z_7JfX06d2T377qwkAGU7L2AGNPdHIMj6HwSASZ-P101gXCc0wU3PsW3-8zGWaLdMwiDIqae2fh63pSDrLV7E9mobjCH4-fwopCpeXvUiJeeKfq_D2ywnhg_4omhuDVWs5Lk4cnFhzwZvOuuodkRmD39NEGSlVTOV_VhpKzqrGu3cYLLTmYAwN0UMyt8Jnt2h0V3ft_gp7RTIAC1C9CTnyodRwkJyvkJ_AazNE0" />
                                </div>
                                <div>
                                    <h4
                                        class="font-headline text-sm leading-tight group-hover:text-primary transition-colors">
                                        Decoding the Vedic Hymns</h4>
                                    <span
                                        class="text-[10px] font-label text-on-surface-variant uppercase mt-2 block tracking-widest">Sept
                                        28, 2023</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Newsletter Sidebar Card -->
                    <div class="agni-gradient rounded-2xl p-8 text-white relative overflow-hidden">
                        <div class="relative z-10">
                            <h3 class="font-headline text-2xl mb-4">Divine Updates</h3>
                            <p class="text-on-primary-container text-sm leading-relaxed mb-6 opacity-90">
                                Subscribe to receive our weekly editorial on spirituality, rituals, and mindful living.
                            </p>
                            <div class="space-y-4">
                                <input
                                    class="w-full bg-white/10 border border-white/20 rounded-lg py-3 px-4 text-white placeholder:text-white/60 focus:ring-0 focus:bg-white/20"
                                    placeholder="Your email address" type="email" />
                                <button
                                    class="w-full bg-surface-bright text-primary font-bold py-3 rounded-lg hover:bg-on-primary-container transition-colors active:scale-95">SUBSCRIBE</button>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined absolute -bottom-8 -right-8 text-white/10 text-9xl pointer-events-none"
                            data-icon="auto_awesome">auto_awesome</span>
                    </div>
                </aside>
            </div>
        </section>
    \n</main>\n<?php get_footer(); ?>\n