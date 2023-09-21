<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Portfolio') }}
        </h2>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-200">
                    @if (session()->get('succes'))
                        <div class="alert alert-succes">
                            {{ session()->get('succes')}}
                        </div>
                    @endif
                    <a class="bttn" href="{{'projects/create'}}">Voeg een project toe</a>
                    <h1 class="projects">Projecten</h1>
                    <div class="max-w-7xl mx-auto p-6 lg:p-8">
                        <div class="flex justify-center">
                            
                        </div>
        
                        <div class="mt-16">
                                @foreach ($projects as $project)
                                <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">
                                    {{-- <img src="{{$project->image}}" alt=""> --}}
                                    <h1>{{$project->naam}}</h1>
                                    <p>{{$project->content}}</p>
                                    <form action="{{ route('projects.destroy',$project->id) }}" method="Post">
                                        {{-- <a class="btn btn-primary" href="{{ route('projects.edit', $project->id)}}">{{ __('Aanpassen')}}</a> --}}
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">{{ __('Verwijderen')}}</button>
                                    </form>
                                </div>
                                @endforeach
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>


    
</x-app-layout>


