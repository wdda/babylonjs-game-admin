<x-app-layout>
    <x-title title="Folders" />

    <div class="uk-flex uk-flex-right">
        <div>
            <a class="uk-button uk-button-primary" href="{{ route('folders.create') }}">
                + create
            </a>
        </div>
    </div>

    <table class="uk-table">
        <thead>
            <tr>
                <th>name</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($folders as $folder)
                <tr>
                    <td>{{ $folder['name'] }}</td>
                    <td>
                        <a href="{{ route('folders.delete', $folder['name']) }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
