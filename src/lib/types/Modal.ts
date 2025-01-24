export interface ModalContent {
	title: string;
	description: string;
	technologies: string[];
	image: string | null;
}

export interface ModalData {
	[key: string]: ModalContent;
}
