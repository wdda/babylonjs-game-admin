<x-app-layout>
    <x-title title="Create folder" />

    <form action="{{ route('files.store') }}" method="POST">
        @include('resources.files.form')
    </form>



</x-app-layout>
