<div class="container-fluid">
    <a class="btn btn-danger mt-3" href="" data-bs-toggle="modal" data-bs-target="#logoutModal">
        <i class="bi bi-box-arrow-in-left"></i>
        Logout
    </a><br>
    <a class="btn btn-warning mt-2" href="<?=base_url('admin');?>">
        <i class="bi bi-backspace"></i>
        <span>Back</span>
    </a><br>
    <a class="btn btn-primary my-2 button-add" href="#" data-bs-toggle="modal" data-bs-target="#modal_add_new_project">
        <i class="bi bi-plus-square-dotted"></i>
        Add new Project
    </a>

    <div class="container-fluid">
        <form action="" method="POST">
            <?php foreach ($projects as $project): ?>
            <div class="row mb-3">
                <div class="col-lg-4 border p-2">
                    <h5 class="mb-1 text-center">Image</h5>
                    <div class="card ">
                        <img src="<?=base_url('assets/image/project');?>/<?=$project['image'];?>" class="card-img-top ">
                    </div><br>
                    <div class="card ">
                        <a href="#" class="btn btn-success update_project image_update" data-bs-toggle="modal"
                            data-bs-target="#modal_add_new_project" data-id="<?=$project['id'];?>">Update / Edit</a>
                    </div>
                </div>
                <div class="col-lg-4 border p-2">
                    <h5 class=" mb-1 text-center">Descripsion</h5>
                    <div class="card">
                        <p>
                            <?=$project['description'];?>
                        </p>
                    </div>
                    <div class="card ">
                        <a href="#" class="btn btn-success update_project description_update" data-bs-toggle="modal"
                            data-bs-target="#modal_add_new_project" data-id="<?=$project['id'];?>">Update / Edit</a>
                    </div>
                </div>
                <div class="col-lg-3 border p-2">
                    <h5 class=" mb-1 text-center">Link</h5>
                    <div class="card">
                        <p>
                            <?=$project['link'];?>
                        </p>
                    </div>
                    <div class="card ">
                        <a href="#" class="btn btn-success update_project link_update" data-bs-toggle="modal"
                            data-bs-target="#modal_add_new_project" data-id="<?=$project['id'];?>">Update / Edit</a>
                    </div>
                </div>
                <div class="col-lg-1 border p-2">
                    <h5 class=" mb-1 text-center">Action</h5>
                    <!-- <div class="card"> -->
                    <a href="<?=base_url('project/delete');?>/<?=$project['id'];?>"
                        class="nav-link text-danger delete_button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd"
                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                        </svg>
                        Delete
                    </a>
                    <!-- </div> -->
                </div>
            </div>
            <?php endforeach;?>
        </form>
    </div>
</div>