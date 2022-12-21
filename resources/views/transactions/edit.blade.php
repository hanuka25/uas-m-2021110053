@extends('layouts.master')

@section('judul', 'Edit Transaction')

@section('content')
    <h2>Update New Transaction</h2>
    <form action="{{ route('transaction.update', ['transaction' => $transaction->id]) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                    id="kategori" value="{{ old('kategori') ?? $transaction->kategori }}">
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="nominal">Nominal</label>
                <input type="number" class="form-control @error('nominal') is-invalid @enderror" name="nominal"
                    id="nominal" value="{{ old('nominal') ?? $transaction->nominal }}">
                @error('nominal')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="tujuan">Tujuan</label>
                <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan"
                    id="tujuan" value="{{ old('tujuan') ?? $transaction->tujuan }}">
                @error('tujuan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="account_id">Pilih Akun:</label>
                <div>
                    <select id="account_id" name="account_id" class="form-control">
                        @foreach ($accounts as $account)
                            @if ($transaction->account_id == $account->id)
                                <option value="{{ $account->id }}" selected={{ $transaction->account_id == $account->id }}>
                                    {{ $account->nama }}</option>
                            @else
                                <option value="{{ $account->id }}">{{ $account->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('account')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Update</button>
    </form>
@endsection
