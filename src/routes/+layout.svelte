<script lang="ts">
	import '../app.css';
	import HoverGlow from '../components/HoverGlow.svelte';
	import { FileIcon, GithubIcon, LinkedinIcon } from 'svelte-feather-icons';
	import { goto } from '$app/navigation';
	import { onMount } from 'svelte';
	import { page } from '$app/stores';

	let { children } = $props();

	let m = $state<{ x: number; y: number } | null>(null);
	let showButton = $state(false);
	let screenSize = $state(0);
	type Lang = 'en' | 'fr';
	let currentLang = $derived<Lang>($page.url.pathname.split('/')[1] === 'en' ? 'en' : 'fr');
	let localeRoot = $derived(`/${currentLang}`);

	const i18n = {
		en: {
			subtitle: 'Fullstack Developer & Traffic Manager',
			intro:
				'I specialize in building web applications with a focus on performance and user experience.',
			about: 'About me',
			experience: 'Experience',
			projects: 'Projects',
			rights: 'All rights reserved. Built with',
			top: '↑ Top'
		},
		fr: {
			subtitle: 'Développeur Fullstack & Traffic Manager',
			intro:
				"Je suis spécialisé dans le développement d'applications web avec un focus sur la performance et l'expérience utilisateur.",
			about: 'À propos',
			experience: 'Expérience',
			projects: 'Projets',
			rights: 'Tous droits réservés. Conçu avec',
			top: '↑ Haut'
		}
	};

	function mousemove(event: MouseEvent) {
		const target = event.currentTarget as HTMLElement;
		const r = target.getBoundingClientRect();
		m = { x: event.clientX - r.left, y: event.clientY - r.top };
	}

	function mouseleave() {
		m = null;
	}

	function scrollToTop() {
		window.scrollTo({ top: 0, behavior: 'smooth' });
	}

	function handleScroll() {
		showButton = window.scrollY > 150;
	}

	function switchLanguage(event: Event) {
		const target = event.currentTarget as HTMLSelectElement;
		const nextLang = target.value as Lang;
		const parts = $page.url.pathname.split('/').filter(Boolean);
		if (parts[0] === 'fr' || parts[0] === 'en') {
			parts[0] = nextLang;
		} else {
			parts.unshift(nextLang);
		}
		const nextPath = `/${parts.join('/')}${$page.url.search}${$page.url.hash}`;
		void goto(nextPath);
	}

	onMount(() => {
		window.addEventListener('scroll', handleScroll);
		return () => {
			window.removeEventListener('scroll', handleScroll);
		};
	});
</script>

<svelte:window bind:innerWidth={screenSize} />

<div
	class="body min-h-screen overflow-hidden bg-gray-900"
	onmousemove={mousemove}
	onmouseleave={mouseleave}
	aria-hidden="true"
>
	<HoverGlow {m} />
	<div class="container mx-auto">
		<div class="flex flex-wrap">
			<div class="w-full px-8 py-24 md:w-2/5">
				<h1 class="text-center text-5xl font-bold text-white md:text-start">Cyril Manil</h1>
				<p class="mt-4 text-center text-xl text-gray-300 md:text-start">
					{i18n[currentLang].subtitle}
				</p>
				<p class="mt-4 text-center text-lg text-gray-400 md:text-start">
					{i18n[currentLang].intro}
				</p>
				<div class="mt-8 flex justify-center gap-4 md:justify-start">
					<a
						href="https://github.com/cyrilmnl/"
						target="_blank"
						class="inline-block text-lg font-semibold text-primary-200 transition duration-200 hover:text-primary-500"
					>
						<GithubIcon class="h-6 w-6" />
					</a>
					<a
						href="https://www.linkedin.com/in/cyril-manil-a40a1924b/"
						target="_blank"
						class="inline-block text-lg font-semibold text-primary-200 transition duration-200 hover:text-primary-500"
					>
						<LinkedinIcon class="h-6 w-6" />
					</a>
					<a
						href="/files/cv.pdf"
						download="Cyril Manil - CV.pdf"
						class="inline-block text-lg font-semibold text-primary-200 transition duration-200 hover:text-primary-500"
					>
						<FileIcon class="h-6 w-6" />
					</a>
				</div>
				<div class="mt-8 flex flex-wrap justify-center gap-4 md:justify-start">
					<a
						href={`${localeRoot}/#about`}
						class="inline-block rounded-full bg-primary-800 bg-opacity-25 px-6 py-3 text-lg font-semibold text-primary-200 transition duration-200 hover:bg-opacity-50"
					>
						{i18n[currentLang].about}
					</a>
					<a
						href={`${localeRoot}/#experience`}
						class="inline-block rounded-full bg-primary-800 bg-opacity-25 px-6 py-3 text-lg font-semibold text-primary-200 transition duration-200 hover:bg-opacity-50"
					>
						{i18n[currentLang].experience}
					</a>
					<a
						href={`${localeRoot}/#projects`}
						class="inline-block rounded-full bg-primary-800 bg-opacity-25 px-6 py-3 text-lg font-semibold text-primary-200 transition duration-200 hover:bg-opacity-50"
					>
						{i18n[currentLang].projects}
					</a>
				</div>
				{#if screenSize > 768 && $page.url.pathname === localeRoot}
					<div class="mt-8 flex flex-col items-center">
						<img
							src="/assets/cube.avif"
							alt="Cube 1"
							class="mt-8 max-h-96 max-w-96 self-end grayscale duration-300 hover:scale-105 hover:grayscale-0"
						/>
						<img
							src="/assets/cube.avif"
							alt="Cube 2"
							class="max-h-80 max-w-80 rotate-[45deg] self-start grayscale duration-300 hover:scale-105 hover:grayscale-0"
						/>
						<img
							src="/assets/cube.avif"
							alt="Cube 3"
							class="max-h-32 max-w-32 rotate-[120deg] self-end grayscale duration-300 hover:scale-105 hover:grayscale-0"
						/>
					</div>
				{/if}
			</div>
			{@render children()}
		</div>
	</div>
	<div class="absolute right-4 top-4 z-20">
		<select
			class="rounded-md border border-primary-500 bg-gray-900 px-3 py-2 text-sm text-primary-200"
			value={currentLang}
			onchange={switchLanguage}
			aria-label="Language selector"
		>
			<option value="en">EN</option>
			<option value="fr">FR</option>
		</select>
	</div>
	<div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 text-center text-gray-400">
		<p>
			© {new Date().getFullYear()} Cyril Manil - {i18n[currentLang].rights}
			<a href="https://svelte.dev/" class="text-primary-200 hover:underline" target="_blank"
				>Svelte</a
			>
			and
			<a href="https://tailwindcss.com/" class="text-primary-200 hover:underline" target="_blank"
				>Tailwind CSS</a
			>.
		</p>
	</div>
	{#if showButton}
		<button
			class="fixed bottom-4 right-4 rounded-full bg-primary-800 bg-opacity-25 px-6 py-3 text-lg font-semibold text-primary-200 transition duration-200 hover:bg-opacity-50"
			onclick={scrollToTop}
		>
			{i18n[currentLang].top}
		</button>
	{/if}
</div>

<style>
	.body {
		position: relative;
	}
</style>
