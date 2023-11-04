@extends('news.parent')
@section('styles')

@endsection

@section('title' , 'INDEX')


@section('content')
<div>
    <div class="rows">
        <div class='col-md-12'>
            <div class="card-body p-0">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>name</th>
                      <th>code</th>
                      <th style="width: 30%">sttings</th>
                    </tr>
                  </thead>
                 <tbody>
@forelse ( $countries as $country )
<tr>
    <td>{{ $country->id }}</td>
    <td>{{ $country->name }}</td>
    <td>{{ $country->code }}</td>
    <td class='d-flex justify-content-end'>
        <a class='btn bg-info' href="{{ route('counties.show',$country->id)}}">show</a>
        <a class='btn bg-secondary' href="{{ route('counties.edit',$country->id)}}">edit</a>
        <a class='btn bg-danger' onclick="performDestroy({{ $country->id}} ,this )">delete</a>

    </td>
</tr>

@empty
there is no data
@endforelse
                 </tbody>
                </table>
              </div>
        </div>
{{$countries->links()}}
</div>
</div>

    <!-- /.card -->

@endsection

@section('title_content' , 'SHOW ALL COUNTRIES')


@section('scripts')
<script>
    function performDestroy(id,referance){
        confirmDestroy('/admin/counties/'+id,referance)
    }
</script>
@endsection
