<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&amp;family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-primary": "#ffffff",
                        "surface-dim": "#dcd9d9",
                        "secondary-fixed": "#ffdcc3",
                        "on-tertiary-fixed-variant": "#930000",
                        "on-error-container": "#93000a",
                        "surface-tint": "#bc1518",
                        "primary-fixed": "#ffdad6",
                        "error-container": "#ffdad6",
                        "on-primary-fixed": "#410002",
                        "background": "#fcf9f8",
                        "on-secondary": "#ffffff",
                        "tertiary": "#980000",
                        "on-tertiary-container": "#ffd3cc",
                        "surface-container-high": "#eae7e7",
                        "error": "#ba1a1a",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#ffdad4",
                        "on-secondary-fixed-variant": "#6e3900",
                        "primary": "#98000b",
                        "on-surface": "#1c1b1b",
                        "on-surface-variant": "#5c403d",
                        "primary-fixed-dim": "#ffb4ab",
                        "on-background": "#1c1b1b",
                        "on-primary-container": "#ffd3ce",
                        "surface-container-low": "#f6f3f2",
                        "tertiary-container": "#bf1c10",
                        "on-error": "#ffffff",
                        "on-secondary-fixed": "#2f1500",
                        "inverse-primary": "#ffb4ab",
                        "surface-variant": "#e5e2e1",
                        "on-primary-fixed-variant": "#93000a",
                        "on-tertiary-fixed": "#410000",
                        "secondary": "#904d00",
                        "surface": "#fcf9f8",
                        "outline": "#906f6b",
                        "inverse-on-surface": "#f3f0ef",
                        "on-secondary-container": "#603100",
                        "surface-bright": "#fcf9f8",
                        "tertiary-fixed-dim": "#ffb4a8",
                        "outline-variant": "#e5bdb9",
                        "surface-container-highest": "#e5e2e1",
                        "surface-container-lowest": "#ffffff",
                        "secondary-fixed-dim": "#ffb77d",
                        "secondary-container": "#fd8b00",
                        "primary-container": "#c0191b",
                        "surface-container": "#f0eded",
                        "inverse-surface": "#313030"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "fontFamily": {
                        "headline": ["Noto Serif"],
                        "body": ["Plus Jakarta Sans"],
                        "label": ["Plus Jakarta Sans"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .agni-gradient {
            background: linear-gradient(135deg, #98000b 0%, #c0191b 100%);
        }

        .glass-nav {
            background: rgba(252, 249, 248, 0.7);
            backdrop-filter: blur(12px);
        }

        .text-shadow-sm {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
<?php wp_head(); ?>
</head>

<body <?php body_class("bg-background text-on-background font-body antialiased"); ?>>
    <!-- TopAppBar -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-nav border-b border-outline-variant/15">
        <nav class="flex justify-between items-center w-full px-8 py-4 max-w-screen-2xl mx-auto">
            <div class="text-2xl font-bold text-[#98000b] dark:text-red-500 font-serif">Sacred Editorial</div>
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <?php
                $active_class = 'text-[#98000b] dark:text-red-400 border-b-2 border-[#c0191b] pb-1 font-bold font-serif tracking-tight text-lg';
                $inactive_class = 'text-stone-600 dark:text-stone-400 hover:text-[#98000b] transition-colors font-serif tracking-tight text-lg';
                ?>
                <a class="<?php echo is_front_page() || is_home() ? $active_class : $inactive_class; ?>"
                    href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                <a class="<?php echo is_page('about-us') ? $active_class : $inactive_class; ?>"
                    href="<?php echo esc_url(home_url('/about-us')); ?>">About Us</a>
                <a class="<?php echo is_page('puja') ? $active_class : $inactive_class; ?>"
                    href="<?php echo esc_url(home_url('/puja')); ?>">Puja</a>
                <a class="<?php echo is_home() || is_archive() || is_single() ? $active_class : $inactive_class; ?>"
                    href="<?php echo esc_url(get_permalink(get_option('page_for_posts')) ?: home_url('/blog')); ?>">Blogs</a>
                <a class="<?php echo is_page('contact') ? $active_class : $inactive_class; ?>"
                    href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a>
            </div>
            <div class="flex items-center space-x-4">
                <span
                    class="material-symbols-outlined text-[#98000b] cursor-pointer p-2 hover:bg-stone-200/50 rounded-full transition-colors"
                    data-icon="call">call</span>
                <span
                    class="material-symbols-outlined text-[#98000b] cursor-pointer p-2 hover:bg-stone-200/50 rounded-full transition-colors"
                    data-icon="mail">mail</span>
                <button class="md:hidden material-symbols-outlined text-[#98000b]" data-icon="menu">menu</button>
            </div>
        </nav>
    </header>