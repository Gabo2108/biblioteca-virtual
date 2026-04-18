<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>The Academic Curator - Sign In</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,400;0,600;0,700;1,400;1,700&amp;family=Manrope:wght@400;500;600&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        body { font-family: 'Manrope', sans-serif; }
        .font-newsreader { font-family: 'Newsreader', serif; }
        .font-manrope { font-family: 'Manrope', sans-serif; }
        .font-inter { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col">
<!-- TopNavBar -->
<header class="bg-[#f8f9fa]/80 dark:bg-[#191c1d]/80 backdrop-blur-2xl docked full-width top-0 sticky z-50">
<nav class="flex justify-between items-center w-full px-12 py-6 max-w-[1600px] mx-auto">
<div class="flex items-center gap-x-12">
<a href="/"><span class="font-newsreader text-2xl font-bold italic tracking-tight text-[#002045] dark:text-slate-100"> Blioteca Ec<span class="material-symbols-outlined">Explore</span></span></a> 
<div class="hidden lg:flex gap-x-8 items-center">

</div>
</div>
<div class="flex items-center gap-x-6">
<a href="/"><button class="bg-primary text-on-primary px-5 py-2.5 rounded-lg text-sm font-semibold scale-95 transition-transform ease-out">Atras</button></a>
</div>
</nav>
</header>
<!-- Main Content: Login Section -->
<main class="flex-grow flex items-center justify-center relative overflow-hidden px-6 py-12">
<!-- Abstract Decorative Background Elements (The Living Archive Aesthetic) -->
<div class="absolute top-1/4 -left-20 w-96 h-96 bg-primary/5 rounded-full blur-3xl pointer-events-none"></div>
<div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
<div class="w-full max-w-lg relative">
<!-- Tonal definition instead of borders -->
<div class="bg-surface-container-lowest p-10 md:p-16 rounded-xl shadow-[0_12px_40px_rgba(25,28,29,0.06)] relative z-10">
<div class="mb-10 text-center">
<h1 class="font-headline text-4xl font-bold tracking-tight text-primary mb-3">Welcome Back</h1>
<p class="font-body text-on-surface-variant text-sm">Enter your credentials to access your scholarly collection.</p>
</div>
<form class="space-y-6">
<div class="space-y-2">
<label class="font-inter text-xs uppercase tracking-widest text-on-surface-variant font-semibold" for="email">Institutional Email</label>
<div class="relative group">
<input class="w-full bg-surface-container-low border-none rounded-xl px-4 py-4 font-manrope text-sm focus:ring-1 focus:ring-secondary/30 transition-all placeholder:text-outline/50" id="email" name="email" placeholder="name@university.edu" type="email"/>
</div>
</div>
<div class="space-y-2">
<div class="flex justify-between items-center">
<label class="font-inter text-xs uppercase tracking-widest text-on-surface-variant font-semibold" for="password">Security Key</label>
<a class="font-inter text-xs text-secondary font-medium hover:underline underline-offset-4" href="#">Forgot password?</a>
</div>
<div class="relative group">
<input class="w-full bg-surface-container-low border-none rounded-xl px-4 py-4 font-manrope text-sm focus:ring-1 focus:ring-secondary/30 transition-all placeholder:text-outline/50" id="password" name="password" placeholder="••••••••" type="password"/>
</div>
</div>
<div class="pt-4">
<button class="w-full bg-primary text-on-primary font-manrope font-semibold py-4 rounded-lg hover:opacity-90 active:scale-[0.98] transition-all duration-300" type="submit">
                            Sign In
                        </button>
</div>
<div class="relative py-4">
<div aria-hidden="true" class="absolute inset-0 flex items-center">
<div class="w-full bg-surface-container-high h-[1px]"></div>
</div>
<div class="relative flex justify-center text-xs uppercase tracking-widest">
<span class="bg-surface-container-lowest px-4 text-on-surface-variant font-inter">or</span>
</div>
</div>
<div class="text-center">
<p class="font-body text-on-surface-variant text-sm">
                            New to the archive? 
                            <a class="text-secondary font-bold hover:underline underline-offset-4 ml-1" href="#">Create an Account</a>
</p>
</div>
</form>
</div>
<!-- Asymmetrical Decorative Accent -->
<div class="absolute -top-4 -right-4 w-24 h-24 bg-secondary-container/30 -z-0 rounded-xl blur-2xl"></div>
</div>
</main>
<!-- Footer -->
<footer class="bg-[#d9dadb] dark:bg-[#191c1d] w-full py-12 px-12 border-t-[0.5px] border-[#c4c6cf]/15">
<div class="grid grid-cols-1 md:grid-cols-2 w-full gap-8 max-w-[1600px] mx-auto">
<div class="flex flex-col gap-y-4">
<span class="font-newsreader text-sm font-semibold italic text-[#002045] dark:text-[#455f88]">The Living Archive</span>
<p class="font-inter text-xs uppercase tracking-widest text-[#43474e] opacity-60">
                    © 2024 The Living Archive. A Digital Preservation Project.
                </p>
</div>
<div class="flex flex-wrap gap-x-8 gap-y-2 md:justify-end items-center">
<a class="font-inter text-xs uppercase tracking-widest text-[#002045] dark:text-[#455f88] opacity-60 hover:opacity-100 transition-opacity" href="#">Institutional Access</a>
<a class="font-inter text-xs uppercase tracking-widest text-[#002045] dark:text-[#455f88] opacity-60 hover:opacity-100 transition-opacity" href="#">Privacy Protocol</a>
<a class="font-inter text-xs uppercase tracking-widest text-[#002045] dark:text-[#455f88] opacity-60 hover:opacity-100 transition-opacity" href="#">Curation Standards</a>
<a class="font-inter text-xs uppercase tracking-widest text-[#002045] dark:text-[#455f88] opacity-60 hover:opacity-100 transition-opacity" href="#">API Access</a>
</div>
</div>
</footer>
</body></html>