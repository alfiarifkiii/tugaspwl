@extends('layouts.template')

@section('contens')
    <div class="container mt-3">
        <h1>Data Dosen</h1>
        @if (session('add'))
            <div class="alert alert-success alert-dismissible fade show"">
                {{ session('add') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if (session('update'))
            <div class="alert alert-success alert-dismissible fade show"">
                {{ session('update') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-success alert-dismissible fade show"">
                {{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <div class="card p-3">
            <div class="d-flex justify-content mb-3">
                <a href="{{ route('form-dosen') }}" class="btn btn-primary">
                    Add
                </a>
            </div>

            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nidn</th>
                        <th scope="col">Nama</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataDosen as $i)
                        <tr>
                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                            <th scope="row" class="text-center">{{ $i->nidn }}</th>
                            <td>{{ $i->nama }}</td>
                            <td>
                                {{-- <button type="button" class="btn btn-danger">Hapus</button> --}}
                                <form action="{{ route('dosen.delete', $i->nidn) }}" method="POST" style="display:inline;"
                                    onsubmit="return confirm('Yakin mau hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                                <a href="{{ route('form-edit-dosen', $i->nidn) }}" class="btn btn-warning">
                                    Edit
                                </a>
                                <a href="{{ route('detail-dosen', ['nidn' => $i->nidn]) }}"
                                    class="btn btn-primary btn-sm"><i class="bi bi-eye"></i>
                                    Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
