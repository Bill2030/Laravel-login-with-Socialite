<x-app-layout>
    <x-slot name="header">
       
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <div>
                    <a class="bg-green-600 p-2 mb-3" href="">Create New</a>
                   </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->body}}</td>
                                        <td>
                                            <a class="bg-blue-600 rounded-lg p-2" href="">Edit</a>
                                           
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>

                    </table>
                    {{$posts->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
