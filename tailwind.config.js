module.exports = {
  purge: [
    "app/**/*.php",
    "resources/**/*.html",
    "resources/**/*.js",
    "resources/**/*.jsx",
    "resources/**/*.ts",
    "resources/**/*.tsx",
    "resources/**/*.php",
    "resources/**/*.vue",
    "resources/**/*.twig"
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'brand': '#f58c30'
      },
      minWidth: {
        '70porcento': '70%'
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
