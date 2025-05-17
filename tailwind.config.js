const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'gym-red': {
                    50: '#FFF5F5',
                    100: '#FED7D7',
                    200: '#FEB2B2',
                    300: '#FC8181',
                    400: '#F56565',
                    500: '#E53E3E',
                    600: '#C53030',
                    700: '#9B2C2C',
                    800: '#822727',
                    900: '#63171B',
                },
            },
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            },
            height: {
                'screen-75': '75vh',
                'screen-50': '50vh',
            },
            minHeight: {
                'screen-75': '75vh',
                'screen-50': '50vh',
            },
            boxShadow: {
                'inner-lg': 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
            },
            backgroundImage: {
                'hero-pattern': "url('/images/hero-bg.jpg')",
                'feature-pattern': "url('/images/feature-bg.jpg')",
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
