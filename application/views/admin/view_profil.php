<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><span class="fas fa-fw fa-user-circle"></span>&nbspProfile</h1>
</div>
 -->
<!-- ini tabel -->
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-success">
            <span class="fa fa-user-circle"></span>&nbsp&nbspProfil
        </h3>
    </div>

    <form action="#" enctype="multipart/form-data" method="POST">
        <div class="card-body">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="form-group">
				        <h4 class="m-0 font-weight-bold">
				        	<div class="fa fa-user-check"></div>
				            <span ></span>&nbsp&nbspUbah foto, nama dan password anda disini
				        </h4>
			    	</div>
        		</div>
        	</div>
            <div class="row">

                <div class="col-md-4">
                    <div class="form-group">
                        <img src="assets/img/profile/profile.jpg" class="img-thumbnail rounded-circle">
                    </div>

                    
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col">

                            <div class="form-group">
                                <input type="hidden" class="form-control" placeholder="No">
                            </div>

                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col">

                            <div class="form-group">
                                <input type="hidden" class="form-control" placeholder="ID Admin">
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" class="form-control" placeholder="Password">
                            </div>

                            <div class="form-group">

                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="card-footer float-right">
                <button type="submit" class="btn btn-success"><span class="fa fa-save"></span>&nbspSimpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-times"></span>&nbspBatal</button>
            </div>
    </form>
</div>