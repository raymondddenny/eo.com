<!-- MAIN CONTENT -->
<div class="page-holder w-300 d-flex flex-wrap">
    <div class="container-fluid px-xl-5 px-xl-5 py-5 ">
        <div class="col-lg mb-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-uppercase  mb-0">Menu Management</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover card-text">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div hidden><?= $no = 1 ?></div>
                            <?php foreach ($menu as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $no; ?></th>
                                    <td><?= $m['menu']; ?></td>
                                    <td>
                                        <!-- //TODO: tambah action -->
                                        <a href="" class="badge badge-success font-weight-normal">edit</a>
                                        <a href="" class="badge badge-danger font-weight-normal">delete</a>
                                    </td>
                                </tr>
                                <div hidden><?php $no++ ?></div>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
    </div>