<x-app-layout>
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Roles & Permissions</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Permissions</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Permissions(Admin)</h4>
                        <a href="{{ route('roles') }}" wire:navigate class="btn btn-primary mb-2">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>Modules</strong></th>
                                        <th><strong>Create</strong></th>
                                        <th><strong>Update</strong></th>
                                        <th><strong>Delete</strong></th>
                                        <th><strong>View</strong></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td>Admissions</td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td>Reports</td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td>Finance</td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                        <td><input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required=""></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
