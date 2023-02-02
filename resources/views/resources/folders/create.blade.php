<x-app-layout>
    <x-title title="Create folder" />

    <form action="{{ route('folders.store') }}" method="POST">
        @include('resources.files.form')
    </form>

</x-app-layout>
