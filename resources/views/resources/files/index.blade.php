<x-app-layout>
    <x-title title="Folders" />

    <div class="uk-flex uk-flex-right">
        <div>
            <a class="uk-button uk-button-primary" href="{{ route('files.create') }}">
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
            @foreach($files as $file)
                <tr>
                    <td>{{ $file['name'] }}</td>
                    <td>
                        <a href="{{ route('files.delete', $file['name']) }}">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
