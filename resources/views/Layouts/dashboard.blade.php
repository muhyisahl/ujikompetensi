@extends('master')

@section('dash')
<div class="row">
    <div class="col-7 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Hello @if (!empty(auth()->user()->name))
            {{ auth()->user()->name }}
            @else
            user
            @endif !</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="/page">Tabel Catatan Perjalanan </a>|<a href="/input"> Input Data Perjalanan</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection
