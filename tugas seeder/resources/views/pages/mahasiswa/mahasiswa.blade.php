@extends('layouts.template')

@section('contens')
    <div class="container mt-3">
        <h1>Data Mahasiswa</h1>
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
                <a href="{{ route('form-mhs') }}" class="btn btn-primary">
                    Add
                </a>
            </div>

            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Npm</th>
                        <th scope="col">Waldos</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataMhs as $i)
                        <tr>
                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                            <th scope="row" class="text-center">{{ $i->npm }}</th>
                            <td>{{ $i->dosen->nama }}</td>
                            <td>{{ $i->nama }}</td>
                            <td>
                                {{-- <button type="button" class="btn btn-danger">Hapus</button> --}}
                                <form action="{{ route('mahasiswa.delete', $i->npm) }}" method="POST"
                                    style="display:inline;" onsubmit="return confirm('Yakin mau hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Hapus
                                    </button>
                                </form>
                                <a href="{{ route('form-edit-mhs', $i->npm) }}" class="btn btn-warning">
                                    Edit
                                </a>
                                <a href="{{ route('detail-mahasiswa', ['npm' => $i->npm]) }}"
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
