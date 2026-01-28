import type { Config } from 'tailwindcss'

export default {
  content: [
    './index.html',
    './src/**/*.{js,ts,jsx,tsx}',
  ],
  theme: {
    extend: {
      colors: {
        primary: '#1e3a8a',
        'primary-dark': '#111827',
        accent: '#eab308',
        'accent-light': '#facc15',
        neutral: '#f1f5f9',
      },
    },
  },
  plugins: [],
} satisfies Config