@csrf

<div class="uk-margin-large-bottom">
{!! formSelect('folder')->options($folders)->label('Folder *')->value(old('folder'))->render() !!}

{!! formFile('file')->label('File *')->placeholder('select file')->value(old('file'))->render() !!}
</div>

{!! formButton('upload')->render() !!}
