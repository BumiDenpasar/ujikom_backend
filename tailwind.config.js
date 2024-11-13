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
                poppins: ['Poppins', 'Arial', 'sans-serif'],
            },

            animation: {
                fadeIn: 'fadeIn 1s ease-out',
                slideLeft: 'slideLeft 1s ease-out forwards',
                slideRight: 'slideRight 1s ease-out forwards',
                upDown: 'upDown 3s ease-in-out infinite',
                downUp: 'downUp 3s ease-in-out infinite',

            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },

                upDown: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },

                downUp: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(10px)' }, 
                },

                slideLeft: {
                    '0%': { transform: 'translateX(10%)', opacity: '0' },
                    '100%': { transform: 'translateX(0)', opacity: '1' },
                },

                slideRight: {
                    '0%': { transform: 'translateX(-10%)', opacity: '0' },
                    '100%': { transform: 'translateX(0)', opacity: '1' },
                }
            }
        },
    },

    plugins: [
        forms,
        require('daisyui'),
    ],

    daisyui: {
        themes: false, // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "light", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: ":root", // The element that receives theme color CSS variables
      },
};
