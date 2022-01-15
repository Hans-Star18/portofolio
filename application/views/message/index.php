<div class="container-fluid">
    <a class="btn btn-danger mt-3" href="" data-bs-toggle="modal" data-bs-target="#logoutModal">
        <i class="bi bi-box-arrow-in-left"></i>
        Logout
    </a><br>
    <a class="btn btn-warning my-2" href="<?=base_url('admin');?>">
        <i class="bi bi-backspace"></i>
        <span>Back</span>
    </a>

    <table class="table table-bordered border-dark table-striped">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Comment</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message): ?>
            <tr>
                <td><?=date("d F Y", $message['date']);?></td>
                <td><?=$message['name'];?></td>
                <td><?=$message['email'];?></td>
                <td><?=$message['comment'];?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>