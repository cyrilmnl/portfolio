<script lang="ts">
	import { ArrowUpRightIcon } from 'svelte-feather-icons';
	import { page } from '$app/stores';

	let currentLang = $derived<'en' | 'fr'>($page.url.pathname.split('/')[1] === 'en' ? 'en' : 'fr');

	const i18n = {
		en: {
			experience: 'Experience',
			projects: 'Projects',
			seeFullProjects: 'See full projects list',
			about1:
				'Passionate about technology and design, I specialize in building intuitive and high-performance web applications. With hands-on experience in technologies like Svelte, Django, Symfony or React, I excel at transforming ideas into functional, user-centric solutions.',
			about2:
				'Originally from France, I hold a degree in Computer Science from the Institut Universitaire de Technologie de Reims (2024). I’m currently a developer at Akcelo, where I work on a variety of projects for digital advertising agency and publishers.',
			about3:
				'I’m always eager to tackle new challenges, expand my expertise, and collaborate with teams to craft solutions that drive results and innovation.',
			about4:
				'As a Traffic Manager since 2026, I plan, launch, monitor and optimize advertising campaigns to improve delivery quality and performance, while ensuring accurate setup, pacing, reporting and coordination between technical and business teams. I also hold a DV360 certification, available on my LinkedIn profile.',
			trafficTitle: 'Traffic Manager',
			trafficPeriod: 'Sports Local Media (2026 - Present)',
			trafficDesc:
				'I manage campaign optimization and ad operations trafficking/monitoring on Google Ad Manager and Display & Video 360.',
			fullstackTitle: 'Fullstack Developer',
			fullstackPeriod: 'Akcelo (June 2024 - Present)',
			fullstackDesc:
				'Developed and maintained web applications for digital advertising agency and publishers.',
			workStudyTitle: 'Work-study student as a developer',
			workStudyPeriod: 'Spacefoot (June 2023 - June 2024)',
			workStudyDesc:
				'Worked on various projects for Akcelo, a digital advertising agency and publishers and Footeo, a content management system for sports clubs.',
			internTitle: 'Intern as a developer',
			internPeriod: 'Spacefoot (April 2023 - June 2023)',
			internDesc:
				'Integrated a new website for Sports Local Media, a digital advertising agency from Spacefoot.',
			faqTitle: 'Frequently asked question web component',
			faqDesc:
				'Web component built with Svelte to display frequently asked questions for Ardennes Mega Trail website.',
			mastersTitle: "Master's degree in computer science web application",
			mastersDesc:
				"Web application built for the master's degree in computer science at the University of Reims Champagne-Ardenne as part of a school project.",
			portfolioTitle: 'Personal portfolio',
			portfolioDesc:
				'Personal portfolio built with Svelte and Tailwind CSS to showcase my work and skills.'
		},
		fr: {
			experience: 'Expérience',
			projects: 'Projets',
			seeFullProjects: 'Voir la liste complète des projets',
			about1:
				"Passionné par la technologie et le design, je me spécialise dans la création d'applications web intuitives et performantes. Avec une expérience concrète sur des technologies comme Svelte, Django, Symfony ou React, je transforme les idées en solutions fonctionnelles orientées utilisateur.",
			about2:
				"Originaire de France, je suis diplômé en informatique de l'Institut Universitaire de Technologie de Reims (2024). Je suis actuellement développeur chez Akcelo, où je travaille sur différents projets pour une agence de publicité digitale et des éditeurs.",
			about3:
				'Je suis toujours motivé à relever de nouveaux défis, à élargir mon expertise et à collaborer avec des équipes pour concevoir des solutions innovantes et efficaces.',
			about4:
				"En tant que Traffic Manager depuis 2026, je pilote le lancement, le suivi et l'optimisation des campagnes publicitaires pour améliorer la qualité de diffusion et la performance, tout en garantissant un paramétrage fiable, le pacing, le reporting et la coordination entre équipes techniques et business. Je possède également une certification DV360, disponible sur mon profil LinkedIn.",
			trafficTitle: 'Traffic Manager',
			trafficPeriod: 'Sports Local Media (2026 - Présent)',
			trafficDesc:
				"Je gère l'optimisation des campagnes ainsi que le trafficking/suivi des campagnes publicitaires sur Google Ad Manager et Display & Video 360.",
			fullstackTitle: 'Développeur Fullstack',
			fullstackPeriod: 'Akcelo (Juin 2024 - Présent)',
			fullstackDesc:
				"Développement et maintenance d'applications web pour une agence de publicité digitale et des éditeurs.",
			workStudyTitle: 'Alternant développeur',
			workStudyPeriod: 'Spacefoot (Juin 2023 - Juin 2024)',
			workStudyDesc:
				'Participation à différents projets pour Akcelo, agence de publicité digitale, et Footeo, CMS dédié aux clubs sportifs.',
			internTitle: 'Stagiaire développeur',
			internPeriod: 'Spacefoot (Avril 2023 - Juin 2023)',
			internDesc:
				'Intégration du nouveau site web de Sports Local Media, agence de publicité digitale du groupe Spacefoot.',
			faqTitle: 'Composant web de FAQ',
			faqDesc:
				'Composant web développé avec Svelte pour afficher une FAQ sur le site de l’Ardennes Mega Trail.',
			mastersTitle: 'Application web de master en informatique',
			mastersDesc:
				"Application web réalisée pour le master informatique de l'Université de Reims Champagne-Ardenne dans le cadre d'un projet scolaire.",
			portfolioTitle: 'Portfolio personnel',
			portfolioDesc:
				'Portfolio personnel développé avec Svelte et Tailwind CSS pour présenter mon parcours et mes projets.'
		}
	};
</script>

<div class="w-full px-8 pb-24 md:w-3/5 md:py-24">
	<div id="about">
		<p class="mt-4 text-lg text-gray-400">{i18n[currentLang].about1}</p>
		<p class="mt-4 text-lg text-gray-400">{i18n[currentLang].about2}</p>
		<p class="mt-4 text-lg text-gray-400">{i18n[currentLang].about3}</p>
		<p class="mt-4 text-lg text-gray-400">{i18n[currentLang].about4}</p>
	</div>
	<div id="experience">
		<h2 class="mt-16 text-3xl font-bold text-white">{i18n[currentLang].experience}</h2>
		<div class="mt-8 grid grid-cols-1 gap-2">
			<a
				href="https://www.sportslocalmedia.fr/"
				target="_blank"
				class="rounded-lg p-6 transition duration-200 hover:bg-gray-800 hover:shadow-lg"
			>
				<div class="flex items-center justify-between">
					<h3 class="text-xl font-semibold text-primary-200">{i18n[currentLang].trafficTitle}</h3>
					<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
				</div>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].trafficPeriod}</p>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].trafficDesc}</p>
				<div class="mt-2 flex flex-wrap gap-2">
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Google Ad Manager
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Display & Video 360
					</p>
				</div>
			</a>
			<a
				href="http://www.akcelo.io/"
				target="_blank"
				class="rounded-lg p-6 transition duration-200 hover:bg-gray-800 hover:shadow-lg"
			>
				<div class="flex items-center justify-between">
					<h3 class="text-xl font-semibold text-primary-200">{i18n[currentLang].fullstackTitle}</h3>
					<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
				</div>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].fullstackPeriod}</p>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].fullstackDesc}</p>
				<div class="mt-2 flex flex-wrap gap-2">
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Ansible
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						PostgreSQL
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Flowbite & ApexCharts
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						RabbitMQ
					</p>
				</div>
			</a>
			<a
				href="https://www.footeo.com/"
				target="_blank"
				class="rounded-lg p-6 transition duration-200 hover:bg-gray-800 hover:shadow-lg"
			>
				<div class="flex items-center justify-between">
					<h3 class="text-xl font-semibold text-primary-200">{i18n[currentLang].workStudyTitle}</h3>
					<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
				</div>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].workStudyPeriod}</p>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].workStudyDesc}</p>
				<div class="mt-2 flex flex-wrap gap-2">
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Symfony (PHP)
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">Docker</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Django (Python)
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">MySQL</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						TypeScript
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Prebid.js
					</p>
				</div>
			</a>
			<a
				href="https://www.sportslocalmedia.fr/"
				target="_blank"
				class="rounded-lg p-6 transition duration-200 hover:bg-gray-800 hover:shadow-lg"
			>
				<div class="flex items-center justify-between">
					<h3 class="text-xl font-semibold text-primary-200">{i18n[currentLang].internTitle}</h3>
					<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
				</div>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].internPeriod}</p>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].internDesc}</p>
				<div class="mt-2 flex flex-wrap gap-2">
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						SvelteKit
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Tailwind CSS
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Cloudflare
					</p>
				</div>
			</a>
		</div>
	</div>
	<div id="projects">
		<h2 class="mt-16 text-3xl font-bold text-white">{i18n[currentLang].projects}</h2>
		<div class="mt-8 grid grid-cols-1 gap-2">
			<a
				href="https://github.com/cyrilmnl/ardennesmegatrail-faq"
				target="_blank"
				class="rounded-lg p-6 transition duration-200 hover:bg-gray-800 hover:shadow-lg"
			>
				<div class="flex items-center justify-between">
					<h3 class="text-xl font-semibold text-primary-200">{i18n[currentLang].faqTitle}</h3>
					<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
				</div>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].faqDesc}</p>
				<div class="mt-2 flex flex-wrap gap-2">
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">Svelte</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Supabase
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">Docker</p>
				</div>
			</a>
			<a
				href="https://github.com/cyrilmnl/sae-master-ia"
				target="_blank"
				class="rounded-lg p-6 transition duration-200 hover:bg-gray-800 hover:shadow-lg"
			>
				<div class="flex items-center justify-between">
					<h3 class="text-xl font-semibold text-primary-200">{i18n[currentLang].mastersTitle}</h3>
					<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
				</div>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].mastersDesc}</p>
				<div class="mt-2 flex flex-wrap gap-2">
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Symfony (PHP)
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">MySQL</p>
				</div>
			</a>
			<a
				href="https://github.com/cyrilmnl/portfolio"
				target="_blank"
				class="rounded-lg p-6 transition duration-200 hover:bg-gray-800 hover:shadow-lg"
			>
				<div class="flex items-center justify-between">
					<h3 class="text-xl font-semibold text-primary-200">{i18n[currentLang].portfolioTitle}</h3>
					<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
				</div>
				<p class="mt-2 text-lg text-gray-400">{i18n[currentLang].portfolioDesc}</p>
				<div class="mt-2 flex flex-wrap gap-2">
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						SvelteKit
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Tailwind CSS
					</p>
					<p class="rounded-full bg-primary-800 bg-opacity-15 px-4 py-2 text-primary-500">
						Cloudflare
					</p>
				</div>
			</a>
			<a
				href={`/${currentLang}/projects`}
				class="w-fit rounded-full bg-primary-800 bg-opacity-25 px-6 py-3 text-lg font-semibold text-primary-200 transition duration-200 hover:bg-opacity-50"
			>
				{i18n[currentLang].seeFullProjects}
			</a>
		</div>
	</div>
</div>
