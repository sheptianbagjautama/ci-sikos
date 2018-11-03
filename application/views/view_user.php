<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="#">
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">person_add</i>&nbsp;TAMBAH DATA</button>
                                    
                                </a>
                            </h2>

                        </div>
                        <div class="body">

                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                 
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>No HP</th>
                                        <th>Alamat</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Username</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>No HP</th>
                                        <th>Alamat</th>
                                    </tr>
                                </tfoot>
                                
                                <tbody>
                                <?php foreach ($user as $u) { ?>
                                    <tr>
                                        <td><?php echo strtoupper($u->username); ?></td>
                                        <td><?php echo strtoupper($u->fullname); ?></td>
                                        <td><?php echo $u->email; ?></td>
                                        <td><?php echo $u->no_hp; ?></td>
                                        <td><?php echo $u->alamat; ?></td>
                                    </tr>
                                <?php }?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>



