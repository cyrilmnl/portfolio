import type { Config } from 'tailwindcss';

export default {
	content: ['./src/**/*.{html,js,svelte,ts}'],

	theme: {
		extend: {
			colors: {
				primary: {
					100: '#f0f9ff',
					200: '#dccffd',
					300: '#cfacfa',
					400: '#b392f0',
					500: '#9f7aea',
					600: '#8b60e4',
					700: '#7746de',
					800: '#5d2fd4',
					900: '#4c1fba'
				}
			}
		}
	},

	plugins: []
} satisfies Config;
