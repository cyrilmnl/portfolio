<script lang="ts">
	import { fade } from 'svelte/transition';

	export let m: { x: number; y: number } | null = null;
</script>

{#if m}
	<div transition:fade class="blob" style:transform="translate({m.x}px, {m.y}px)"></div>
{/if}

<style>
	.blob {
		filter: blur(100px);
		position: absolute;
		top: -250px;
		left: -250px;
		width: 500px;
		height: 500px;
		border-radius: 50%;
		background: rgba(76, 31, 186, 0.15);
		pointer-events: none;
	}
</style>
