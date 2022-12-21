@extends('layouts.master')

@section('judul', $transaction->tujuan)

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-8">
                <h2>Kategori : {{ $transaction->kategori }}</h2>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('transaction.edit', $transaction->id) }}" class="btn btn-primary ml-3">Edit</a>
                        <form action={{ route('transaction.destroy', $transaction->id) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger ml-3">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h5>
            <span class="badge badge-primary">
                <i class="fa fa-star fa-fw"></i>
                <em>Nominal : {{ $transaction->nominal }}</em>
            </span>
        </h5>
        <p>
            <div>
        <ul class="list-inline">
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em>Tujuan : {{ $transaction->tujuan }}</em>
            </li>
        </div>
            <li class="list-inline-item">
                <i class="fa fa-calendar fa-fw"></i>
                Account ID : {{ $transaction->account_id }}
            </li>
        </ul>
        </p>
    </div>
@endsection
