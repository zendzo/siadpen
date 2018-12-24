@extends('layouts.Xenon.horizontal_menu')

@section('content')
<div class="col-md-12">
			
    <ul class="nav nav-tabs">
      <li class="active">
        <a href="#all" data-toggle="tab">Siswa</a>
      </li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane active" id="all">

        <table class="table table-hover members-table middle-align">
          <thead>
            <tr>
              <th class="hidden-xs hidden-sm"></th>
              <th>Nama</th>
              <th class="hidden-xs hidden-sm">Nis</th>
              <th>Tingkat</th>
              <th>Kelas</th>
              <th>Ruang</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($siswas as $siswa)
            <tr>
                <td class="user-image hidden-xs hidden-sm">
                  <a href="#">
                    <img src="{{ $siswa->user->avatar }}" class="img-circle" alt="user-pic" />
                  </a>
                </td>
                <td class="user-name">
                  <a href="{{ route('siswa.show', $siswa->nis) }}" class="name">{{ $siswa->user->fullName }}</a>
                  <span>Siswa</span>
                </td>
                <td class="hidden-xs hidden-sm">
                  <span class="email">{{ $siswa->nis }}</span>
                </td>
                <td class="action-links">
                  {{ $siswa->tingkat->name  }}
                </td>
                <td class="action-links">
                    {{ $siswa->kelas->name  }}
                </td>
                <td class="action-links">
                  {{ $siswa->ruang->name  }}
                </td>
              </tr>
            @empty
                <tr>
                  <td colspan="6"><h4 class="text-center">Data Tidak Ditemukan</h4></td>
                </tr>
            @endforelse
          </tbody>
        </table>

        <div class="row">
          <div class="col-sm-6">

            <div class="members-table-actions">
              <div class="selected-items">
                <span>2</span>
                members selected
              </div>

              <div class="selected-actions">
                <a href="#" class="edit">Edit Profile</a>
                or
                <a href="#" class="delete">Delete</a>
              </div>
            </div>

          </div>
          <div class="col-sm-6 text-right text-center-sm">
            {{ $siswas->links() }}
          </div>
        </div>

      </div>
    </div>

  </div>
@endsection