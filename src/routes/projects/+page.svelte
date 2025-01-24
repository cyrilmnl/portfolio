<script lang="ts">
	import { ArrowUpRightIcon } from 'svelte-feather-icons';
	import Modal from '../../components/Modal.svelte';
	import { onMount } from 'svelte';
	import type { ModalContent, ModalData } from '$lib/types/Modal';

	let showModal = false;
	let modalContent: ModalContent = { title: '', description: '', technologies: [], image: null };
	let modalData: ModalData = {};

	onMount(async () => {
		const response = await fetch('/en.json');
		modalData = await response.json();
	});

	function openModal(contentKey: string) {
		modalContent = modalData[contentKey];
		showModal = true;
		document.body.style.overflow = 'hidden';
	}

	function closeModal() {
		showModal = false;
		document.body.style.overflow = 'auto';
	}
</script>

<Modal bind:show={showModal} onClose={closeModal}>
	<h2 class="text-2xl font-semibold text-primary-200">{modalContent.title}</h2>
	<p class="mt-4 text-gray-400">{modalContent.description}</p>
	<div class="mt-4">
		{#each modalContent.technologies as technology}
			<span
				class="mb-2 mr-2 inline-block rounded-full bg-primary-800 bg-opacity-25 px-2 py-1 text-xs font-semibold text-primary-200"
			>
				{technology}
			</span>
		{/each}
	</div>
	{#if modalContent.image}
		<img
			class="mt-4 rounded-lg"
			src="/assets/projects/{modalContent.image}"
			alt={modalContent.title}
		/>
	{/if}
</Modal>

<div class="w-full px-8 pb-24 md:w-3/5 md:py-24">
	<a
		href="/"
		class="rounded-full bg-primary-800 bg-opacity-25 px-6 py-3 text-lg font-semibold text-primary-200 transition duration-200 hover:bg-opacity-50"
	>
		← Back to home
	</a>
	<div class="mt-8 overflow-x-auto">
		<table class="min-w-full divide-y divide-gray-200 text-gray-400">
			<thead>
				<tr>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider"
						>Year</th
					>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider"
						>Project</th
					>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider"
						>Details</th
					>
					<th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider"
						>Link</th
					>
				</tr>
			</thead>
			<tbody class="divide-y divide-gray-200">
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2025</td>
					<td class="whitespace-nowrap px-6 py-4">Portfolio</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button
							class="text-primary-500 hover:text-primary-700"
							onclick={() => openModal('portfolio')}>Details</button
						>
					</td>
					<td class="whitespace-nowrap px-6 py-4">
						<a
							href="https://cyril-manil.fr"
							class="flex items-center text-primary-500 hover:text-primary-700"
							target="_blank"
						>
							cyril-manil.fr
							<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
						</a>
					</td>
				</tr>
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2025</td>
					<td class="whitespace-nowrap px-6 py-4">akcelo.io</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button
							class="text-primary-500 hover:text-primary-700"
							onclick={() => openModal('akcelo')}>Details</button
						>
					</td>
					<td class="whitespace-nowrap px-6 py-4">
						<a
							href="https://akcelo.io"
							class="flex items-center text-primary-500 hover:text-primary-700"
							target="_blank"
						>
							akcelo.io
							<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
						</a>
					</td>
				</tr>
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2024</td>
					<td class="whitespace-nowrap px-6 py-4">Ardennes Mega Trail (FAQ)</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button class="text-primary-500 hover:text-primary-700" onclick={() => openModal('amt')}
							>Details</button
						>
					</td>
					<td class="whitespace-nowrap px-6 py-4">
						<a
							href="https://www.ardennes-megatrail.com/"
							class="flex items-center text-primary-500 hover:text-primary-700"
							target="_blank"
						>
							ardennes-megatrail.com
							<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
						</a>
					</td>
				</tr>
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2024</td>
					<td class="whitespace-nowrap px-6 py-4">Akcelo Leads</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button
							class="text-primary-500 hover:text-primary-700"
							onclick={() => openModal('leads')}>Details</button
						>
					</td>
				</tr>
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2024</td>
					<td class="whitespace-nowrap px-6 py-4">Footeo</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button
							class="text-primary-500 hover:text-primary-700"
							onclick={() => openModal('footeo')}>Details</button
						>
					</td>
					<td class="whitespace-nowrap px-6 py-4">
						<a
							href="https://athletic-cuvry-augny.footeo.com"
							class="flex items-center text-primary-500 hover:text-primary-700"
							target="_blank"
						>
							example
							<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
						</a>
					</td>
				</tr>
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2023</td>
					<td class="whitespace-nowrap px-6 py-4">Spotify Stats</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button
							class="text-primary-500 hover:text-primary-700"
							onclick={() => openModal('spotify')}>Details</button
						>
					</td>
				</tr>
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2023</td>
					<td class="whitespace-nowrap px-6 py-4">Akcelo internal tools</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button
							class="text-primary-500 hover:text-primary-700"
							onclick={() => openModal('slmads')}>Details</button
						>
					</td>
				</tr>
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2023</td>
					<td class="whitespace-nowrap px-6 py-4">Sports Local Media</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button
							class="text-primary-500 hover:text-primary-700"
							onclick={() => openModal('sportslocalmedia')}>Details</button
						>
					</td>
					<td class="whitespace-nowrap px-6 py-4">
						<a
							href="https://sportslocalmedia.fr"
							class="flex items-center text-primary-500 hover:text-primary-700"
							target="_blank"
						>
							sportslocalmedia.fr
							<ArrowUpRightIcon class="h-6 w-6 text-primary-200" />
						</a>
					</td>
				</tr>
				<tr>
					<td class="whitespace-nowrap px-6 py-4">2022</td>
					<td class="whitespace-nowrap px-6 py-4">Master's degree in computer science web app</td>
					<td class="whitespace-nowrap px-6 py-4">
						<button
							class="text-primary-500 hover:text-primary-700"
							onclick={() => openModal('masteria')}>Details</button
						>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
