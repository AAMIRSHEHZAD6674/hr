
<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Salary Charts</h5>
            <div class="card-body m-100">
                <div class="demo-inline-spacing">
                    <a href="/salary/structure/add"><button type="button" class="btn rounded-pill btn-primary">Add Structure</button></a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Structure Name</th>
                        <th>Structure Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach($structures as $structure)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $structure['name'] }}</strong></td>
                        <td>{{ $structure['description'] }}</td>
                        <td>{{ $structure['status'] }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/salary/structure/edit/{{$structure['id']}}"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                    <a class="dropdown-item" href="/salary/structure/delete/{{$structure['id']}}"
                                    ><i class="bx bx-trash me-1"></i> Delete</a>
                                    <a class="dropdown-item" href="/salary/structure/upgrade/{{$structure['id']}}"
                                    ><i class="bx bx-analyse me-1"></i> Upgrade</a>
                                    <a class="dropdown-item" href="/salary/structure/duplicate/{{$structure['id']}}"
                                    ><i class="bx bx-archive me-1"></i> Duplicate</a>



                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $structures->links() }}

            </div>
        </div>

        <!--/ Basic Bootstrap Table -->
    </div>
</x-layouts.app>
