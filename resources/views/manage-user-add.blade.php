		@extends("layouts.app")

        @section("style")
            <link href="assets/plugins/notifications/css/lobibox.min.css" rel="stylesheet" />
        @endsection

		@section("wrapper")
		<div class="page-wrapper">
			<div class="page-content">

                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                        <div class="col mx-auto">
                            <div class="my-4 text-center">
                                <img src="assets/images/logo-img.png" width="180" alt="" />
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="border p-4 rounded">
                                        <div class="text-center">
                                            <h3 class="">Create Account</h3>
                                            @if (\Session::has('message'))
                                                <div class="alert border-0 border-start border-5 border-success alert-dismissible fade show py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                                                        </div>
                                                        <div class="ms-3">
                                                            <h6 class="mb-0 text-white">Success</h6>
                                                            <div class="text-white">{!! \Session::get('message') !!}</div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                        </div>
                                        {{ Form::open(array('url' => 'admin/add-user', 'class' => 'row g-3')) }}
                                        <div class="form-body">
                                                <div class="col-sm-12">
                                                    <label for="inputFirstName" class="form-label">Full Name</label>
                                                    <input type="text" name="name" class="form-control" id="inputFirstName" placeholder="John Doe">
                                                </div>
                                                <div class="col-sm-12">
                                                    <label for="inputEmailAddress" class="form-label">Username</label>
                                                    <input type="text" name="username" class="form-control" id="inputEmailAddress" placeholder="John.Doe">
                                                </div>
                                            <div class="col-sm-12">
                                                <label for="inputRole" class="form-label">CID</label>
                                                <input type="text" class="form-control" id="inputEmailAddress" name="cid" placeholder="123456" pattern="[0-9]+">
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="inputRole" class="form-label">Job Role</label>
                                                <select class="form-control" id="inputRole" name="role">
                                                    <option selected disabled>Please Select</option>
                                                    <option value="Tow Driver">Tow Driver</option>
                                                    <option value="Intern Mechanic">Intern Mechanic</option>
                                                    <option value="Lead Mechanic">Lead Mechanic</option>
                                                    <option value="Adept Mechanic">Adept Mechanic</option>
                                                    <option value="Expert Mechanic">Expert Mechanic</option>
                                                    <option value="Veteran Mechanic">Veteran Mechanic</option>
                                                    <option value="Manager">Manager</option>
                                                    <option Value="Boss">Boss</option>

                                                </select>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="inputEmailAddress" class="form-label">Passport ID (Steam FiveM ID)</label>
                                                <input type="text" class="form-control" id="inputEmailAddress" name="steamId" placeholder="steam:123456789abcdef">
                                                <p><sub>See SteamDB to get FiveM ID: <a href="https://steamdb.info/calculator/" target="_blank">Click Here</a> </sub></p>
                                            </div>
                                            <div class="col-sm-12">
                                                <label for="inputEmailAddress" class="form-label">Cell Phone</label>
                                                <input type="text" class="form-control" id="inputEmailAddress" name="cell" placeholder="123-4567" pattern="^[0-9]{3}-[0-9]{4}$">
                                            </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" class="form-control border-end-0" name="password" id="inputChoosePassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="isAdmin" type="checkbox" id="flexSwitchCheckChecked" value="1">
                                                        <label class="form-check-label" for="flexSwitchCheckChecked">Grant Admin Functions</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary"><i class='bx bx-user'></i>Create User</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>

            </div>
		</div>
		@endsection

        @section("script")
            <!--Password show & hide js -->
            <script>
                $(document).ready(function () {
                    $("#show_hide_password a").on('click', function (event) {
                        event.preventDefault();
                        if ($('#show_hide_password input').attr("type") == "text") {
                            $('#show_hide_password input').attr('type', 'password');
                            $('#show_hide_password i').addClass("bx-hide");
                            $('#show_hide_password i').removeClass("bx-show");
                        } else if ($('#show_hide_password input').attr("type") == "password") {
                            $('#show_hide_password input').attr('type', 'text');
                            $('#show_hide_password i').removeClass("bx-hide");
                            $('#show_hide_password i').addClass("bx-show");
                        }
                    });
                });
            </script>
        @endsection



