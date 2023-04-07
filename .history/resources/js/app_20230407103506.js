import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import MicroModal from 'micromodal';  // es6 module
MicroModal.init();

Alpine.start();
