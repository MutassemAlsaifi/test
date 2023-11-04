@extends('news.parent')
@section('styles')

@endsection

@section('title' , 'EDIT')

@section('content')
<div>
    <div class="rows">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FOR EDIT ONE COUNTRY</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">country name</label>
                    <input value="{{ $countries->name }}" type="text" class="form-control" id="name" name='name' placeholder="COUNTRY NAME">
                  </div>
                  <div class="form-group">
                    <label for="code">country code</label>
                    <input value="{{ $countries->code }}" type="text" class="form-control" id="code" name='code' placeholder="CODE">
                  </div>
                </div>


                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="button"  onclick="performUpdate({{ $countries->id }})" class="btn btn-primary">update</button>

                </div>
            </form>
        </div>

          </div>
    </div>
</div>



@endsection

@section('title_content' , 'EDIT ONE COUNTRY')

@section('scripts')

<script>
    function performUpdate(id){
        let data = new FormData();
        data.append('name' , document.getElementById('name').value)
        data.append('code' , document.getElementById('code').value)
        storeRoute('/admin/update_countries/'+id,data)
            }
</script>

@endsection
