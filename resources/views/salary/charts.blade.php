
<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Salary Charts</h5>
            <div class="card-body m-100">
                <div class="demo-inline-spacing">
                    <a href="/salary/chart/add"><button type="button" class="btn rounded-pill btn-primary">Add Salary Chart</button></a>
                </div>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Chart Name</th>
                        <th>Chart Code</th>
                        <th>Chart Nature</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach($charts as $chart)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $chart['name'] }}</strong></td>
                        <td>{{ $chart['code'] }}</td>
                        <td>{{ $chart['nature'] }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="/salary/chart/edit/{{$chart['id']}}"
                                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="/salary/chart/delete/{{$chart['id']}}"
                                    ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
                {{ $charts->links() }}

            </div>
        </div>

        <!--/ Basic Bootstrap Table -->
    </div>
</x-layouts.app>
