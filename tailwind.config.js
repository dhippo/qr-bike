/** @type {import('tailwindcss').Config} */
const colors = require("tailwindcss/colors");
module.exports = {
  content: ["./src/**/*.{html,js}",
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      "night": {
        "50": "#E7EEF3",
        "100": "#D0DDE7",
        "200": "#A0BBCF",
        "300": "#7199B7",
        "400": "#4C7595",
        "500": "#334F64",
        "600": "#294051",
        "700": "#1F303D",
        "800": "#152029",
        "900": "#0A1014"
      },
      "hippo": {
        "50": "#E8F5F7",
        "100": "#D1EBF0",
        "200": "#A7D9E2",
        "300": "#79C5D2",
        "400": "#4BB1C3",
        "500": "#358F9F",
        "600": "#2A727E",
        "700": "#205660",
        "800": "#163B41",
        "900": "#0A1C1F"
      },
      "cielcolor": {
      "50": "#F7FBFD",
      "100": "#F3F8FB",
      "200": "#E4F0F7",
      "300": "#D8E9F3",
      "400": "#C8E0EE",
      "500": "#BBD9EA",
      "600": "#7BB5D6",
      "700": "#3C91C3",
      "800": "#286081",
      "900": "#143142"
    },
      "bluecolor": {
        "50": "#DEEDF8",
        "100": "#C0DDF1",
        "200": "#7EB8E2",
        "300": "#3F96D4",
        "400": "#246EA3",
        "500": "#164363",
        "600": "#12364F",
        "700": "#0D273A",
        "800": "#081926",
        "900": "#050E15"
      },
      "kit-red": {
        "light": "#FEB1A5",
        "dark": "#A73137",
      },
      "kit-blue": {
        "light": "#BAD9EA",
        "dark": "#174363",
      },
      "kit-yellow": {
        "light": "#FFF5E8",
        "dark": "#F9BF6E",
        "gold":"#eab308",
      },
      "kit-hippo-green": {
        "light": "#d9eaba",
        "dark": "#436317",
      },
      "kit-hippo-pink": {
        "light": "#eabad9",
        "dark": "#631743",
      },
      "kit-purple": {
        "light": "#af91c9",
        "dark": "#7a49a5",
      },

      "brandcolor": {
        "first200": "#BAD9EA",
        "first500": "#174363",
        "first700": "#174363",
        // colors de palettes
        // "first200": "#D4E1FC",
        // "first500": "#1D64F2",
        // "first700": "#09399A",

        "second200": "#9FCCF4",
        "second500": "#1A80D9",
        "second700": "#104E84",

        "third200": "#9FE4F4",
        "third500": "#1AB6D9",
        "third700": "#106F84",

        "fourth200": "#B8E5D8",
        "fourth500": "#50BFA0",
        "fourth700": "#2C7762",

        "fifth200": "#FAE7AD",
        "fifth500": "#F2C12E",
        "fifth700": "#A37D0A",
      },
      "kit-green": {
        "light": "#d9eaba",
        "mid": "#828C6F",
        "dark": "#47641d",
      },
      "kit-pink": {
        "light": "#eabad9",
        "mid": "#745D6C",
        "dark": "#67204f",
      },

      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      red: colors.red,
      emerald: colors.emerald,
      indigo: colors.indigo,
      yellow: colors.yellow,
    },
    extend: {

    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/aspect-ratio')
  ],
}
