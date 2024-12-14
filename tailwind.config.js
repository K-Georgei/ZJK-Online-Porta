import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    // prefix: 'tw-',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        // './storage/framework/views/*.php',
        './resources/views/filament/pages/*.blade.php',
        './app/Filament/*/.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    safelist: [
        "tw-bg-black",
        "tw-bg-white",
    ],


    plugins: [],
};