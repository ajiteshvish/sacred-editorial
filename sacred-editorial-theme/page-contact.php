<?php\n/*\n Template Name: Contact Us\n*/\n?>\n<?php get_header(); ?>\n<main>\n
        <!-- Hero Section -->
        <section class="relative h-[400px] flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img alt="Spiritual Background" class="w-full h-full object-cover brightness-[0.4]"
                    data-alt="atmospheric view of a traditional hindu temple at dawn with soft morning mist and golden sunlight glowing behind ancient stone carvings"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTdAAjO5WyXI2l6TFtav9VOA2xFZReG8l8YjsgN3nkO80bg0WMld7KvwILouG7Xmaq3IXbAKHLm4SPnJ2dFtsodP6HInUq-mwIOHoBRW2KCW30ktwuHD0L6ht5GUZMKK77UwWG8GP3QuuIhdACzasKrJuP6qJGLF2Vj5ECWFq8ljlyioiF0CNvNJ-tmSbqP4NZ1GWw83OJoZp62JixOTHjbvFQSc9OHe-Di2Xr5OK5fzJktn6t-jtc_pBzULHyHoOwBOT8nRFzQe8" />
            </div>
            <div class="relative z-10 text-center px-4">
                <span class="font-label text-secondary uppercase tracking-[0.2em] text-sm mb-4 block">Get In
                    Touch</span>
                <h1 class="font-headline text-5xl md:text-7xl text-white mb-6 font-bold tracking-tight">Contact Us</h1>
                <nav class="flex justify-center items-center gap-3 text-white/80 font-medium">
                    <a class="hover:text-white transition-colors" href="#">Home</a>
                    <span class="material-symbols-outlined text-sm" data-icon="chevron_right">chevron_right</span>
                    <span class="text-white">Contact Us</span>
                </nav>
            </div>
        </section>
        <!-- Contact Info Grid -->
        <section class="py-24 px-8 max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Office Card -->
                <div
                    class="bg-surface-container-low p-10 rounded-lg text-center transition-all hover:bg-surface-container hover:-translate-y-1">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-6">
                        <span class="material-symbols-outlined text-3xl" data-icon="location_on">location_on</span>
                    </div>
                    <h3 class="font-headline text-2xl mb-4">Our Office</h3>
                    <p class="text-on-surface-variant leading-relaxed">
                        108 Sacred Path, Temple District,<br />
                        Varanasi, Uttar Pradesh 221001
                    </p>
                </div>
                <!-- Call Us Card -->
                <div
                    class="bg-surface-container-low p-10 rounded-lg text-center transition-all hover:bg-surface-container hover:-translate-y-1">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-6">
                        <span class="material-symbols-outlined text-3xl" data-icon="call">call</span>
                    </div>
                    <h3 class="font-headline text-2xl mb-4">Call Us</h3>
                    <p class="text-on-surface-variant leading-relaxed">
                        +91 542 234 5678<br />
                        +91 987 654 3210
                    </p>
                </div>
                <!-- Email Card -->
                <div
                    class="bg-surface-container-low p-10 rounded-lg text-center transition-all hover:bg-surface-container hover:-translate-y-1">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 text-primary mb-6">
                        <span class="material-symbols-outlined text-3xl" data-icon="mail">mail</span>
                    </div>
                    <h3 class="font-headline text-2xl mb-4">Email Us</h3>
                    <p class="text-on-surface-variant leading-relaxed">
                        support@sacrededitorial.com<br />
                        info@sacrededitorial.com
                    </p>
                </div>
            </div>
        </section>
        <!-- Inquiry Form & Map -->
        <section class="bg-surface-container-low py-24">
            <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
                <!-- Form -->
                <div class="bg-surface-container-lowest p-8 md:p-12 rounded-xl shadow-sm">
                    <div class="mb-10">
                        <span
                            class="font-label text-secondary uppercase tracking-widest text-xs mb-2 block">Connect</span>
                        <h2 class="font-headline text-4xl mb-4">Get In Touch</h2>
                        <p class="text-on-surface-variant">Fill out the form below and our spiritual guides will reach
                            out to you within 24 hours.</p>
                    </div>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="font-label text-xs uppercase tracking-wide text-on-surface-variant">Full
                                    Name</label>
                                <input
                                    class="w-full bg-surface-container-low border-none border-b-2 border-transparent focus:ring-0 focus:border-primary px-4 py-3 rounded-lg transition-all"
                                    placeholder="Enter your name" type="text" />
                            </div>
                            <div class="space-y-2">
                                <label class="font-label text-xs uppercase tracking-wide text-on-surface-variant">Email
                                    Address</label>
                                <input
                                    class="w-full bg-surface-container-low border-none border-b-2 border-transparent focus:ring-0 focus:border-primary px-4 py-3 rounded-lg transition-all"
                                    placeholder="Enter your email" type="email" />
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="font-label text-xs uppercase tracking-wide text-on-surface-variant">Phone
                                    Number</label>
                                <input
                                    class="w-full bg-surface-container-low border-none border-b-2 border-transparent focus:ring-0 focus:border-primary px-4 py-3 rounded-lg transition-all"
                                    placeholder="Optional" type="tel" />
                            </div>
                            <div class="space-y-2">
                                <label
                                    class="font-label text-xs uppercase tracking-wide text-on-surface-variant">Subject</label>
                                <input
                                    class="w-full bg-surface-container-low border-none border-b-2 border-transparent focus:ring-0 focus:border-primary px-4 py-3 rounded-lg transition-all"
                                    placeholder="What is this about?" type="text" />
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label
                                class="font-label text-xs uppercase tracking-wide text-on-surface-variant">Message</label>
                            <textarea
                                class="w-full bg-surface-container-low border-none border-b-2 border-transparent focus:ring-0 focus:border-primary px-4 py-3 rounded-lg transition-all resize-none"
                                placeholder="How can we help you?" rows="5"></textarea>
                        </div>
                        <button
                            class="agni-gradient w-full text-white font-bold py-4 rounded-lg uppercase tracking-widest text-sm hover:opacity-90 transition-opacity"
                            type="submit">
                            Send Message
                        </button>
                    </form>
                </div>
                <!-- Map -->
                <div class="h-full min-h-[500px] relative rounded-xl overflow-hidden grayscale contrast-125">
                    <img alt="Map Placeholder" class="w-full h-full object-cover"
                        data-alt="a minimalist topographic map styled in cream and deep red tones showing a city grid layout with a prominent marker near a temple site"
                        data-location="Varanasi"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIGSSGIPSmFMhdW930FoOpdKsrg0lEUMTvL2qknoG54GYffU4-Wa56X3mpilITzvfeMxrVaIL2nNGsA8aWWgwaDrz6VktiSxCAl5jr_Pq0peZEbVNCwFAc2Ispe6lZijZL0ErSzbrMqOXNxD89lXzeGh48JeBD0DVf8ij7FPQvNM-aYJnSdWqMpVzkBIl91xnnCvvqOHDGerMQEHn14_grXoDAjjcwIm28jvUgRQ-22Pj6UYrMDYBM08n10LsmuPNw_vqVMouKCLw" />
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20 pointer-events-none">
                        <div class="bg-surface p-6 rounded-lg text-center shadow-2xl border-t-4 border-primary">
                            <span class="material-symbols-outlined text-primary text-4xl mb-2" data-icon="location_pin"
                                style="font-variation-settings: 'FILL' 1;">location_pin</span>
                            <h4 class="font-headline font-bold">Sacred Editorial Headquarters</h4>
                            <p class="text-sm text-on-surface-variant">Varanasi Temple Square</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Social Media Section -->
        <section class="py-16 text-center">
            <h2 class="font-label text-xs uppercase tracking-[0.3em] text-secondary mb-8">Follow Our Spiritual Journey
            </h2>
            <div class="flex justify-center gap-8">
                <a class="group flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="public">public</span>
                    <span class="font-bold">Facebook</span>
                </a>
                <a class="group flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="camera">camera</span>
                    <span class="font-bold">Instagram</span>
                </a>
                <a class="group flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="alternate_email">alternate_email</span>
                    <span class="font-bold">Twitter</span>
                </a>
                <a class="group flex items-center gap-2 text-on-surface-variant hover:text-primary transition-colors"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="play_circle">play_circle</span>
                    <span class="font-bold">YouTube</span>
                </a>
            </div>
        </section>
    \n</main>\n<?php get_footer(); ?>\n