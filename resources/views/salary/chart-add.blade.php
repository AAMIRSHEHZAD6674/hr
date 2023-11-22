<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <form method="POST" action="/salary/chart/add">
            @csrf
            <!-- Basic Layout -->
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Edit Chart  Details</h5>
                            <small class="text-muted float-end">Default label</small>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Chart Name</label>
                                <input type="text" name="name" value="" class="form-control" id="basic-default-fullname"
                                       placeholder="Enter Name"/>
                                @if($errors->has('name'))
                                    <span class="alert alert-danger"> </span><br>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Chart Code</label>
                                <input type="text" name="code" value="" class="form-control" id="basic-default-fullname"
                                       placeholder="Enter Name"/>
                                @if($errors->has('name'))
                                    <span class="alert alert-danger"> </span><br>
                                @endif
                            </div>
                            <div class="mb-4">
                                <select name="nature" class="selectpicker"  data-live-search="true">
                                    <option value="add">Add</option>
                                    <option value="deduct" >Deduct</option>
                                </select><br>
                                @if($errors->has('permissions'))
                                    <span class="alert alert-danger"> {{ $errors->first('permissions') }}</span><br>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Add Chart</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layouts.app>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
