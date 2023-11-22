<x-layouts.app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>
        <form action="/salary/structure/add" method="post">
            @csrf
            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Basic Layout</h5>
                            <small class="text-muted float-end">Structure Details</small>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Structure Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="basic-default-name"
                                           placeholder="Enter Structure"/>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                                <div class="col-sm-10">
                            <textarea
                                id="basic-default-message"
                                class="form-control"
                                name="description"
                                aria-describedby="basic-icon-default-message2"
                            ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl">
                    <div class="card mb-2">
                        <div class="col-4">
                            <div class="input-group">
                                <input type="text" name="amounts[]" class="form-control" aria-label="Text input with segmented dropdown button">
                                <select class="custom-select" name="charts[]" id="exampleFormControlSelect1">
                                    @foreach($charts as $chart)
                                    <option value="{{ $chart['id'] }}">{{ $chart['name'].'-'.$chart['nature'] }}</option>
                                    @endforeach
                                </select>
                                <button type="button" class="btn btn-outline-primary" onclick="addNewInputGroup()">Add Another</button>

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Add Chart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-layouts.app>

<script>
    function addNewInputGroup() {
        // Clone the existing input group
        var existingInputGroup = document.querySelector('.col-4 .input-group');
        var newInputGroup = existingInputGroup.cloneNode(true);

        // Clear the text input in the new input group
        newInputGroup.querySelector('input').value = '';

        // Remove any Bootstrap styling or event listeners
        var buttons = newInputGroup.querySelectorAll('.btn');
        buttons.forEach(function(button) {
            button.classList.remove('dropdown-toggle', 'dropdown-toggle-split');
            button.removeAttribute('data-bs-toggle');
        });

        // Remove all options from the cloned select
        var clonedSelect = newInputGroup.querySelector('select');
        clonedSelect.selectedIndex = 0;
        while (clonedSelect.firstChild) {
            clonedSelect.removeChild(clonedSelect.firstChild);
        }

        // Add options to the cloned select, excluding the selected ones
        var selectedOptions = [];
        var allSelects = document.querySelectorAll('.input-group select');
        allSelects.forEach(function(select) {
            var selectedValue = parseInt(select.value);
            if (!isNaN(selectedValue)) {
                selectedOptions.push(selectedValue);
            }
        });

        @foreach($charts as $chart)
        var option = document.createElement('option');
        option.value = "{{ $chart['id'] }}";
        option.text = "{{ $chart['name'].'-'.$chart['nature'] }}";
        if (!selectedOptions.includes({{ $chart['id'] }})) {
            clonedSelect.appendChild(option);
        }
        @endforeach

        // Append the new input group to the container
        document.querySelector('.col-4').appendChild(newInputGroup);
    }
</script>
