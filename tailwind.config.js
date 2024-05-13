/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                titulo1: ["Monoton", "sans-serif"],
                titulo2: ["Shrikhand", "serif"],
                titulo3: ['VTKS CLASSIC', "sans-serif"],
                biografia1: ["Dancing Script", "cursive"],
                titulo4: ['Oshare', "sans-serif"],
                mote: ["Mate", "serif"],
                gruppo: ["Gruppo", "sans-serif"],
                cursiva1: ["Bad Script", "cursiv"],
                titulo5: ["Roboto Condensed", "sans-serif"],
                delgada1: ["Inconsolata", 'monospace']
            },
        },
    },
    plugins: [],
}
// <uniquifier>: Use a unique and descriptive class name
// <weight>: Use a value from 100 to 800
