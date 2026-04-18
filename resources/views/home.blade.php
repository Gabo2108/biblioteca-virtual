<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&amp;family=Manrope:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary": "#ffffff",
                        "surface-container": "#edeeef",
                        "tertiary-fixed-dim": "#3adccc",
                        "surface-dim": "#d9dadb",
                        "on-primary-fixed-variant": "#2d476f",
                        "surface": "#f8f9fa",
                        "inverse-surface": "#2e3132",
                        "secondary-fixed-dim": "#95d4b3",
                        "error": "#ba1a1a",
                        "on-error": "#ffffff",
                        "surface-container-highest": "#e1e3e4",
                        "on-tertiary-fixed-variant": "#005049",
                        "on-primary": "#ffffff",
                        "primary-fixed": "#d6e3ff",
                        "secondary-container": "#aeeecb",
                        "surface-variant": "#e1e3e4",
                        "background": "#f8f9fa",
                        "secondary": "#2c694e",
                        "on-surface-variant": "#43474e",
                        "tertiary-container": "#003d38",
                        "surface-container-high": "#e7e8e9",
                        "on-secondary": "#ffffff",
                        "surface-tint": "#455f88",
                        "inverse-on-surface": "#f0f1f2",
                        "tertiary": "#002522",
                        "on-primary-fixed": "#001b3c",
                        "on-surface": "#191c1d",
                        "inverse-primary": "#adc7f7",
                        "on-error-container": "#93000a",
                        "surface-container-low": "#f3f4f5",
                        "primary-fixed-dim": "#adc7f7",
                        "on-tertiary-container": "#00b1a4",
                        "on-secondary-fixed-variant": "#0e5138",
                        "tertiary-fixed": "#61f9e9",
                        "primary": "#002045",
                        "on-tertiary-fixed": "#00201d",
                        "on-secondary-fixed": "#002114",
                        "on-secondary-container": "#316e52",
                        "on-primary-container": "#86a0cd",
                        "outline-variant": "#c4c6cf",
                        "outline": "#74777f",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "primary-container": "#1a365d",
                        "surface-bright": "#f8f9fa",
                        "secondary-fixed": "#b1f0ce",
                        "on-background": "#191c1d"
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Manrope', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Newsreader', serif;
        }
    </style>
</head>

<body class="bg-surface text-on-surface selection:bg-secondary-container">
    <!-- TopNavBar -->
    <header class="bg-[#f8f9fa]/80 dark:bg-[#191c1d]/80 backdrop-blur-2xl docked full-width top-0 sticky z-50">
        <nav class="flex justify-between items-center w-full px-12 py-6 max-w-[1600px] mx-auto">
            <div class="flex items-center gap-8">
                <a href="/"><span class="font-newsreader text-2xl font-bold italic tracking-tight text-[#002045] dark:text-slate-100"> Blioteca Ec <span class="material-symbols-outlined">Explore</span></span></a>
                
            </div>
            <div class="flex items-center gap-4">
               <a href="/login"><button class="px-5 py-2 text-sm font-label font-medium text-primary hover:bg-surface-container transition-colors rounded-lg"> Iniciar Sesion</button></a> 
                <a class="px-5 py-2 text-sm font-label font-medium bg-primary text-on-primary rounded-lg shadow-sm hover:opacity-90 transition-opacity" href="/libreria">Libreria</a>
            </div>
        </nav>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="relative w-full px-12 pt-20 pb-32 max-w-[1600px] mx-auto overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 pr-12">
                    <h1 class="text-6xl md:text-7xl font-headline font-bold text-primary mb-8 tracking-tight leading-tight">
                        El santuario del <span class="italic font-normal">Conocimiento.</span>
                    </h1>
                    <p class="text-xl font-body text-on-surface-variant max-w-2xl leading-relaxed mb-12">
                        Immerse yourself in a curated collection of scholarly works, rare manuscripts, and contemporary research—all preserved in a digital sanctuary for the modern mind.
                    </p>
                    <!-- Search Bar -->
                    <div class="flex items-center w-full max-w-xl bg-surface-container-lowest shadow-[0_12px_40px_rgba(25,28,29,0.06)] rounded-xl p-2 group transition-all duration-300 focus-within:ring-2 focus-within:ring-tertiary-container/20">
                        <div class="pl-4 pr-3 text-on-surface-variant">
                            <span class="material-symbols-outlined">search</span>
                        </div>
                        <input class="w-full py-4 bg-transparent border-none focus:ring-0 font-body text-lg text-on-surface placeholder:text-outline" placeholder="Search the archive by title, author, or discipline..." type="text" />
                        <button class="bg-secondary text-on-secondary px-8 py-4 rounded-lg font-label font-semibold text-sm hover:opacity-90 transition-opacity">
                            Discover
                        </button>
                    </div>
                </div>
                <div class="lg:col-span-5 relative">
                    <div class="aspect-[4/5] rounded-xl overflow-hidden bg-surface-container shadow-2xl rotate-2 translate-x-4">
                        <img class="w-full h-full object-cover" data-alt="close-up of several old leather-bound books stacked neatly on a dark wood table in a sunlit library" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMuVlXredl9S-e-YwfT_53Xk8wJoB8ITgGEcvKg6z7-hevB8TyBy8HVWr_pJhE69AkGaPRXOqRQYQFX0ISZ5Ybm9Ch_7fB0d1NSL6iT0Wl_DJm6epoVuPy58uWVj6LWhis4o4sBorJ3jrPpu3vxv1hI4MJxiSHdGJYor9qLfs6o_zmoewTzZPQ2AfBi0PHytE6e2nExcv_jEmtGgMHDiaI5zkxl384MKbhqO41PWrbOCYjHQRWSnOQBeMA4tbdPVGt5DUzyv1CrUhB" />
                    </div>
                    <div class="absolute inset-0 -translate-x-8 -translate-y-8 -z-10 bg-secondary/10 rounded-xl"></div>
                </div>
            </div>
        </section>
        <!-- Category Bento Grid -->
        <section class="bg-surface-container-low py-24 px-12">
            <div class="max-w-[1600px] mx-auto">
                <div class="flex justify-between items-end mb-16">
                    <div>
                        <span class="font-label text-xs uppercase tracking-widest text-secondary font-bold mb-4 block">Classifications</span>
                        <h2 class="text-4xl font-headline font-bold text-primary">Explore by Discipline</h2>
                    </div>
                    <button class="text-primary font-body font-semibold flex items-center gap-2 group">
                        View All Archives <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 h-[500px]">
                    <div class="md:col-span-2 md:row-span-2 bg-surface-container-lowest rounded-xl p-8 flex flex-col justify-between group hover:shadow-xl transition-shadow border-[0.5px] border-outline-variant/15">
                        <div>
                            <span class="material-symbols-outlined text-4xl text-secondary mb-6">menu_book</span>
                            <h3 class="text-3xl font-headline font-bold text-primary mb-4">Classical Literature</h3>
                            <p class="font-body text-on-surface-variant leading-relaxed max-w-xs">The foundational texts of human storytelling and philosophical inquiry.</p>
                        </div>
                        <div class="flex gap-2">
                            <span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded text-xs font-label">Fiction</span>
                            <span class="px-3 py-1 bg-surface-container text-on-surface-variant rounded text-xs font-label">Drama</span>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest rounded-xl p-8 group hover:shadow-xl transition-shadow border-[0.5px] border-outline-variant/15 flex flex-col justify-between">
                        <span class="material-symbols-outlined text-3xl text-secondary">science</span>
                        <h3 class="text-xl font-headline font-bold text-primary">Natural Science</h3>
                    </div>
                    <div class="bg-surface-container-lowest rounded-xl p-8 group hover:shadow-xl transition-shadow border-[0.5px] border-outline-variant/15 flex flex-col justify-between">
                        <span class="material-symbols-outlined text-3xl text-secondary">history_edu</span>
                        <h3 class="text-xl font-headline font-bold text-primary">Historical Records</h3>
                    </div>
                    <div class="md:col-span-2 bg-secondary text-on-secondary rounded-xl p-8 flex justify-between items-center overflow-hidden relative group">
                        <div class="z-10">
                            <h3 class="text-2xl font-headline font-bold mb-2">Modern Philosophy</h3>
                            <p class="opacity-80 font-body text-sm max-w-[240px]">Critical thinking for the contemporary age.</p>
                        </div>
                        <span class="material-symbols-outlined text-9xl absolute -right-4 -bottom-4 opacity-10 group-hover:scale-110 transition-transform">lightbulb</span>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Books Grid -->
        <section class="py-24 px-12 max-w-[1600px] mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-4">
                <h2 class="text-4xl font-headline font-bold text-primary">Recently Preserved Works</h2>
                <div class="flex gap-4 overflow-x-auto pb-2 w-full md:w-auto">
                    <button class="px-6 py-2 bg-secondary-container text-on-secondary-container rounded-lg font-label text-sm font-semibold whitespace-nowrap">Latest Arrivals</button>
                    <button class="px-6 py-2 bg-surface-container-high text-on-surface-variant rounded-lg font-label text-sm font-medium hover:bg-surface-container-highest transition-colors whitespace-nowrap">Most Cited</button>
                    <button class="px-6 py-2 bg-surface-container-high text-on-surface-variant rounded-lg font-label text-sm font-medium hover:bg-surface-container-highest transition-colors whitespace-nowrap">Scholarly Picks</button>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-y-16 gap-x-12">
                <!-- Book Card 1 -->
                <div class="flex flex-col">
                    <div class="aspect-[2/3] bg-surface-container-low mb-6 overflow-hidden rounded-lg group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="minimalist white book cover with elegant black serif typography on a light gray background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfhmtuGjLuFdWyzG95GLn5IbGLVRt6vcwUoeWOSILDhEBbZPlwAf5jEGuqZdIpmfCOLVKnUhSMvn02hTn_-dm5EbgqIITxeJTj4eNhhvvP-7lhx4w0mN1n80EyIjdI3vkgVou5mgh93HQeSLrl33Qu6RxhWt9Fk_sC0hbAHgzLolMBjhzRgJwV2Gncay3MVadbvxEK7RvItIccAPCSm15mj_VdQ_cq1EfidiNgVAdHG1rsPyvVBKCo1Lt_t3U5BtTnm_I8zHnL_PN0" />
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-lg font-headline font-bold text-primary leading-tight">Architecture of Silence</h4>
                        <p class="font-label text-sm text-on-surface-variant uppercase tracking-wide">Julian Vane, PhD</p>
                        <div class="flex items-center gap-2 pt-2 text-secondary">
                            <span class="material-symbols-outlined text-lg">picture_as_pdf</span>
                            <span class="font-label text-xs font-semibold">FREE ARCHIVE</span>
                        </div>
                    </div>
                </div>
                <!-- Book Card 2 -->
                <div class="flex flex-col">
                    <div class="aspect-[2/3] bg-surface-container-low mb-6 overflow-hidden rounded-lg group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="classical dark green book cover with gold foil ornamentation and traditional typography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeaE1tJBLVDLLsk1DFwkvzkEhaIc6xJkt4sg_22nl-5drST1ARt7DunxpCc8Nxvb7UihboEKmBMKRiZWEeZrQg-m4RyK5GxtIJbzIjpLVbYfr-mDKgaA3vrRRLbeQliFQhMbSAMDWyJAH3iiy_lanUfS8Y7AgFeKXGmX8f3vsGxRVURXdDswqAJQ92Y_Tpjft4ApzF4keDXUD_7rwGKOw09cacHBZCIcW48VdS_vL8SmdGNlACK4YCXnDfy7vyaFTL-AX50damANHf" />
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-lg font-headline font-bold text-primary leading-tight">The Ethics of Discovery</h4>
                        <p class="font-label text-sm text-on-surface-variant uppercase tracking-wide">Dr. Sarah Thorne</p>
                        <div class="flex items-center gap-2 pt-2 text-secondary">
                            <span class="material-symbols-outlined text-lg">picture_as_pdf</span>
                            <span class="font-label text-xs font-semibold">FREE ARCHIVE</span>
                        </div>
                    </div>
                </div>
                <!-- Book Card 3 -->
                <div class="flex flex-col">
                    <div class="aspect-[2/3] bg-surface-container-low mb-6 overflow-hidden rounded-lg group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="modern art book cover with vibrant abstract shapes in blue and orange against a cream background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuArEMtb-N9BcjAAk6wKZY4jZPktzqh8Iu4p8RFnxvxnI3PWH_I1hRGEUcvAI_9yXc2cz5VfAWOScUjMLM9vgQIRuVVRBRCsI06awI9fVtJHRsnDDv9ad5WKPCrEaf4bMNoaWZmYNyXjkUBmYW4acJFU7SuJp63ajbW7oR-i0v8nMwSxTI_0Bg2nu8u5LakOT2cUv7cUhW33uBpF993f-INj4lvmhSd1yPQxzZqh2gCxJ6H5QR6hOjpFKQvSayZPbPOiKpKbPyYh3R9A" />
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-lg font-headline font-bold text-primary leading-tight">Urban Topography</h4>
                        <p class="font-label text-sm text-on-surface-variant uppercase tracking-wide">Marcus Bell</p>
                        <div class="flex items-center gap-2 pt-2 text-secondary">
                            <span class="material-symbols-outlined text-lg">picture_as_pdf</span>
                            <span class="font-label text-xs font-semibold">FREE ARCHIVE</span>
                        </div>
                    </div>
                </div>
                <!-- Book Card 4 -->
                <div class="flex flex-col">
                    <div class="aspect-[2/3] bg-surface-container-low mb-6 overflow-hidden rounded-lg group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="aged paper texture book cover with a simple charcoal sketch of a mountain range" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8GExwMVLIVFBXMA-MXzouRhmuOrw1383cRG-CTEYlpLpCe3_wIf6dp47I6-IZBbQ7afU7LC16-cBGZHqUw7BTEy26PHvwqXz9w6RACRPM4oMmyCUyW4KCKav1cZeiGtpgtGbkT_knX9OEbxK6Pww7Tpfo_dUS1ytIvhNpuadKnbEycQgNfgAfDmcYm0b_3d1Ib1A9do-m4VrjiPP9omhEJw6FKpDLxB3GGs8TUEb1NPvAgge3bA0sT2U1sfJ4C0GOxE9i5gXxbU7I" />
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-lg font-headline font-bold text-primary leading-tight">Voices of the Steppe</h4>
                        <p class="font-label text-sm text-on-surface-variant uppercase tracking-wide">Elena Rostova</p>
                        <div class="flex items-center gap-2 pt-2 text-secondary">
                            <span class="material-symbols-outlined text-lg">picture_as_pdf</span>
                            <span class="font-label text-xs font-semibold">FREE ARCHIVE</span>
                        </div>
                    </div>
                </div>
                <!-- Book Card 5 -->
                <div class="flex flex-col">
                    <div class="aspect-[2/3] bg-surface-container-low mb-6 overflow-hidden rounded-lg group cursor-pointer shadow-sm hover:shadow-md transition-shadow">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="vintage aesthetic book cover featuring a scientific illustration of an owl on a parchment background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDheTJiT9mS8yhvcTaYDdEpAEKW54PX4apk1nD8DZSzfAQi7fNkMuywXoqcPrA47Zti4pgXpkVLPoSXm4nLq_SBLwNJKnI9CROC1yUfhyTZpR4aoaByTF-pV2IKDAR-3JDSGEA3sN5juuQDagT4rk68mqvNuDa-j-ehWFFpxLHIM_UEWeoHbeHsg2irlJMou9CXVunrFoPC3-sDBFRFM6jrSIufQzoKrBiZSIWgkMG-m3yoG3WrnSlf-Hp-Q81Og80RNVvEzWUg_z7F" />
                    </div>
                    <div class="space-y-2">
                        <h4 class="text-lg font-headline font-bold text-primary leading-tight">Natural Historian</h4>
                        <p class="font-label text-sm text-on-surface-variant uppercase tracking-wide">Oliver Finch</p>
                        <div class="flex items-center gap-2 pt-2 text-secondary">
                            <span class="material-symbols-outlined text-lg">picture_as_pdf</span>
                            <span class="font-label text-xs font-semibold">FREE ARCHIVE</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Section -->
        <section class="px-12 pb-24 max-w-[1600px] mx-auto">
            <div class="bg-primary rounded-2xl p-16 flex flex-col items-center text-center relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none">
                    <img class="w-full h-full object-cover" data-alt="faint background texture of an endless library with floor to ceiling bookshelves and soft overhead lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDeMfMY45rRdUbQZg50gKVazPL58XLBZwvQPDp71pSlfHUjYCD_AwzbQL4ejgw7VVM3VHDUTVkbaiirnvHyMXaXpQGKm3JVuiL5YfpiHHR3eUH-JcIApXYOfnuZ91GR0oEzs6fGTGjbYTb0Iy30hun78pJvllQnwvdh3S3TVTQFiToMb1UojnQpN-6p2Mi2Dmnh8QuhRLMeMjXizTK0GBWRHvg0f1I5lkPb3HQF2fkJ2U4YXMfxArzu2gbDa4YEDPzlhmhHohIJS5p2" />
                </div>
                <div class="z-10 max-w-2xl">
                    <h2 class="text-5xl font-headline font-bold text-on-primary mb-6">Become a Guardian of Knowledge</h2>
                    <p class="text-on-primary-container text-lg font-body mb-10 leading-relaxed opacity-90">
                        Join 50,000+ scholars who receive weekly curations, exclusive archive access, and collaborative tools for their research journey.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="px-10 py-4 bg-on-primary text-primary font-label font-bold rounded-lg shadow-lg hover:bg-surface-container transition-colors">Apply for Membership</button>
                        <button class="px-10 py-4 border border-on-primary/30 text-on-primary font-label font-bold rounded-lg hover:bg-on-primary/10 transition-colors">Scholar Login</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-[#d9dadb] dark:bg-[#191c1d] w-full py-12 px-12 border-t-[0.5px] border-[#c4c6cf]/15">
        <div class="grid grid-cols-1 md:grid-cols-2 w-full gap-8 max-w-[1600px] mx-auto">
            <div>
                <span class="font-newsreader text-sm font-semibold italic text-[#002045] block mb-4">The Academic Curator</span>
                <p class="font-inter text-xs uppercase tracking-widest text-[#002045] opacity-60 max-w-sm leading-loose">
                    © 2024 The Living Archive. A Digital Preservation Project.
                </p>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div class="flex flex-col gap-3">
                    <a class="font-inter text-xs uppercase tracking-widest text-[#002045] opacity-60 hover:opacity-100 transition-opacity" href="#">Institutional Access</a>
                    <a class="font-inter text-xs uppercase tracking-widest text-[#002045] opacity-60 hover:opacity-100 transition-opacity" href="#">Privacy Protocol</a>
                </div>
                <div class="flex flex-col gap-3">
                    <a class="font-inter text-xs uppercase tracking-widest text-[#002045] opacity-60 hover:opacity-100 transition-opacity" href="#">Curation Standards</a>
                    <a class="font-inter text-xs uppercase tracking-widest text-[#002045] opacity-60 hover:opacity-100 transition-opacity" href="#">API Access</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>