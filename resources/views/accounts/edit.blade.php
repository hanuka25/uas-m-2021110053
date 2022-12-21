@extends('layouts.master')

@section('nama', 'Edit Account')

@section('content')
    <h2>Update New Account</h2>
    <form action="{{ route('accounts.update', ['account' => $account->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') ?? $account->id }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    value="{{ old('nama') ?? $account->nama }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="jenis">Pilih Jenis:</label>
                <div>
                    <select id="jenis" name="jenis" class="form-control">
                        {{-- <option value="{{ old('jenis') ?? $account->jenis }}"selected>{{ $account->jenis }}</option> --}}
                        <option value="Personal" @if($account->jenis == 'personal') selected @endif>Personal</option>
                        <option value="Bisnis" @if($account->jenis == 'bisnis') selected @endif>Bisnis</option>
                    </select>
                    @error('jenis')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
    </form>
@endsection
