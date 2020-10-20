@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <a  class="btn bg-warning" href="/admin">
                <div class="panel-heading">Панель Приборов</div>
                </a>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        Вы вошли в систему!

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

