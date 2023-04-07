@php
    if ($name === 'image1') {
        $model = 'modal-1';
    }
    if ($name === 'image2') {
        $model = 'modal-2';
    }
    if ($name === 'image3') {
        $model = 'modal-3';
    }
    if ($name === 'image4') {
        $model = 'modal-4';
    }
@endphp

<div class="modal micromodal-slide" id="{{ $modal }}" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="-title">
            <header class="modal__header">
                <h2 class="modal__title" id="{{ $modal }}-title">
                    Micromodal
                </h2>
                <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="{{ $modal }}-content">
                <p>
                    Try hitting the <code>tab</code> key and notice how the focus stays within the modal itself. Also,
                    <code>esc</code> to close modal.
                </p>
            </main>
            <footer class="modal__footer">
                <button type="button" class="modal__btn modal__btn-primary">Continue</button>
                <button type="button" class="modal__btn" data-micromodal-close
                    aria-label="Close this dialog window">Close</button>
            </footer>
        </div>
    </div>
</div>

<a data-micromodal-trigger="modal-1" href='javascript:;'>Open Modal Dialog</a>
