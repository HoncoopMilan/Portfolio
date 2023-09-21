<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard - Projects - Update') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @endif
                    <form action="{{ route('projects.update', $project->id) }}" method="POST" style="color: black">
                        @csrf 
                        @method('PUT')   
                        <div class="form-group">
                            <strong>Project Titel:</strong>
                            <input type="text" name="naam" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <strong>Beschrijving:</strong>
                            <textarea type="text" name="content" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <strong>Afbeelding:</strong>
                            <input type="file" name="image" class="form-control" >
                        </div>
                        
                        <button type="submit">Project opslaan</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>