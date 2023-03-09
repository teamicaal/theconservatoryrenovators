const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  safelist: [
    'btn-toolbar',
    'text-gray-400',
    'nav-primary',
    'nav-backdrop',
    {
      pattern: /^py-/,
      pattern: /^px-/,
      pattern: /^pt-/,
      pattern: /^pb-/,
      pattern: /^pl-/,
      pattern: /^pr-/,
      pattern: /^my-/,
      pattern: /^mx-/,
      pattern: /^mt-/,
      pattern: /^mb-/,
      pattern: /^ml-/,
      pattern: /^mr-/,
    },
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#0076FF',
        'primary-light': '#1C93FF',
        'primary-dark': '#0076D0',
        'secondary': '#9F0A15'
      },
      fontFamily: {
        'sans': ['Roboto', ...defaultTheme.fontFamily.sans],
        'serif': ['Oswald', ...defaultTheme.fontFamily.sans],
      },
      aspectRatio: {
        '21/9': '21 / 9',
        '16/9': '16 / 9',
        '3/2': '3/ 2',
        '4/3': '4 / 3',
        '3/4': '3 / 4',
        '7/10': '7 /10',
      },
    },
  },
  plugins: [
    require('tailwind-children'),
  ],
};
