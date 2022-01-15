<!-- modal login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <h2 class="fw-bold mb-0">ADMIN LOG-IN</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 pt-0">
                <form action="<?=base_url('portofolio/login');?>" method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-4" id="emailInput"
                            placeholder="name@example.com" name="mail" autocomplete="off">
                        <label for="emailInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-4" id="passwordInput" placeholder="Password"
                            name="pass" autocomplete="off">
                        <label for="passwordInput">Password</label>
                    </div>
                    <input class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" value="Log in"
                        name="submit_button">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal add project -->
<div class="modal fade" id="modal_add_new_project" tabindex="-1" aria-labelledby="modal_add_new_projectLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0 title-modal">ADD NEW PROJECT</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5 pt-0">
                <form action="<?=base_url('project/add');?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3 input-image">
                        <label for="image" class="form-label">Input Image</label>
                        <input class="form-control" type="file" id="image" name="add_image">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="inputDescription" style="height: 200px"
                            name="add_description" placeholder="Write description here" required></textarea>
                        <label for="inputDescription">Input Description</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-4" id="linkInput" placeholder="link here"
                            name="add_link" autocomplete="off" required>
                        <label for="linkInput">link Web</label>
                    </div>
                    <input class="btn btn-primary my-2 button-sub" type="submit" name="add" value="Add New Project">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?=base_url('portofolio/logout');?>">Logout</a>
            </div>
        </div>
    </div>
</div>