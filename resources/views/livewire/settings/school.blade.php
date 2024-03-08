<x-app-layout>
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Settings</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">School Settings</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">School settings</h4>
                    </div>
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#home1"><i
                                            class="la la-home me-2"></i>General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#profile1"><i
                                            class="la la-user me-2"></i> Address</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#contact1"><i
                                            class="la la-phone me-2"></i> Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#message1"><i
                                            class="la la-envelope me-2"></i> Message</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="home1" role="tabpanel">
                                    <div class="pt-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">School name</label>
                                                    <input type="text" name="name"
                                                        class="form-control input-default " placeholder="School name">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">School motto</label>
                                                    <input type="text" name="motto"
                                                        class="form-control input-default " placeholder="School motto">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">Logo</label>
                                                    <input type="file" name="logo"
                                                        class="form-control input-default ">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">Favicon</label>
                                                    <input type="file" name="favicon"
                                                        class="form-control input-default ">
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="name">About</label>
                                                    <textarea class="form-control textarea" rows="4" id="comment"></textarea>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-large">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile1">
                                    <div class="pt-4">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">Location</label>
                                                    <input type="text" name="name"
                                                        class="form-control input-default " placeholder="School name">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">Address</label>
                                                    <textarea class="form-control" rows="2" id="comment"></textarea>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">Town/City/District</label>
                                                    <input type="text" name="motto"
                                                        class="form-control input-default " placeholder="School motto">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="name">Region</label>
                                                    <select name="region" class="default-select  form-control wide">
                                                        <option>Central</option>
                                                        <option>Northern</option>
                                                        <option>Western</option>
                                                        <option>Eastern</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-large">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact1">
                                    <div class="pt-4">
                                        <h4>This is contact title</h4>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove.
                                        </p>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                            Consonantia, there live the blind texts. Separated they live in
                                            Bookmarksgrove.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="message1">
                                    <div class="pt-4">
                                        <h4>This is message title</h4>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                            tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                        <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt
                                            tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script>tinymce.init({selector:'.textarea'});</script>
    @endpush

</x-app-layout>
