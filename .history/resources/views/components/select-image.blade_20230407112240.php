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
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="{{ $modal }}-title">
            <header class="modal__header">
                <h2 class="text-xl text-gray-700" id="{{ $modal }}-title">
                    ファイルを選択してください
                </h2>
                <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="{{ $modal }}-content">
                <div class="flex flex-wrap">
                    @foreach ($images as $image)
                        <div class="w-1/4 p-2 md:p-4">
                            <a href="{{ route('owner.images.edit', ['image' => $image->id]) }}">
                                <div class="border rounded-md p-2 md:p-4">
                                    <div class="mb-4">
                                        <x-thumbnail :filename="$image->filename" type="products" />
                                        <div class="text-gray-700"> {{ $image->title }} </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </main>
            <footer class="modal__footer">
                <button type="button" class="modal__btn" data-micromodal-close aria-label="閉じる">閉じる</button>
            </footer>
        </div>
    </div>
</div>

<a data-micromodal-trigger="{{ $modal }}" href='javascript:;'>ファイルを選択</a>
