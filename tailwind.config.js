const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // 'カラー名': 'カラーコード'
                'matcha': '#70735C',
                'pale-orange': '#F2E3D5',
                'dark-brown': '#401A0D',
                'sango': '#D96B62',
                'pink-orange': '#F2B999'
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
    plugins: [require("@tailwindcss/typography"), require("daisyui")], // 追記
};
