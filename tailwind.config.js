/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'inter': ['Inter', 'Arial', 'Helvetica', 'sans-serif'],
      'lora': ['Lora', 'Helvetica', 'Arial', 'sans-serif']
    },
    extend: {
      backgroundImage: {
        'gabriel-muntana': "url('/img/panoramica.jpg')"
      }
    },
  },
  plugins: [],
}

