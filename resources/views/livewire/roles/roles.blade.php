<x-app-layout>
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Roles & Permissions</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Roles</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Roles</h4>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">Small modal</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th><strong>Id.</strong></th>
                                        <th><strong>Role</strong></th>
                                        <th><strong>Members</strong></th>
                                        <th><strong></strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>1</strong></td>
                                        <td>Admin</td>
                                        <td>2</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('permissions') }}" wire:navigate class="me-2"><span class="badge badge-primary shadow">Permissions</span></a>
                                                <a href="#"><span class="badge badge-info shadow">Edit</span></a>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal fade bd-example-modal-sm show" tabindex="-1" style="display: none; padding-right: 15px;" aria-modal="true" role="dialog">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add New Role</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control input-default " placeholder="New role">
                                    </div>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
