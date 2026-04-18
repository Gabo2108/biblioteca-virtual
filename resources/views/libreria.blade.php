    <!DOCTYPE html>

    <html class="light" lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Open Library | Lexicon Archive</title>
        <!-- Fonts: Newsreader for Serif, Manrope for Sans, Inter for Labels -->
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Manrope:wght@200..800&amp;family=Inter:wght@100..900&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "surface-variant": "#e1e3e4",
                            "on-surface": "#191c1d",
                            "on-secondary-fixed-variant": "#0e5138",
                            "primary-container": "#1a365d",
                            "surface": "#f8f9fa",
                            "on-tertiary-container": "#00b1a4",
                            "on-background": "#191c1d",
                            "surface-dim": "#d9dadb",
                            "surface-container-low": "#f3f4f5",
                            "secondary": "#2c694e",
                            "on-primary-fixed": "#001b3c",
                            "inverse-on-surface": "#f0f1f2",
                            "surface-tint": "#455f88",
                            "inverse-surface": "#2e3132",
                            "outline": "#74777f",
                            "on-primary-fixed-variant": "#2d476f",
                            "tertiary-container": "#003d38",
                            "on-tertiary-fixed-variant": "#005049",
                            "error": "#ba1a1a",
                            "background": "#f8f9fa",
                            "on-primary": "#ffffff",
                            "surface-container-highest": "#e1e3e4",
                            "on-secondary": "#ffffff",
                            "primary-fixed": "#d6e3ff",
                            "on-secondary-container": "#316e52",
                            "on-error-container": "#93000a",
                            "tertiary-fixed-dim": "#3adccc",
                            "surface-container-lowest": "#ffffff",
                            "secondary-fixed-dim": "#95d4b3",
                            "on-primary-container": "#86a0cd",
                            "error-container": "#ffdad6",
                            "on-secondary-fixed": "#002114",
                            "primary-fixed-dim": "#adc7f7",
                            "surface-container": "#edeeef",
                            "on-surface-variant": "#43474e",
                            "secondary-container": "#aeeecb",
                            "surface-container-high": "#e7e8e9",
                            "on-tertiary-fixed": "#00201d",
                            "primary": "#002045",
                            "outline-variant": "#c4c6cf",
                            "tertiary": "#002522",
                            "surface-bright": "#f8f9fa",
                            "secondary-fixed": "#b1f0ce",
                            "inverse-primary": "#adc7f7",
                            "on-tertiary": "#ffffff",
                            "tertiary-fixed": "#61f9e9",
                            "on-error": "#ffffff"
                        },
                        "borderRadius": {
                            "DEFAULT": "0.125rem",
                            "lg": "0.25rem",
                            "xl": "0.5rem",
                            "full": "0.75rem"
                        },
                        "fontFamily": {
                            "headline": ["Newsreader", "serif"],
                            "body": ["Manrope", "sans-serif"],
                            "label": ["Inter", "sans-serif"]
                        }
                    },
                },
            }
        </script>
        <style>
            body {
                font-family: 'Manrope', sans-serif;
            }

            .font-serif {
                font-family: 'Newsreader', serif;
            }

            .material-symbols-outlined {
                font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            }

            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }
        </style>
    </head>

    <body class="bg-surface text-on-surface selection:bg-secondary-container selection:text-on-secondary-container">
        <!-- TopNavBar -->
        <header class="fixed top-0 w-full z-50 bg-slate-50/80 dark:bg-slate-950/80 backdrop-blur-xl shadow-sm">
            <nav class="flex justify-between items-center px-8 py-4 max-w-screen-2xl mx-auto">
                <a href="/"><span class="font-newsreader text-2xl font-bold italic tracking-tight text-[#002045] dark:text-slate-100"> Blioteca Ec <span class="material-symbols-outlined">Explore</span></span></a>
                <div class="hidden md:flex items-center space-x-8 font-serif newsreader tracking-tight">

                </div>
                <div class="flex items-center gap-4">
                    <button class="material-symbols-outlined text-blue-900 dark:text-blue-200 cursor-pointer active:opacity-70 p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">account_circle</button>
                </div>
            </nav>
        </header>
        <!-- Main Content Container -->
        <main class="pt-24 pb-12 px-8 max-w-screen-2xl mx-auto min-h-screen flex flex-col md:flex-row gap-12">
            <!-- Sidebar Filters -->
            <aside class="w-full md:w-64 flex-shrink-0 space-y-10">
                <section>
                    <h3 class="font-serif text-xl font-semibold mb-6 text-primary tracking-tight">Advanced Filters</h3>
                    <!-- Filter Group: Subject -->
                    <div class="mb-8">
                        <span class="font-label text-xs uppercase tracking-widest text-on-surface-variant font-bold mb-4 block">Subject</span>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 cursor-pointer group">
                                <div class="w-4 h-4 rounded-sm border border-outline-variant group-hover:border-secondary transition-colors"></div>
                                <span class="font-body text-sm text-on-surface-variant group-hover:text-on-surface">Philosophy</span>
                            </li>
                            <li class="flex items-center gap-3 cursor-pointer group">
                                <div class="w-4 h-4 rounded-sm bg-secondary border border-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[12px] text-white" style="font-variation-settings: 'wght' 700">check</span>
                                </div>
                                <span class="font-body text-sm text-on-surface font-medium">Classics</span>
                            </li>
                            <li class="flex items-center gap-3 cursor-pointer group">
                                <div class="w-4 h-4 rounded-sm border border-outline-variant group-hover:border-secondary transition-colors"></div>
                                <span class="font-body text-sm text-on-surface-variant group-hover:text-on-surface">Natural Sciences</span>
                            </li>
                            <li class="flex items-center gap-3 cursor-pointer group">
                                <div class="w-4 h-4 rounded-sm border border-outline-variant group-hover:border-secondary transition-colors"></div>
                                <span class="font-body text-sm text-on-surface-variant group-hover:text-on-surface">Political Theory</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Filter Group: Era -->
                    <div class="mb-8">
                        <span class="font-label text-xs uppercase tracking-widest text-on-surface-variant font-bold mb-4 block">Era</span>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 cursor-pointer group">
                                <div class="w-4 h-4 rounded-sm border border-outline-variant group-hover:border-secondary transition-colors"></div>
                                <span class="font-body text-sm text-on-surface-variant group-hover:text-on-surface">Ancient</span>
                            </li>
                            <li class="flex items-center gap-3 cursor-pointer group">
                                <div class="w-4 h-4 rounded-sm border border-outline-variant group-hover:border-secondary transition-colors"></div>
                                <span class="font-body text-sm text-on-surface-variant group-hover:text-on-surface">Enlightenment</span>
                            </li>
                            <li class="flex items-center gap-3 cursor-pointer group">
                                <div class="w-4 h-4 rounded-sm border border-outline-variant group-hover:border-secondary transition-colors"></div>
                                <span class="font-body text-sm text-on-surface-variant group-hover:text-on-surface">Modern</span>
                            </li>
                        </ul>
                    </div>
                    <!-- Filter Group: Format -->
                    <div class="mb-8">
                        <span class="font-label text-xs uppercase tracking-widest text-on-surface-variant font-bold mb-4 block">Format</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1.5 bg-secondary-container text-on-secondary-container text-xs font-label rounded-md cursor-pointer">PDF</span>
                            <span class="px-3 py-1.5 bg-surface-container-high text-on-surface-variant text-xs font-label rounded-md cursor-pointer hover:bg-surface-variant transition-colors">EPUB</span>
                            <span class="px-3 py-1.5 bg-surface-container-high text-on-surface-variant text-xs font-label rounded-md cursor-pointer hover:bg-surface-variant transition-colors">MOBI</span>
                        </div>
                    </div>
                    <!-- Filter Group: Language -->
                    <div class="mb-8">
                        <span class="font-label text-xs uppercase tracking-widest text-on-surface-variant font-bold mb-4 block">Language</span>
                        <select class="w-full bg-surface-container-lowest border-none ring-1 ring-outline-variant/30 rounded-lg text-sm font-body px-3 py-2 focus:ring-secondary">
                            <option>Español</option>
                            <option>English</option>
                            <option>Latin</option>
                            <option>Ancient Greek</option>
                            <option>German</option>
                            <option>French</option>
                        </select>
                    </div>
                </section>
            </aside>
            <!-- Main Content Area -->
            <section class="flex-1">
                <!-- Search and Sort Header -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-6 mb-12">
                    <div class="relative w-full max-w-lg">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none">search</span>
                        <input class="w-full pl-12 pr-4 py-4 bg-surface-container-lowest rounded-xl border-none ring-1 ring-outline-variant/15 font-body text-lg focus:ring-tertiary-container focus:ring-2 shadow-sm transition-all outline-none" placeholder="Search the Open Library..." type="text" />
                    </div>
                    <div class="flex items-center gap-4 w-full sm:w-auto">
                        <span class="font-label text-xs uppercase text-on-surface-variant whitespace-nowrap">Sort By:</span>
                        <div class="flex bg-surface-container-low p-1 rounded-lg">
                            <button class="px-4 py-2 text-xs font-label font-semibold text-secondary bg-surface-container-lowest rounded-md shadow-sm">Newest</button>
                            <button class="px-4 py-2 text-xs font-label text-on-surface-variant hover:text-on-surface transition-colors">Alphabetical</button>
                            <button class="px-4 py-2 text-xs font-label text-on-surface-variant hover:text-on-surface transition-colors">Popularity</button>
                        </div>
                    </div>
                </div>
                <!-- Bento/Grid of Book Covers -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 gap-y-16">
                    <!-- Book Card 1 -->
                    <article class="flex flex-col group">
                        <div class="aspect-[2/3] w-full bg-surface-container-highest overflow-hidden relative mb-6 rounded-sm shadow-md transition-transform duration-500 group-hover:-translate-y-2">
                            <img class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700" data-alt="classic book cover with minimalist typography on aged cream paper, soft studio lighting, high-end editorial style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLYRNWpAOdRx-iZOQhKl3K58haOqLe_-s59fP9pbDBVeI_8yhHtB50eghRaUm1axuGJy7O-TTj2MtYSkmU_KXjuLYXixQDgLvEQn8Mr9JOFPgdUY_SEfb58xGVOY4Fdsngz7gKMJV10Q7yGVE5bkJTZAJdaXvSkHFN-RgdRHfRQsCMH-OfcA7sFXByCbR7hQMOOUQGzp_jPvFeTeC5VjYnlf1-nEi19c29IyK4iqCi5Mr1I4RI3rfh9OdeOBORppYyADsRb1m_g3hB" />
                            <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="space-y-2">
                            <span class="font-label text-[10px] uppercase tracking-widest text-secondary font-bold">PDF • Philosophy</span>
                            <h4 class="font-serif text-xl font-bold text-on-surface leading-tight tracking-tight">The Republic</h4>
                            <p class="font-label text-xs text-on-surface-variant">Plato</p>
                            <div class="pt-4 flex items-center gap-3">
                                <button class="flex-1 bg-primary text-on-primary py-2.5 text-xs font-label rounded-md font-semibold hover:bg-primary-container transition-colors">Read PDF</button>
                                <button class="p-2.5 ring-1 ring-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container transition-colors">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Book Card 2 -->
                    <article class="flex flex-col group">
                        <div class="aspect-[2/3] w-full bg-surface-container-highest overflow-hidden relative mb-6 rounded-sm shadow-md transition-transform duration-500 group-hover:-translate-y-2">
                            <img class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700" data-alt="ancient leather bound book sitting on a dark wooden table in a sun-drenched library, soft natural light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAKl887-WLGiVYA1F4_bN-vE_minlN-7DWu3NMixMDJ4SoVtknQeNTln9g6TuP38IZAvERInTIL960i3zYGaVZu8w2KEMlgO903Ev9AWSr8mTgTNsjB4v8O3qODwTMX-VUFpRkQ5JW6U_jW-INezLNoek0uBY_k6Z9bjCOOvwkTI-gr_CriX-Yo42LDPvryF3e6YJ0hyVST9Xc7rdr9wQrj6Q2SFi57o9GkIHKOOdcUjHrOa7T0KW_e0Cae7iX9K_o5YAw-Ok7WjQN" />
                            <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="space-y-2">
                            <span class="font-label text-[10px] uppercase tracking-widest text-secondary font-bold">PDF • Stoicism</span>
                            <h4 class="font-serif text-xl font-bold text-on-surface leading-tight tracking-tight">Meditations</h4>
                            <p class="font-label text-xs text-on-surface-variant">Marcus Aurelius</p>
                            <div class="pt-4 flex items-center gap-3">
                                <button class="flex-1 bg-primary text-on-primary py-2.5 text-xs font-label rounded-md font-semibold hover:bg-primary-container transition-colors">Read PDF</button>
                                <button class="p-2.5 ring-1 ring-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container transition-colors">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Book Card 3 -->
                    <article class="flex flex-col group">
                        <div class="aspect-[2/3] w-full bg-surface-container-highest overflow-hidden relative mb-6 rounded-sm shadow-md transition-transform duration-500 group-hover:-translate-y-2">
                            <img class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700" data-alt="vintage scientific illustration of a biological organism on a book cover, earthy tones, scholarly aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuRCQdg30wEX1Pl4-lWpwBfbe1ZDCj7TD2JkqxBJXQpXYdLzKLfutoZ-6YtKASIvKbxgmaYyWBMqzF7MEsZ1vI-TisUgOGiQQpwMi4pEA539VSJmoS3gPcMnptYmUKeA9mmlcR-2_QnmD7Lxso-4mw5KqyJ3QaDE9tDgl-irTAYM7Jih7PurZFfj9PCTDwnPpP4L97ND0c40iRwo1Iwm25UjYIj2wcnmWI7jdsxh1umfh3gjlYO-AJ_ApNCIKjB5vk9BnKsHr2FgWO" />
                            <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="space-y-2">
                            <span class="font-label text-[10px] uppercase tracking-widest text-secondary font-bold">PDF • Biology</span>
                            <h4 class="font-serif text-xl font-bold text-on-surface leading-tight tracking-tight">Origin of Species</h4>
                            <p class="font-label text-xs text-on-surface-variant">Charles Darwin</p>
                            <div class="pt-4 flex items-center gap-3">
                                <button class="flex-1 bg-primary text-on-primary py-2.5 text-xs font-label rounded-md font-semibold hover:bg-primary-container transition-colors">Read PDF</button>
                                <button class="p-2.5 ring-1 ring-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container transition-colors">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Book Card 4 -->
                    <article class="flex flex-col group">
                        <div class="aspect-[2/3] w-full bg-surface-container-highest overflow-hidden relative mb-6 rounded-sm shadow-md transition-transform duration-500 group-hover:-translate-y-2">
                            <img class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700" data-alt="abstract architectural sketch on a book cover, charcoal and ink, intellectual and modern academic look" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnt_iNjLU7h01uUy6h6f5E0k8TfXryHGp2F2QTJ15JIVHE0L7qtKXHNu46y8aZNdYcZv3gXeA5OpnTuvw1QsuWLnkCXAPwlGagFrUnKBAmIOOW9EqHI6SZICGAEHeb1qiGVfEab__y7Ouws1hmqQxzhjUCMWH_YTTp6tbbHlOOkOTHC9-PoyQwidyrAFXrp36SM06cXYktK0IenEqZjnV_esmUM6UEQ8rubSbHaKXuMPU7-A_MFtskKWrlZ3YMJ86ojuhfggeAZWRM" />
                            <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="space-y-2">
                            <span class="font-label text-[10px] uppercase tracking-widest text-secondary font-bold">PDF • Epistemology</span>
                            <h4 class="font-serif text-xl font-bold text-on-surface leading-tight tracking-tight">Critique of Pure Reason</h4>
                            <p class="font-label text-xs text-on-surface-variant">Immanuel Kant</p>
                            <div class="pt-4 flex items-center gap-3">
                                <button class="flex-1 bg-primary text-on-primary py-2.5 text-xs font-label rounded-md font-semibold hover:bg-primary-container transition-colors">Read PDF</button>
                                <button class="p-2.5 ring-1 ring-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container transition-colors">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Book Card 5 -->
                    <article class="flex flex-col group">
                        <div class="aspect-[2/3] w-full bg-surface-container-highest overflow-hidden relative mb-6 rounded-sm shadow-md transition-transform duration-500 group-hover:-translate-y-2">
                            <img class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700" data-alt="macro photograph of gold embossed lettering on a navy blue fabric book spine, luxury scholarly detail" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLeNpCPp3jdJb0VgETomfBgLPoi_LBw_Q_1vidl9cN3UxFYa8zWrQh6Y5tpwLDhr_H6AQwIvu3k6UTLp6CfunUQysVRQ8_idOdk7VbCrKoS6g9N6ILvcUGXEv2cIa_4KoBWEFl4jTmLobBuy_eII-qtbuT4kicROTbywzPB7UR_gDleT2yvYObFuiS1XuMkwwepwWuShEZjAM24nI5jrtnreyX0FDZ3WcyfCuAKghFMT0aY66q2S2JDIRzcYApu2TbxNH0lVsfKaw2" />
                            <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="space-y-2">
                            <span class="font-label text-[10px] uppercase tracking-widest text-secondary font-bold">PDF • Classical History</span>
                            <h4 class="font-serif text-xl font-bold text-on-surface leading-tight tracking-tight">The Histories</h4>
                            <p class="font-label text-xs text-on-surface-variant">Herodotus</p>
                            <div class="pt-4 flex items-center gap-3">
                                <button class="flex-1 bg-primary text-on-primary py-2.5 text-xs font-label rounded-md font-semibold hover:bg-primary-container transition-colors">Read PDF</button>
                                <button class="p-2.5 ring-1 ring-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container transition-colors">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Book Card 6 -->
                    <article class="flex flex-col group">
                        <div class="aspect-[2/3] w-full bg-surface-container-highest overflow-hidden relative mb-6 rounded-sm shadow-md transition-transform duration-500 group-hover:-translate-y-2">
                            <img class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700" data-alt="close up of an open dusty manuscript with elegant ink handwriting on parchment, historical atmosphere" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5RviaBcWg35WKJ7j1nADcuoUeqt0dCeYW5MFnAkCRWfntMq2Z3hx3LwnX-gFWJsayQ7csvx1zrku_PcWSHB1ICo7s__r4DSR1yw9tqg-Z0rrp1xijasSZEG2ytHa0mcS3XLrene6IsO4i6X2cus_KLLIvO0bY1bOxpIAHdIPMX_rKjS_sqHmYlD2Cds50BXwRHbsOTuOsR_L-1hhtGkU_8z865R3otjUZykKIMY5Bjqg3o1ek--muu3awxNgDZ5j2B_KyXzVyrGl5" />
                            <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="space-y-2">
                            <span class="font-label text-[10px] uppercase tracking-widest text-secondary font-bold">PDF • Ethics</span>
                            <h4 class="font-serif text-xl font-bold text-on-surface leading-tight tracking-tight">Nicomachean Ethics</h4>
                            <p class="font-label text-xs text-on-surface-variant">Aristotle</p>
                            <div class="pt-4 flex items-center gap-3">
                                <button class="flex-1 bg-primary text-on-primary py-2.5 text-xs font-label rounded-md font-semibold hover:bg-primary-container transition-colors">Read PDF</button>
                                <button class="p-2.5 ring-1 ring-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container transition-colors">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Book Card 7 -->
                    <article class="flex flex-col group">
                        <div class="aspect-[2/3] w-full bg-surface-container-highest overflow-hidden relative mb-6 rounded-sm shadow-md transition-transform duration-500 group-hover:-translate-y-2">
                            <img class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700" data-alt="stack of old books with colorful spines in a dark academia aesthetic room, warm moody lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDNJyFah1kIkjhu3UjYuGUWnErPGOZ7Mau-dwAy_S8LUNrSbt3U4az8gc1IL2DnJQqUijXpptQvIHOSgV-t-Eo7YRPjcxpFllFl2rhlMYmHCJ7WNZz9KNwBGfT7aMU9hy5CopX4_42ASOM2bGHEo2RtNW9zi1atTyk3vySvv0byOlYmhoMEn4KXNGca9Q_D4CF5S9m7e4ywm3dDWGusAVsUxj1MGNqkFaKe0r0IIrlPDFUBHcq6kN8ViYyFHOYj5MgxkxTYDmA5FLfP" />
                            <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="space-y-2">
                            <span class="font-label text-[10px] uppercase tracking-widest text-secondary font-bold">PDF • Literature</span>
                            <h4 class="font-serif text-xl font-bold text-on-surface leading-tight tracking-tight">Beyond Good and Evil</h4>
                            <p class="font-label text-xs text-on-surface-variant">Friedrich Nietzsche</p>
                            <div class="pt-4 flex items-center gap-3">
                                <button class="flex-1 bg-primary text-on-primary py-2.5 text-xs font-label rounded-md font-semibold hover:bg-primary-container transition-colors">Read PDF</button>
                                <button class="p-2.5 ring-1 ring-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container transition-colors">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Book Card 8 -->
                    <article class="flex flex-col group">
                        <div class="aspect-[2/3] w-full bg-surface-container-highest overflow-hidden relative mb-6 rounded-sm shadow-md transition-transform duration-500 group-hover:-translate-y-2">
                            <img class="w-full h-full object-cover grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700" data-alt="minimal book mock-up on a linen surface, clean neutral palette, soft morning light" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDebIRuHpdBpYJ_uGhIcDMp6GQQ9BCN2joEmRjwXpGA7RzAPrRyKHEjEd5IxPV6rSjdRwfpaIm6Ayu-FKG2uBbOy4mNqsvpsiP5eb3x2t4YwAtlGd1OI8YYoFAK330Dd03t1IwzjEtDLAgQCVLczgiWYyu2Q0dF2UkKmW1B608mpvF2HVRfbMZsctJssfYkOu8-BlBMmhxkIYxtlkZEj4wr4pmZpvousJ9AZsSM6mdUKQusfzNgR1cqNh5BB1QVBAmFCckER_XP9vqU" />
                            <div class="absolute inset-0 bg-primary/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        <div class="space-y-2">
                            <span class="font-label text-[10px] uppercase tracking-widest text-secondary font-bold">PDF • Physics</span>
                            <h4 class="font-serif text-xl font-bold text-on-surface leading-tight tracking-tight">Relativity</h4>
                            <p class="font-label text-xs text-on-surface-variant">Albert Einstein</p>
                            <div class="pt-4 flex items-center gap-3">
                                <button class="flex-1 bg-primary text-on-primary py-2.5 text-xs font-label rounded-md font-semibold hover:bg-primary-container transition-colors">Read PDF</button>
                                <button class="p-2.5 ring-1 ring-outline-variant/30 rounded-md text-on-surface-variant hover:bg-surface-container transition-colors">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Pagination (Subtle Tonal Shift) -->
                <div class="mt-24 flex items-center justify-center gap-4">
                    <button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <div class="flex items-center gap-2">
                        <button class="w-10 h-10 rounded-full flex items-center justify-center bg-primary text-on-primary font-label text-sm font-bold">1</button>
                        <button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container transition-colors font-label text-sm">2</button>
                        <button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container transition-colors font-label text-sm">3</button>
                        <span class="text-on-surface-variant px-2">...</span>
                        <button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container transition-colors font-label text-sm">18</button>
                    </div>
                    <button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </section>
        </main>
        <!-- Footer -->
        <footer class="w-full mt-auto bg-slate-200 dark:bg-slate-900 text-blue-900 dark:text-blue-300 font-sans manrope text-sm border-t border-slate-300/20">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 px-12 py-10 max-w-screen-2xl mx-auto">
                <div class="font-serif text-lg font-semibold text-blue-900 dark:text-blue-50">Lexicon Archive</div>
                <div class="flex flex-wrap justify-center gap-8">
                    <a class="text-slate-500 dark:text-slate-400 hover:underline decoration-emerald-500/30 underline-offset-4 transition-opacity opacity-100 hover:opacity-80" href="#">Terms of Access</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:underline decoration-emerald-500/30 underline-offset-4 transition-opacity opacity-100 hover:opacity-80" href="#">Privacy Policy</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:underline decoration-emerald-500/30 underline-offset-4 transition-opacity opacity-100 hover:opacity-80" href="#">Institutional Login</a>
                    <a class="text-slate-500 dark:text-slate-400 hover:underline decoration-emerald-500/30 underline-offset-4 transition-opacity opacity-100 hover:opacity-80" href="#">API Support</a>
                </div>
                <p class="text-slate-500 dark:text-slate-400 text-center md:text-right max-w-xs md:max-w-none">
                    © 2024 The Academic Curator. All intellectual property remains the right of its original authors.
                </p>
            </div>
        </footer>
    </body>

    </html>