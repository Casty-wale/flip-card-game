/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors:{
        "theme-yellow": '#ffc727',
        "theme-yellow-dark": '#e6b323',
        "theme-dark": '#37474f',
        "theme-blue-dark": '#114B5F',
      },
      height: {
        "screen-75": '90vh',
        "screen-50": '50vh',
      },
      fontFamily: {
        'main': ['"Open Sans"']
      }
    },
  },
  Variants: {
    extend: {
      scale: ['active', 'group-hover'],
    },
  },
  plugins: [],
}

// warn - The `darkMode` option in your Tailwind CSS configuration is set to `false`, which now behaves the same as `media`.
// warn - Change `darkMode` to `media` or remove it entirely.
// warn - https://tailwindcss.com/docs/upgrade-guide#remove-dark-mode-configuration