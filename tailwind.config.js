/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./vistas/**/*.php",
    "./includes/**/*.php",
    "./clases/**/*.php",
    "./js/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'principal': '#26408b',
        'secundario': '#d3b88c',
      },
      fontFamily: {
        montserrat: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
