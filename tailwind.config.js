/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./dist/*.{html,php,js}'],
  theme: {
    extend: {
      fontFamily: {
        monserrat: ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [require('@tailwindcss/forms')],
};
