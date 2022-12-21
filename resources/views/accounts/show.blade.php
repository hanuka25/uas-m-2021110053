@extends('layouts.master')

@section('nama', $account->nama)

@section('content')
    <div class="col-md-12">
        <div class="row">
            <div class="col-8">
                <h2>ID : {{ $account->id }}</h2>
            </div>
            <div class="col-4">
                <div class="float-right">
                    <div class="btn-group" role="group">
                        <a href="{{ route('accounts.edit', $account->id) }}" class="btn btn-primary ml-3">Edit</a>
                        <form action={{ route('accounts.destroy', $account->id) }} method="POST">
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
                <em>Nama : {{ $account->nama }}</em>
            </span>
        </h5>
        <p>
            <div>
        <ul class="list-inline">
            <li class="list-inline-item">
                <i class="fa fa-th-large fa-fw"></i>
                <em>Jenis : {{ $account->jenis }}</em>
            </li>
        </div>
        </ul>
        </p>
    </div>
@endsection
