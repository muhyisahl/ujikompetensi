@extends('master')

@section('title', 'Catatan Perjalanan')

@section('content')
<table class="table">
    @php
        $no=1
    @endphp
    <thead>
        <tr>
            <th scope="col">No.</th>
            {{-- <th scope="col">Id_user</th> --}}
            <th scope="col">Tanggal
                <form action="/urut" method="GET">
                    @csrf
                    <div>
                        <button class="button" name="tanggalDesc" value="Desc" href="/urut" title="Terbaru">
                            <i class="fas fa-angle-up"></i>
                        </button>
                        <button class="button" name="tanggalAsc" value="Asc" href="/urut" title="Terlama">
                            <i class="fas fa-angle-down"></i>
                        </button>
                    </div>
                </form>
            </th>
            <th scope="col">Jam
                <form action="/urut" method="GET">
                    @csrf
                    <div>
                        <button class="button" name="jamDesc" value="Desc" href="/urut" title="Terbaru">
                            <i class="fas fa-angle-up"></i>
                        </button>
                        <button class="button" name="jamAsc" value="Asc" href="/urut" title="Terlama">
                            <i class="fas fa-angle-down"></i>
                        </button>
                    </div>
                </form>
            </th>
            <th scope="col">Alamat</th>
            <th scope="col">Suhu
                <form action="/urut" method="GET">
                    @csrf
                    <div>
                        <button class="button" name="suhuDesc" value="Desc" href="/urut" title="Suhu Tertinggi">
                            <i class="fas fa-angle-up"></i>
                        </button>
                        <button class="button" name="suhuAsc" value="Asc" href="/urut" title="Suhu Terendah">
                            <i class="fas fa-angle-down"></i>
                        </button>
                    </div>
                </form>
            </th>
        </tr>
    </thead>
    @foreach ($data as $item)
    <tbody>
        <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->jam }}</td>
            <td>{{ $item->lokasi }}</td>
            <td>{{ $item->suhu }}</td>
        </tr>
    </tbody>
    @endforeach
</table>
{{ $data->links() }}
@endsection
