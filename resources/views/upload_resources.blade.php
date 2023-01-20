<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Upload') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('uploadResources') }}" enctype="multipart/form-data">
        @csrf
        <div class="uk-grid">
            <div>
                <div uk-form-custom="target: true">
                    <input type="file" aria-label="Custom controls" name="map">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select map" aria-label="Custom controls" disabled>
                </div>
            </div>

            <div>
                <div uk-form-custom="target: true">
                    <input type="file" aria-label="Custom controls" name="character">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select character" aria-label="Custom controls" disabled>
                </div>
            </div>

            <div>
                <div uk-form-custom="target: true">
                    <input type="file" aria-label="Custom controls" name="environment">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Select environment" aria-label="Custom controls" disabled>
                </div>
            </div>
        </div>

        <div class="uk-margin-top">
            <button class="uk-button uk-button-primary">
                upload
            </button>
        </div>
    </form>
</x-app-layout>
