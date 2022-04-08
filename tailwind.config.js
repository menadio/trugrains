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
      'lime-500': '#DCEDC8',
      'purple':  '#9D2883',
      'white': '#FFFFFF',
      'black': '#242121'
    },
    extend: {
      backgroundImage: {
        'tru-recipes': "url('/images/svg/Group 13725.svg')",
        'tru-recipes-2': "url('/images/svg/Group 13728.svg')",
        'banner-bg': "url('/images/png/bannerbg.png')",
        'about-bg': "url('/images/png/Group 13675@2x.png')",
        'story-bg': "url('/images/png/Group 13681@2x.png')"
      }
    },
  },
  plugins: [],
}
