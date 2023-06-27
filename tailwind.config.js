import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                jost: ['Jost', 'sans-serif'],
            },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'dgreen': '#029642',
                'lgreen': '#D8F3DC',
                'nblue': '#222D5D',
                'dorange': '#FB6107'
            }
        },
    },

    plugins: [forms],
};
