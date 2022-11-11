/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
  variants: ['responsive', 'group-hover', 'focus-within', 'hover', 'focus', 'active'],

}
