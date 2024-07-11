/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./Views/*.{html,php}",
    "./Views/partials/*.{html,php}",
    "./js/index.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms')
  ],
}
