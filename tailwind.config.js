import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                manrope: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#2563eb',
                secondary: '#4f46e5',
                accent: '#06b6d4',
                dark: '#0f172a',
            },
        },
    },

    plugins: [forms],
};
