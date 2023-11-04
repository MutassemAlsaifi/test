@extends('news.parent')
@section('styles')

@endsection

@section('title' , 'CREATE')

@section('content')
<div>
    <div class="rows">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FOR CREATE ONE COUNTRY</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">country name</label>
                    <input  type="text" class="form-control" id="name" name='name' placeholder="COUNTRY NAME">
                  </div>
                  <div class="form-group">
                    <label for="code">country code</label>
                    <input  type="text" class="form-control" id="code" name='code' placeholder="COUNTRY CODE">
                  </div>
                </div>


                <!-- /.card-body -->
                <div class="card-footer">
                    <button type='button' 'btn bg-dark' onclick="performStore()">CREATE</button>
                </div>
            </form>
        </div>

          </div>
    </div>
</div>



@endsection

@section('title_content' , 'CREATE ONE COUNTRY')

@section('scripts')
<script>
    function performStore(){
        let data = new FormData();
        data.append('name' , document.getElementById('name').value)
        data.append('code' , document.getElementById('code').value)
        store('/admin/counties',data)
    }

</script>
@endsection
