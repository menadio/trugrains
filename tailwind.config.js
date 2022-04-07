const colors = require('tailwindcss/colors');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'sora': ['Sora', 'sans-serif'],
      'wagner': ['NT Wagner', 'sans-serif']
    },
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'blue': '#71BBE2',
      'orange': '#E28333',
      'black': '#242121',
      'gray': '#242121CC',
      'lemon':  '#C3D14A',
      'green': '#88B667',
      'lime': '#F8FFF4',
      'purple':  '#9D2883',
      'white': '#FFFFFF'
    },
    extend: {
      backgroundImage: {
        'tru-recipes': "url('/images/Group 13725.svg')",
        'tru-recipes-2': "url('/images/Group 13728.svg')"
      }
    },
  },
  plugins: [],
}
