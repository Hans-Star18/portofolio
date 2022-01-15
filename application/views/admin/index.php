<div class="container mt-5">
    <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">Project Management</div>
                CRUD Project list
            </div>
            <a class="btn btn-primary rounded-pill" href="<?=base_url('project');?>"><i
                    class="bi bi-box-arrow-in-right"></i></a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">View Message</div>
                Reading / View Message
            </div>
            <a class="btn btn-primary rounded-pill " href="<?=base_url('message');?>"><i
                    class="bi bi-box-arrow-in-right"></i></a>
        </li>
    </ol>

    <a class="btn btn-danger mt-3" href="" data-bs-toggle="modal" data-bs-target="#logoutModal">
        <i class="bi bi-box-arrow-in-left"></i>
        Logout
    </a><br>

</div>