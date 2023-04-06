<template>
      <Head title="Invest now" />
      <div class="row">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                            <img class="img-fluid rounded mb-1 pt-1" src="{{ user.profile_img }}" height="100"
                                width="100" alt="User avatar">
                            <div class="user-info text-center">
                                <h4 class="mb-1">{{ ucwords(user.name) }}</h4>
                                <span class="badge bg-secondary">{{ ucwords(auth()->user()->role) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around flex-wrap border-bottom text-center hidden">
                        <div class="d-flex align-items-start me-4 mt-1 gap-2">
                            <div>
                                <p class="mb-0 fw-semibold">1.23k</p>
                                <small class="text-bold">Total Investment</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mt-1 gap-2">
                            <div>
                                <p class="mb-0 fw-semibold">568</p>
                                <small>Total Profits</small>
                            </div>
                        </div>
                    </div>
                    <p class="mt-1 small text-uppercase text-muted">Details</p>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="border-bottom mb-1">
                                <span class="fw-semibold me-1 font-weight-bold">Name:</span>
                                <span>{{ ucwords(user.name) }}</span>
                            </li>
                            <li class="border-bottom mb-1">
                                <span class="fw-semibold me-1 font-weight-bold">Email:</span>
                                <span>{{ user.email }}</span>
                            </li>
                            <li class="border-bottom mb-1">
                                <span class="fw-semibold me-1 font-weight-bold">Phone:</span>
                                <span>{{ user.phone }}</span>
                            </li>
                            <li class="border-bottom mb-1">
                                <span class="fw-semibold me-1 font-weight-bold">Role:</span>
                                <span>Investor</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /User Card -->
        </div>
        <!--/ User Sidebar -->


        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- User Pills -->
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                            class="ti ti-user-check ti-xs me-1"></i>Account</a></li>
                <li class="nav-item"><a class="nav-link" href="javascript:"
                        onclick="$('#passwordResetModal').modal('show')"><i class="ti ti-lock ti-xs me-1"></i>Security</a>
                </li>
            </ul>
            <!--/ User Pills -->

            <!-- Project table -->
            <div class="card mb-4">
                <h5 class="card-header">Profile Update</h5>
                <form enctype="multipart/form-data"
                    method="post">
                    <div class="col-12">
                        <div class="form-group mb-2">
                            <div class="avatar rounded">
                                <img src="{{ user.profile_img }}" onclick="$('#imgInp').click()" id="blah"
                                    alt="profile_img" width="100px" height="100px">
                                <input type="file" hidden name="profile_img" accept="image/*" id="imgInp">
                            </div>
                            <button type="button" onclick="$('#imgInp').click()"
                                class="btn-sm btn-outline-primary mt-2 ml-md-2">
                                Change Profile Image
                            </button>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" required class="form-control" placeholder="Full Name"
                                value="{{ user.name }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="email">Email</label>
                            <input type="text" readonly class="form-control" placeholder="Email"
                                value="{{ user.email }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" required class="form-control" placeholder="Phone Number"
                                value="{{ user.phone }}">
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone">Refferer Link</label>
                            <input type="text" readonly class="form-control form-control-lg" value="{{ user }}">
                        </div>
                        <div class="form-group mb-2 float-lg-right">
                            <button class="btn btn-lg btn-outline-primary">
                                Save
                            </button>
                        </div>
                    </div>
                </form>

                <div id="security">
                    <div class="modal fade" id="passwordResetModal" tabindex="-1" role="dialog"
                        aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form @submit.prevent="updateForm" method="post"
                                    autocomplete="off">
                                    <div class="modal-body">
                                        @csrf
                                        <div class="form-group">
                                            <label for="register-password" class="form-label">Password</label>

                                            <div
                                                class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                                                <input type="password"
                                                    class="form-control form-control-merge @error('password') is-invalid @enderror"
                                                    name="password"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="register-password" tabindex="3" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text cursor-pointer"><i
                                                            data-feather="eye"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="register-password-confirm" class="form-label">Confirm
                                                Password</label>

                                            <div class="input-group input-group-merge form-password-toggle">
                                                <input type="password" class="form-control form-control-merge"
                                                    name="password_confirmation"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="register-password" tabindex="3" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text cursor-pointer"><i
                                                            data-feather="eye"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Project table -->

        </div>
        <!--/ User Content -->
    </div>
</template>

<script setup>
import { Inertia } from '@inertiajs/inertia'
import { reactive } from 'vue';
defineProps({
      plans: Object,
      // user: $page.auth.user
})

let formData = reactive({
      email: '',
      name: '',
      password: '',
      phone: '',
      profile_image: ''
})


let updateForm = () => {
      // console.log(formData)
      Inertia.post('/users', form);
}

</script>