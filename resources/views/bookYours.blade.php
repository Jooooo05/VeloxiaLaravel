@extends('layouts.main')


@section('blade')
    <div class="mt-5">p</div>
    <h1 class="m-5 text-center">Book yours Page</h1>

    <table class="table m-5">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Ponsel</th>
                <th scope="col">PAX</th>
                <th scope="col">Date</th>
                <th scope="col">Place</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($allBooks as $book)
                <tr>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->no_phone }}</td>
                    <td>{{ $book->pax }}</td>
                    <td>{{ $book->date_order }}</td>
                    <td>{{ $book->place }}</td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="5">Reservation is empty</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
