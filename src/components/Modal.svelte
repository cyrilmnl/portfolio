<script>
	import { XCircleIcon } from 'svelte-feather-icons';

	export let show = false;
	export let onClose = () => {};
</script>

{#if show}
	<div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 p-4">
		<div
			class="w-full rounded-lg border border-primary-400 bg-black bg-opacity-25 p-8 text-white backdrop-blur-sm md:w-3/5"
		>
			<button on:click={onClose} class="float-right">
				<XCircleIcon class="h-6 w-6 text-primary-500 hover:text-primary-700" />
			</button>
			<slot></slot>
		</div>
	</div>
{/if}
