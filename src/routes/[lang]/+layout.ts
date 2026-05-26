import { error } from '@sveltejs/kit';

export const load = ({ params }) => {
	if (params.lang !== 'fr' && params.lang !== 'en') {
		throw error(404, 'Not found');
	}
};
