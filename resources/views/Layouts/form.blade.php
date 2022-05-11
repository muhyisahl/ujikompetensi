@extends('master')

@section('title', 'Input Data Perjalanan')

@section('input')
        <form method="POST" action="/simpanData">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input id="tanggal" type="date" class="form-control" name="tanggal">
            </div>
            <div class="form-group">
                <label for="jam">Jam</label>
                <input id="jam" type="time" class="form-control" name="jam">
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi Yang Dikunjungi</label>
                <input id="lokasi" type="text" class="form-control" name="lokasi">
            </div>
            <div class="form-group">
                <label for="suhu">Suhu Tubuh</label>
                <input id="suhu" type="text" class="form-control" name="suhu">
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>

        </form>
@endsection
