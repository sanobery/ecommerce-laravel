@extends('admin.admin')

@section('head-content')
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="{{mix('css/adminsidebar.css')}}">

@endsection


@section('body-content')

  @include('admin.sidebar')

  <div class="container mainbody">
    <div class="col-sm-12 mt_10 mb_10 BorderTopDivider">
      <h4 class="text-success text-bold">Referred Users
      </h4>
      <button class="dt-button" tabindex="0" aria-controls="addon_list_table" type="button"><span>Create</span></button>
      <table class="table table-hover customCssTable width_full" id="list">
        <thead>
          <tr>
              <th class="text-left">First Name</th>
              <th class="text-left">Last Name</th>
              <th class="text-left">Email</th>
              <th class="text-left">Password</th>
              {{-- <th class="text-left">Action</th> --}}
          </tr>
        </thead>
        </tbody>
          @foreach($users as $user)
            <tr>
              <td>{{$user['first_name']}}</td>
              <td>{{$user['last_name']}}</td>
              <td>{{$user['email']}}</td>
              <td>{{$user['password']}}</td>
              {{-- <td>
                <a href="">Edit</a>|
                <a href="">Delete</a>
              </td> --}}
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

<input type="text" id="date">
@endsection

@section('script')
  {{-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script> --}}
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
  <script src="{{ mix('js/list.js') }}"></script>
@endsection