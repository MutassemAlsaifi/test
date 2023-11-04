@extends('news.parent')
@section('styles')

@endsection

@section('title' , 'SHOW')

@section('content')
<div>
    <div class="rows">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">FOR THIS COUNTRY</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">country name</label>
                    <input value="{{ $countries->name }}" type="text" class="form-control" id="name" placeholder="COUNTRY NAME" readonly disabled>
                  </div>
                  <div class="form-group">
                    <label for="code">country code</label>
                    <input value="{{ $countries->code }}" type="text" class="form-control" id="code" placeholder="CODE" readonly disabled>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>

          </div>
    </div>
</div>



@endsection

@section('title_content' , 'SHOW ONE COUNTRY')

@section('scripts')

@endsection
