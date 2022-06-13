const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#14b8a6',
                secondary: '#64748b',
                dark: '#0f172a',
                smoot: '#decc90',
                fresh:'#cdd698'
                
                },
                screens: {
                '2xl' : '1320px'
                },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
