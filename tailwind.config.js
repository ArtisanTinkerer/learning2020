module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        fontFamily: { sans: ['Inter var'] },
    }
  },
  variants: {
      backgroundColor:['responsive','hover','focus','active']
  },
  plugins: [
    require('@tailwindcss/custom-forms'),
      require('@tailwindcss/ui')
  ]
}
