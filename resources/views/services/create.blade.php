@extends("layouts.admin")

@section('title')
    Jacob Consult - Create Services
@endsection

@if (session()->has('success'))
    @section('alerts')
        <div class="alert alert-success alert-dismissible fade show light-green" role="alert">
            {!! session('success') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endsection
@endif

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header">
            <h4>Create Service</h4>
        </div>
        <div class="card-body">
            <div>
                <div>
                    <form class="form-horizontal" method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Enter Service Title</label>
                                    <input type="text" name="title"  id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required placeholder="Service Title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Status</label>
                                        <select  name="status"  id="status" class="form-control @error('status') is-invalid @enderror" required >
                                        <option value="">Select Status</option>
                                        <option value="1">Publish</option>
                                        <option value="0">Unpublish</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="img">Image</label>
                                        <input type="file" name="img"  id="img" class="form-control @error('img') is-invalid @enderror" value="{{ old('title') }}" required placeholder="Service Title">
                                        @error('img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="newpassword_confirmation">Enter Service Content</label>
                                    <textarea name="content" id="" class="form-control" rows="5" >{{ old('content') }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group button">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-lock"></i> Create</button>
                                    {{--  <a role="button" href="admin/index.html" class="bizwheel-btn theme-2">Login</a>  --}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
