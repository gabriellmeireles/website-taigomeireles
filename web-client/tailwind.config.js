/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,ts}"],
  darkMode: 'media',
  theme: {
    extend: {
      backgroundColor: {
        'main_desktop': "url('assets/img/main_desktop.png')",
        'main_mobile': "url('/assets/img/main_phoneV2.png')",
      }
    },
  },
  plugins: [],
};
