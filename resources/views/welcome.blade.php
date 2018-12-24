@extends('layouts.Xenon.horizontal_menu')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Pencarian Siswa</h3>
        </div>
        <div class="panel-body layout-variants">
            <div class="col-md-12">
                <div class="panel-body">
                    <form action="{{ route('search.siswa') }}" method="POST" role="form">
                        @csrf
                        @method('POST')
    
                        <div class="form-group">
                            <label for="email-1">Nis / Siswa:</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Ketik Nama/Nis...">
                        </div>
    
                        <div class="form-group">
                            <button type="submit" class="btn btn-info btn-single pull-right"><i class="fa fa-search"></i> Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection