@extends('layouts.app')

@section('content')
    <table class="table-auto w-full">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="px-4 py-2">ISBN</th>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Author</th>
                <th class="px-4 py-2">Date Published</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $book->isbn }}</td>
                    <td class="px-4 py-2">{{ $book->title }}</td>
                    <td class="px-4 py-2">{{ $book->author }}</td>
                    <td class="px-4 py-2">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection