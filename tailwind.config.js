/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        gazprom:'#75c232'
      },
      spacing: {
        '128': '32rem',
        '144': '36rem',
        '160': '40rem',
      },
      fontFamily: {
        'sans':['CoFo Sans', 'Arial', 'sans-serif'],
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
]
}



