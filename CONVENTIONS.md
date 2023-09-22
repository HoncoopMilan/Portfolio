# Laravel Conventies

## Mappenstructuur

Hou je aan de mappenstructuur van Laravel

## Bestandsnamen
Zorg ervoor dat je bestanden logische en duidelijke namen hebben

## inspringen
Voor het inspringen gebruik je tabs van 4 spaties
Zorg ervoor dat er geen onnodige tabs worden gebruikt
Zie code voor voorbeeld
```
 @foreach ($projects as $project)
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">
        @if (isset($imagePath))
            <img src="{{ asset('storage/' . $imagePath) }}" alt="Uploaded Image">
        @endif
            <h1>{{$project->naam}}</h1>
            <p>{{$project->content}}</p>
            <form action="{{ route('projects.destroy',$project->id) }}" method="Post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">{{ __('Verwijderen')}}</button>
            </form>
    </div>
@endforeach
```

## variabele namen
Gebruik nuttige en beschrijvende namen voor je variablele
Gebruik camelCase

## Github
zorg ervoor dat je commits een duidelijke samenvattende titel hebben en een goede beschrijving waar in staat wat je hebt gedaan

## Beveiliging
Maak gebruik van het inlog systeem van Breeze

## style
Zorg ervoor dat de h1 geel is en de style van laravel aan word gehouden