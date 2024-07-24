@extends('layouts.admin')

@section('title', 'History')

@section('content')
<div class="container">
    <h1>Request History</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Acara</th>
                <th>Organisasi</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Ruangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($history as $request)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $request->nama_acara }}</td>
                    <td>{{ $request->nama_organisasi }}</td>
                    <td>{{ $request->tanggal_mulai }}</td>
                    <td>{{ $request->tanggal_selesai }}</td>
                    <td>{{ $request->ruangan->name }}</td>
                    <td>
                        <a href="{{ route('admin_ruangan.download_surat', $request->id) }}" class="btn btn-primary">Download Surat</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
