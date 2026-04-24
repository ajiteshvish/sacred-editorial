<?php get_header(); ?>
<?php
// Setup ACF fallback values
$get_val = function($field, $fallback) {
    return (function_exists('get_field') && get_field($field)) ? get_field($field) : $fallback;
};

$hero_subtitle = $get_val('hero_subtitle', 'Ancient Wisdom for Modern Life');
$hero_title = $get_val('hero_title', 'We Hindus believe In the Vedas.');
$hero_desc = $get_val('hero_description', 'Discover the profound spiritual depths of Hindu traditions, where every ritual is a bridge between the mortal and the divine.');
$hero_btn_text = $get_val('hero_button_text', 'Learn more');
$hero_btn_link = $get_val('hero_button_link', '#');
$hero_image = $get_val('hero_image', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCykP4XV2RIEfTrl3zjgGc0utXKIU6g5_XgEB8VoCF30vDSvh1ZapLu_cZ4nu0RXw0Cm247eVp-ef_p1KD4LMxB8lo9fnWhNE8NhbPmKiLwDU68GTR4SFEXfUpm-Co5RT96JM7bxg0M-VIymghr4wbRIXpfbaC1cvUX088NKT4V7OFdZSOy-OhgPPOiQt8JaYmYYcUZkbnlUeFsPJVwjd2_uO98GAjHH78hSJDxs4QvXD3KvGAtSQ79qjj165t2JVbmrMyHrvCi5_o');
?>
<main class="pt-20">
        <!-- Hero Section: The Agni Dawn -->
        <section class="relative min-h-[921px] flex items-center overflow-hidden">
            <div class="absolute inset-0 z-0 flex">
                <div class="w-1/2 bg-primary"></div>
                <div class="w-1/2 bg-secondary-container"></div>
            </div>
            <div class="container mx-auto px-8 relative z-10 flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2 text-on-primary">
                    <p class="font-label text-sm tracking-[0.2em] uppercase mb-4 text-secondary-fixed"><?php echo esc_html($hero_subtitle); ?></p>
                    <h1 class="font-headline text-5xl md:text-7xl font-bold mb-8 leading-tight tracking-tight"><?php echo esc_html($hero_title); ?></h1>
                    <p class="text-lg opacity-90 max-w-xl mb-10 leading-relaxed"><?php echo esc_html($hero_desc); ?></p>
                    <a href="<?php echo esc_url($hero_btn_link); ?>">
                        <button class="agni-gradient px-10 py-4 rounded-md text-white font-bold text-lg shadow-xl hover:scale-105 transition-transform"><?php echo esc_html($hero_btn_text); ?></button>
                    </a>
                </div>
                <div class="w-full md:w-1/2 relative">
                    <div
                        class="aspect-square rounded-full overflow-hidden border-[16px] border-surface/10 shadow-2xl relative z-10">
                        <img alt="Hero Image"
                            class="w-full h-full object-cover"
                            src="<?php echo esc_url($hero_image); ?>" />
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-secondary rounded-full opacity-20 blur-3xl">
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section: Intentional Asymmetry -->
        <?php
        $about_subtitle = $get_val('about_subtitle', 'Discover Faith');
        $about_title = $get_val('about_title', 'We Hindus believe In the god who created us all.');
        $about_desc = $get_val('about_description', 'Hinduism is a tapestry of diverse traditions, philosophical systems, and spiritual practices. We celebrate the oneness of the universe and the many forms of the divine.');
        $about_img1 = $get_val('about_image_1', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCnuly_9QHMp0f_HZflWxmXvzGKtbRWVJwleahJzgS-8QW998Jo84n4DFm1mCENNbVFPYWnFAwM51lktFcNssyxkwfA6J3zdOVP8Y_XQWHLbE2PI5NMPZWja9Uu7kA5n4jEpAFCF8DOSjTjD-8UrEnl6drPVE8nD70QpfoYuUwsPmgtmxf0ON87gVKHpkgBUBpIxoYdguQIaVrXaT47EupT1_HyNAzSp_Os3vTyJpzzRRdIQxd8PHlaom1de_nJrr5aduYbQ9kiwao');
        $about_img2 = $get_val('about_image_2', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBDNlW4tQYxF_t5Ggty0QyLGCHhZqydLW3Y1lnG_sCrO3COmb_D_nnIqQtAoqSyGycsd9s-vFp6FaCUCfgvBT0dkjKW9wUDtyy3kTFSk6JUPvwN4cZIVFqFQf7DMNkwclwE8t1g20VL0wex1T5cv7qSkWRmUZpGcJiag2VEg6GtgBXnxyvqstCvrq9zbCZd-OK1kR7B_cqs-zlSW-tBV7sxDYlO0I-yi3jp9fhEd-JC3x9NL7_tI-SS-oJ2g1NdsyHZzYEiVczC1rA');
        
        $feat1_icon = $get_val('about_feature_1_icon', 'celebration');
        $feat1_title = $get_val('about_feature_1_title', 'Hindu celebrate');
        $feat1_desc = $get_val('about_feature_1_description', 'Festivals that unite communities in joy and devotion.');
        
        $feat2_icon = $get_val('about_feature_2_icon', 'self_improvement');
        $feat2_title = $get_val('about_feature_2_title', 'Prayers');
        $feat2_desc = $get_val('about_feature_2_description', 'Sacred chants and meditations for inner peace.');
        ?>
        <section class="py-24 bg-surface">
            <div class="container mx-auto px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-4">
                            <img alt="About Image 1" class="rounded-lg shadow-lg translate-y-12"
                                src="<?php echo esc_url($about_img1); ?>" />
                            <img alt="About Image 2" class="rounded-lg shadow-lg"
                                src="<?php echo esc_url($about_img2); ?>" />
                        </div>
                    </div>
                    <div>
                        <p class="font-label text-secondary font-bold tracking-widest mb-2 uppercase"><?php echo esc_html($about_subtitle); ?></p>
                        <h2 class="font-headline text-4xl font-bold text-primary mb-6"><?php echo esc_html($about_title); ?></h2>
                        <p class="text-on-surface-variant text-lg mb-10 leading-relaxed"><?php echo esc_html($about_desc); ?></p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="flex items-start gap-4">
                                <div class="p-3 bg-secondary-fixed rounded-full text-secondary">
                                    <span class="material-symbols-outlined text-3xl"><?php echo esc_html($feat1_icon); ?></span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xl mb-1"><?php echo esc_html($feat1_title); ?></h4>
                                    <p class="text-sm text-on-surface-variant"><?php echo esc_html($feat1_desc); ?></p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="p-3 bg-primary-fixed rounded-full text-primary">
                                    <span class="material-symbols-outlined text-3xl"><?php echo esc_html($feat2_icon); ?></span>
                                </div>
                                <div>
                                    <h4 class="font-bold text-xl mb-1"><?php echo esc_html($feat2_title); ?></h4>
                                    <p class="text-sm text-on-surface-variant"><?php echo esc_html($feat2_desc); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services: Our Puja (Bento Inspired) -->
        <?php
        $services_subtitle = $get_val('services_subtitle', 'Sacred Rituals');
        $services_title = $get_val('services_title', 'Our Puja');
        ?>
        <section class="py-24 bg-surface-container-low">
            <div class="container mx-auto px-8">
                <div class="text-center mb-16">
                    <p class="font-label text-secondary font-bold tracking-widest uppercase"><?php echo esc_html($services_subtitle); ?></p>
                    <h2 class="font-headline text-4xl md:text-5xl font-bold text-primary"><?php echo esc_html($services_title); ?></h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php if (function_exists('have_rows') && have_rows('services_list')): ?>
                    <?php while (have_rows('services_list')): the_row(); 
                        $srv_img = get_sub_field('service_image');
                        $srv_title = get_sub_field('service_title');
                        $srv_desc = get_sub_field('service_description');
                        $srv_link = get_sub_field('service_link');
                        $srv_highlight = get_sub_field('is_highlighted');
                    ?>
                    <div class="group bg-surface-container-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all border border-outline-variant/10 text-center <?php echo $srv_highlight ? 'scale-105 z-10 agni-gradient' : ''; ?>">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 <?php echo $srv_highlight ? 'border-white/30' : 'border-secondary-container'; ?> p-1">
                            <img alt="<?php echo esc_attr($srv_title); ?>" class="w-full h-full object-cover rounded-full" src="<?php echo esc_url($srv_img); ?>" />
                        </div>
                        <h3 class="font-headline text-2xl font-bold mb-4 <?php echo $srv_highlight ? 'text-white' : ''; ?>"><?php echo esc_html($srv_title); ?></h3>
                        <p class="<?php echo $srv_highlight ? 'text-on-primary/80' : 'text-on-surface-variant'; ?> mb-6"><?php echo esc_html($srv_desc); ?></p>
                        <a class="<?php echo $srv_highlight ? 'text-white' : 'text-secondary'; ?> font-bold flex items-center justify-center gap-2 group-hover:gap-4 transition-all" href="<?php echo esc_url($srv_link); ?>">
                            View Details <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <!-- Card 1 -->
                    <div class="group bg-surface-container-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all border border-outline-variant/10 text-center">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-secondary-container p-1">
                            <img alt="Puja Preparation" class="w-full h-full object-cover rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvwWihv36WEpxOi11NEHh-lx24rG7R9-Hu8KDT1CylfSkacyH-2g7y4H1SRA4_7g_1pu-Z5KlRHBafWHuymqHtA-_auS1W7jRE-xfJIJwHHwZmlSbwN3ZfQNxudHfL2jz6NTeEQtQxLdRYBDdyJg8gfK-Qi0iobB6VgBQVKUgM3vOkqTZxyhzOfh1e-Z1OrsOVWbTPzA4B7o80izQE4A4h1uiCbIZbkka8eyZX_PDAJNXW-GsCX4fOu74FQ0wsw2aok82SpR8-xTc" />
                        </div>
                        <h3 class="font-headline text-2xl font-bold mb-4">Kal Sarp Puja</h3>
                        <p class="text-on-surface-variant mb-6">A specialized ritual to harmonize planetary influences and bring balance to one's destiny.</p>
                        <a class="text-secondary font-bold flex items-center justify-center gap-2 group-hover:gap-4 transition-all" href="#">
                            View Details <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                    <!-- Card 2 -->
                    <div class="group bg-surface-container-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all border border-outline-variant/10 text-center scale-105 z-10 agni-gradient">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-white/30 p-1">
                            <img alt="Rudra Abhishek" class="w-full h-full object-cover rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVwGVjWa1Ym08f0cqiL-3ziUSUjysYPvWLnoZXT8dG8bzyE1GL1ZreQEdqSAodNYAk_WTXAStksAsnialSwQNByIYcHdiavmjXrHsMsrdHCfJqIvDjB0Ml7y01zRCmcfjCRL5smYf_hgPPaNFW122GyK2BiQiCIsvUwGfLu48veZmTCYk5vo7lymadwids-ooLfTCuGiFBcvyRRuzBSBeU-q8NgzLWW-YER6iXEEBlt_cCqr-3ZIj6ngHHEVsKwChlUKhOROkYjiU" />
                        </div>
                        <h3 class="font-headline text-2xl font-bold mb-4 text-white">Rudra Abhishek</h3>
                        <p class="text-on-primary/80 mb-6">Experience the transformative power of Shiva through this ancient water-offering ceremony.</p>
                        <a class="text-white font-bold flex items-center justify-center gap-2 group-hover:gap-4 transition-all" href="#">
                            View Details <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                    <!-- Card 3 -->
                    <div class="group bg-surface-container-lowest p-8 rounded-xl shadow-sm hover:shadow-xl transition-all border border-outline-variant/10 text-center">
                        <div class="w-32 h-32 mx-auto mb-6 rounded-full overflow-hidden border-4 border-secondary-container p-1">
                            <img alt="Vivah Puja" class="w-full h-full object-cover rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZ2EJUWBdj3ErrpbXNOysAG_67eRQKWWFgg15kg31-3-yZnUcsFmR-RVjTRJ6y6AYelAYBjMB7NoQXHOYZrN9zgcgoFaChOIYq0J3UaFWtjJhfL1SER-DS4U1z81dSZcgGbXHkyX_EmrtjE5fVp1Al-gztFdb3VVJ1e90X3eXJKdJsEeLD6xvhjozSzzxVKUDDUkiTYBHPqmbWjiQIIpQDeWl8w_1WENtjYUvQA6Tg_jZVV7vA9azQ9LoHN_qGhj2N87mJelNDY54" />
                        </div>
                        <h3 class="font-headline text-2xl font-bold mb-4">Vivah Puja</h3>
                        <p class="text-on-surface-variant mb-6">Sacred wedding ceremonies that bind two souls together through Vedic mantras and rituals.</p>
                        <a class="text-secondary font-bold flex items-center justify-center gap-2 group-hover:gap-4 transition-all" href="#">
                            View Details <span class="material-symbols-outlined">arrow_forward</span>
                        </a>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Lessons: Life Wisdom -->
        <?php
        $lessons_subtitle = $get_val('lessons_subtitle', 'Vedic Insights');
        $lessons_title = $get_val('lessons_title', 'Some Important Life Lessons From Gita.');
        $lessons_video_thumb = $get_val('lessons_video_thumbnail', 'https://lh3.googleusercontent.com/aida-public/AB6AXuBur5tgfhA-E_on4asAictNZQwakgWERPiydr5iowjimQLtGCbb40D6xHztjwiSiRlaGFOJQ0xuFH2o9hvmbvkRpW0nYJpFpcodbzoEhKhly6ZST5e-eWmmi_OPwbnk9f8BVS7Sg0CcGDBQaiYFblEvLXx1uzk1gQkC3ZfhiMu9_RcEswQ2jj2xgiOhOLEZVNnC1ngtxVSVJcmXxkWWaxi59drSMcybMA1Ul-op4bR48KjPJaMYBaLHCc092PE8G75t8bzf1GcVnLc');
        ?>
        <section class="py-24 bg-primary text-on-primary">
            <div class="container mx-auto px-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                    <div class="md:w-1/2">
                        <p class="font-label text-secondary-fixed font-bold tracking-widest uppercase mb-4"><?php echo esc_html($lessons_subtitle); ?></p>
                        <h2 class="font-headline text-4xl md:text-5xl font-bold mb-8"><?php echo esc_html($lessons_title); ?></h2>
                        <ul class="space-y-4 mb-8">
                        <?php if (function_exists('have_rows') && have_rows('lessons_list')): ?>
                            <?php while (have_rows('lessons_list')): the_row(); ?>
                                <li class="flex items-center gap-4">
                                    <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                                    <span><?php echo esc_html(get_sub_field('lesson_text')); ?></span>
                                </li>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <li class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                                <span>The power of selfless action without attachment.</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                                <span>Conquering the mind is the highest victory.</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                                <span>Understanding the eternal nature of the soul.</span>
                            </li>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <div class="md:w-1/2 relative">
                        <div
                            class="aspect-video bg-stone-900 rounded-xl overflow-hidden relative shadow-2xl group cursor-pointer">
                            <img alt="Gita Lesson"
                                class="w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform"
                                src="<?php echo esc_url($lessons_video_thumb); ?>" />
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div
                                    class="w-20 h-20 bg-secondary rounded-full flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-4xl text-white ml-1"
                                        data-icon="play_arrow" data-weight="fill">play_arrow</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Form: General Query -->
        <?php
        $form_subtitle = $get_val('form_subtitle', 'General Query');
        $form_desc = $get_val('form_description', 'Have questions about our rituals or services? We\'re here to help.');
        $form_shortcode = $get_val('form_shortcode', ''); // e.g. [contact-form-7 id="123" title="Contact form 1"]
        ?>
        <section class="py-24 relative">
            <div class="absolute inset-0 z-0">
                <img alt="Background" class="w-full h-full object-cover grayscale opacity-10"
                    data-alt="Subtle textured background of a stone temple wall with soft mountain mist"
                    src="<?php echo esc_url($get_val('form_background_image', 'https://lh3.googleusercontent.com/aida-public/AB6AXuCxmRSfR2Rf4sQibMZnrvxX-5vrYRXpLuLXuXBYWxRU5UhZplScxzMbA-7ZA56x27shuzjcMAsaHVoSete-sOfjwZAl_ihXujIfH2wRb0hApWwYsUH-PS44J7lIHQZqV6ZFOE_nQ8FQAQJInv45fNgC2sk3i9U55xJHv1XzWWEQIkWeOxtdZh9JZt5ZPn9aZ8661-Qy0RIKeAhyLSyFTgB5FkHYtnMYiO7qvCv5rpOMpoaNHL1yfHK5Wov91HiQb51GpLXSQ7A93tU')); ?>" />
            </div>
            <div class="container mx-auto px-8 relative z-10">
                <div
                    class="max-w-4xl mx-auto bg-surface-container-lowest rounded-2xl shadow-2xl p-8 md:p-16 border border-outline-variant/10">
                    <div class="text-center mb-12">
                        <h2 class="font-headline text-3xl font-bold text-primary mb-2"><?php echo esc_html($form_subtitle); ?></h2>
                        <p class="text-on-surface-variant"><?php echo esc_html($form_desc); ?></p>
                    </div>
                    <?php if ($form_shortcode) : ?>
                        <?php echo do_shortcode($form_shortcode); ?>
                    <?php else: ?>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <label class="font-label text-xs font-bold uppercase mb-2 text-stone-500">Full Name</label>
                            <input
                                class="bg-surface-container-low border-none border-b-2 border-outline focus:ring-0 focus:border-primary px-4 py-3 rounded-t-md transition-colors"
                                placeholder="Your Name" type="text" />
                        </div>
                        <div class="flex flex-col">
                            <label class="font-label text-xs font-bold uppercase mb-2 text-stone-500">Email
                                Address</label>
                            <input
                                class="bg-surface-container-low border-none border-b-2 border-outline focus:ring-0 focus:border-primary px-4 py-3 rounded-t-md transition-colors"
                                placeholder="Your Email" type="email" />
                        </div>
                        <div class="flex flex-col">
                            <label class="font-label text-xs font-bold uppercase mb-2 text-stone-500">Phone
                                Number</label>
                            <input
                                class="bg-surface-container-low border-none border-b-2 border-outline focus:ring-0 focus:border-primary px-4 py-3 rounded-t-md transition-colors"
                                placeholder="Your Phone" type="tel" />
                        </div>
                        <div class="flex flex-col">
                            <label class="font-label text-xs font-bold uppercase mb-2 text-stone-500">Subject</label>
                            <input
                                class="bg-surface-container-low border-none border-b-2 border-outline focus:ring-0 focus:border-primary px-4 py-3 rounded-t-md transition-colors"
                                placeholder="Puja Inquiry" type="text" />
                        </div>
                        <div class="flex flex-col md:col-span-2">
                            <label class="font-label text-xs font-bold uppercase mb-2 text-stone-500">Your
                                Message</label>
                            <textarea
                                class="bg-surface-container-low border-none border-b-2 border-outline focus:ring-0 focus:border-primary px-4 py-3 rounded-t-md transition-colors"
                                placeholder="How can we assist you?" rows="4"></textarea>
                        </div>
                        <div class="md:col-span-2 text-center mt-4">
                            <button
                                class="agni-gradient text-white px-12 py-4 rounded-md font-bold shadow-lg hover:shadow-primary/20 transition-all">Submit
                                Inquiry</button>
                        </div>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Testimonials -->
        <section class="py-24 bg-surface-container-high">
            <div class="container mx-auto px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <span class="material-symbols-outlined text-6xl text-secondary opacity-30 mb-8"
                        data-icon="format_quote">format_quote</span>
                    <h2 class="font-headline text-3xl font-bold mb-10 text-on-surface"><?php echo esc_html($get_val('testimonials_title', 'What Our Customers Are Saying')); ?></h2>
                    
                    <?php if (function_exists('have_rows') && have_rows('testimonials_list')): ?>
                        <div class="testimonials-wrapper">
                        <?php while (have_rows('testimonials_list')): the_row(); ?>
                            <div class="mb-12">
                                <p class="text-xl italic leading-relaxed text-on-surface-variant mb-8">"<?php echo esc_html(get_sub_field('testimonial_text')); ?>"</p>
                                <div class="flex flex-col items-center">
                                    <img alt="<?php echo esc_attr(get_sub_field('author_name')); ?>" class="w-16 h-16 rounded-full border-2 border-primary mb-4 object-cover"
                                        src="<?php echo esc_url(get_sub_field('author_image')); ?>" />
                                    <h4 class="font-bold text-lg"><?php echo esc_html(get_sub_field('author_name')); ?></h4>
                                    <p class="text-sm text-secondary font-bold"><?php echo esc_html(get_sub_field('author_title')); ?></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        </div>
                    <?php else: ?>
                    <p class="text-xl italic leading-relaxed text-on-surface-variant mb-12">"The Rudra Abhishek puja
                        performed by the priests at Sacred Editorial was a deeply moving experience. I felt a profound
                        sense of peace and clarity. Highly recommend their authentic services."</p>
                    <div class="flex flex-col items-center">
                        <img alt="Michael" class="w-16 h-16 rounded-full border-2 border-primary mb-4"
                            data-alt="Portrait of a smiling professional man in a clean, natural light setting"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6IjXn_Tq2tOhtbcXs5M640jfLdO_dx2lZ3R2ClK-taduoWZJH-OU-6CVKlg_I53JOP_7po7uyA7nO6TO8HtOZIfCcDzYaW1tj1sQlg7agBEBz909zKJASgEwQzYjCNhgEco3a76xtf3CS016Rbjn3Wr7ppD9oopJE0yBDTP7HcFcFDbPs59XrtVL9FZ65D9duPSizBa6512vwati2r-30edKaXIXjlZYfLBNc37gyHjYbhKUfIlBXi7rIQZVon8cfmW5AyK8xNVE" />
                        <h4 class="font-bold text-lg">Michael Anderson</h4>
                        <p class="text-sm text-secondary font-bold">Devoted Client</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- Latest News -->
        <?php
        $news_subtitle = $get_val('news_subtitle', 'Editorial');
        $news_title = $get_val('news_title', 'Our Latest News');
        ?>
        <section class="py-24 bg-surface">
            <div class="container mx-auto px-8">
                <div class="flex justify-between items-end mb-16">
                    <div>
                        <p class="font-label text-secondary font-bold tracking-widest uppercase mb-2"><?php echo esc_html($news_subtitle); ?></p>
                        <h2 class="font-headline text-4xl font-bold text-primary"><?php echo esc_html($news_title); ?></h2>
                    </div>
                    <a class="hidden md:flex items-center gap-2 text-secondary font-bold hover:gap-4 transition-all"
                        href="<?php echo get_permalink(get_option('page_for_posts')); ?>">
                        Browse Blog <span class="material-symbols-outlined"
                            data-icon="trending_flat">trending_flat</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    <?php
                    $latest_news = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post_status' => 'publish'
                    ));

                    if ($latest_news->have_posts()) :
                        while ($latest_news->have_posts()) : $latest_news->the_post();
                            $categories = get_the_category();
                            $cat_name = !empty($categories) ? $categories[0]->name : 'Uncategorized';
                    ?>
                        <article class="group">
                            <div class="aspect-[4/3] rounded-xl overflow-hidden mb-6">
                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img alt="<?php the_title_attribute(); ?>"
                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                            src="<?php the_post_thumbnail_url('medium_large'); ?>" />
                                    </a>
                                <?php else : ?>
                                    <div class="w-full h-full bg-surface-container-high flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                        <span class="material-symbols-outlined text-6xl text-on-surface-variant/30">image</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="flex items-center gap-4 mb-3 text-sm text-on-surface-variant">
                                <span class="font-bold text-secondary uppercase tracking-tighter"><?php echo esc_html($cat_name); ?></span>
                                <span><?php echo get_the_date(); ?></span>
                            </div>
                            <h3 class="font-headline text-xl font-bold mb-4 group-hover:text-primary transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <div class="text-on-surface-variant mb-4 line-clamp-2">
                                <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                            </div>
                        </article>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    else : 
                    ?>
                    <!-- Fallback static News 1 -->
                    <article class="group">
                        <div class="aspect-[4/3] rounded-xl overflow-hidden mb-6">
                            <img alt="Temple News"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                data-alt="A brightly lit colorful temple gopuram against a clear blue sky"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAc8mrmwbYYvvkeZpPDA1I84DsWIEsY5_aGlGr1FdzqQnuudEcjhv_TgCaclZmEakIiCVOonS6F12chn0Lu1DNbPLIEXVnSXkh9-EXAgreOV7QrDgVjmHCKO6jR_tsLde_294eNpmBRIxZ0sRmeU6o9RPyjcnrWKVG-b55-fWPY2TIQxWIKgkHgzMZrwk_mGD7oD0olw-V9YrOxBa58Vqr9q4y0G95PnxXeNfKdm_JKEvsz2e-u8s3LR5xftKUBjMTjyjMcPb2TaBw" />
                        </div>
                        <div class="flex items-center gap-4 mb-3 text-sm text-on-surface-variant">
                            <span class="font-bold text-secondary uppercase tracking-tighter">Ceremony</span>
                            <span>May 12, 2024</span>
                        </div>
                        <h3 class="font-headline text-xl font-bold mb-4 group-hover:text-primary transition-colors">
                            Preparing for the Mahashivratri Celebrations</h3>
                        <p class="text-on-surface-variant mb-4 line-clamp-2">Learn about the special arrangements and
                            spiritual significance of the upcoming festival...</p>
                    </article>
                    <!-- Fallback static News 2 -->
                    <article class="group">
                        <div class="aspect-[4/3] rounded-xl overflow-hidden mb-6">
                            <img alt="Puja Samagri"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                data-alt="Hands holding a variety of aromatic Indian spices and flowers in a sacred basket"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1GFgX52rGFFbRCx2pzz6Q1RxxRI6DfX6eq2QHq9-cf2E2mzfhDc1yCUNiomHmc0473t6hbbl2nuZHCNUIpWlsTVIZscU4gcOB79eAbzrXmCkoMK3Dsy4tWdQHtSJ9q2q8dHQW61Q9R-NZ2bdxd4YjjDL2rXOEDLwloldMOPeDhcIJ_Ib_Rm7C1y6_aipEo2Uqlc9JuesYYpEfnCD_e8qHhASZNQEQiM5N2MGVRTzJnn9E-LxcJqCXwEMRWr5082ePxfX9YOzEs30" />
                        </div>
                        <div class="flex items-center gap-4 mb-3 text-sm text-on-surface-variant">
                            <span class="font-bold text-secondary uppercase tracking-tighter">Wisdom</span>
                            <span>April 28, 2024</span>
                        </div>
                        <h3 class="font-headline text-xl font-bold mb-4 group-hover:text-primary transition-colors">The
                            Scientific Significance of Traditional Mantras</h3>
                        <p class="text-on-surface-variant mb-4 line-clamp-2">A deep dive into how Vedic sound vibrations
                            affect our consciousness and environment...</p>
                    </article>
                    <!-- Fallback static News 3 -->
                    <article class="group">
                        <div class="aspect-[4/3] rounded-xl overflow-hidden mb-6">
                            <img alt="Spirituality"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                data-alt="Warm golden glow from multiple oil lamps inside a dim sacred prayer room"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB0DbQDhyVzvR7SOcnVs8yxSAsPkYddceX9Vs0iS4y7VKLc6bm7vmVzrbIlef7G9mHc7SZnPSvwxN5UFJygMboL4u1h-h-NkQT6OJhylBtTDOxWVH0mxPoB50fe0hYEhEtZWEefSZg9Bx_dR62XEYhaS89kb0l7-rTZepdxSgqYLkQ1fcIRK4_Dyg1-Gj3w32tPMljm5jLaGZgyQaU99mDD_vUirfsFfpPAtKBVKhECkwxDQSFkf2QAY39F_ihU6fe8GWGvLcyMd5U" />
                        </div>
                        <div class="flex items-center gap-4 mb-3 text-sm text-on-surface-variant">
                            <span class="font-bold text-secondary uppercase tracking-tighter">Community</span>
                            <span>April 15, 2024</span>
                        </div>
                        <h3 class="font-headline text-xl font-bold mb-4 group-hover:text-primary transition-colors">New
                            Meditation Center Opening in the City</h3>
                        <p class="text-on-surface-variant mb-4 line-clamp-2">Joining together to create a sacred space
                            for quiet reflection and shared devotion...</p>
                    </article>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    \n</main>\n<?php get_footer(); ?>\n