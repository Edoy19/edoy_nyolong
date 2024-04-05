<!-- modal-import -->
<div class="modal fade" id="modal-import">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Import Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <form method="POST" action="<php echo base_url('C_Rework/import'); ?>" enctype="multipart/form-data">

                    <div class="input-group form-group">
                        <span class="input-group-addon" id="sizing-addon2">
                            <i class="glyphicon glyphicon-file"></i>
                        </span>
                        <input type="file" class="form-control" name="excel" aria-describedby="sizing-addon2">
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="form-control btn btn-primary"> <i
                                    class="glyphicon glyphicon-ok"></i>Import Data</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Rework Report</h1>
                </div>
                <!-- <div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div> -->
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <label class="form-control" for="search_fromdate">Date From:</label>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="date" id="search_fromdate" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-2 offset-5">
                            <button type="button" id="reset" class="btn btn-block btn-warning reset">
                                <i class="fas fa-undo"></i> Reset
                            </button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <!--ADD BUTTON | Jika ketemu hak akses -->
                        <?php if (!empty($hak_akses)) { ?>
                        <div class="col-md-2 offset-md-10">
                            <?php if ($hak_akses->allow_add == 'on') { ?>
                            <button type="button" class="btn btn-block btn-primary mb-2 bg-primary" data-toggle="modal"
                                data-target="#modal-default" Onclick="view_modal('1','Add')" href="#">
                                <i class="fa fa-plus"></i> Add Data
                            </button>
                            <?php } ?>
                        </div>

                        <?php } ?>
                    </div>
                    <!-- Tabel Rework -->
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered display nowrap table-striped">
                                <thead>
                                    <tr>
                                        <th>ACTION</th>
                                        <th>TRANSACTION ID</th>
                                        <th>PART NUMBER</th>
                                        <th>PART NAME</th>
                                        <th>CUSTOMER</th>
                                        <th>ANOTHER CUSTOMER</th>
                                        <th>PROBLEM</th>
                                        <th>OCC PLACE</th>
                                        <th>OCC DATE</th>
                                        <th>NG QTY</th>
                                        <th>DEFECT LOT</th>
                                        <th>AREA</th>
                                        <th>SKETCH1</th>
                                        <th>DESKRIPSI1</th>
                                        <th>SKETCH2</th>
                                        <th>DESKRIPSI2</th>
                                        <th>SKECTH3</th>
                                        <th>DESKRIPSI3</th>
                                        <th>CHECKING METHOD</th>
                                        <th>ATTACH IK</th>
                                        <th>MARKING PHOTO</th>
                                        <th>MARKING</th>
                                        <th>SORTIR</th>
                                        <th>PERUBAHAN SORTIR</th>
                                        <th>REQUEST TO</th>
                                        <th>NAME</th>
                                        <th>REQUEST BY</th>
                                        <th>JABATAN REQUEST</th>
                                        <th>CHECKED BY</th>
                                        <th>JABATAN CHECKED</th>
                                        <th>APPROVED BY</th>
                                        <th>JABATAN APPROVED</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- MODAL FORM -->
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true" style="overflow-y: scroll;">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">ADD DATA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- FORM UTAMA -->
            <form role="form" id="quickForm">
                <div class="card-body" style="overflow-x: unset;">
                    <div class="form-group" hidden>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="hdrid">TRANSACTION ID</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="hdrid" class="form-control" id="hdrid"
                                    placeholder="auto generate" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="text-align: center;">
                            <div class="col-md-3"><label for="part_number" class="form-control">PART NUMBER</label>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control select2" id="part_number" name="part_number"
                                    onchange="handleSelectChange_part_number(event)" style="width: 100%;">
                                    <option value='' selected="selected">-Select-</option>
                                    <?php
									foreach ($part_model as $value) {
										echo "<option value='$value->part_number'>$value->part_number#$value->part_name</option>";
									}
									?>
                                </select>
                            </div>
                            <div class="col-md-3"><label for="part_name" class="form-control">PART NAME</label></div>
                            <div class="col-md-3">
                                <input type="text" style="text-align: center;" name="part_name" class="form-control"
                                    id="part_name" disabled>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;" hidden>
                            <div class="col-md-3"><label for="nik" class="form-control">NIK</label></div>
                            <div class="col-md-3">
                                <input type="text" name="nik" class="form-control" id="nik">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="text-align: center;">
                            <div class="col-md-3"><label for="cust_name" class="form-control">CUSTOMER</label></div>
                            <div class="col-md-3">
                                <select class="form-control select2" id="cust_name" name="cust_name"
                                    onchange="handleSelectChange_cust_name(event)" style="width: 100%;">
                                    <option value='' selected="selected">-Select-</option>
                                    <?php
									foreach ($customer as $value1) {
										echo "<option value='$value1->cust_name'>$value1->cust_name</option>";
									}
									?>
                                </select>
                            </div>
                            <div class="col-md-3"><label for="cust_name2" class="form-control"
                                    style="white-space: normal; word-wrap: break-word; text-overflow: ellipsis; max-width: 100%; overflow: auto;">ANOTHER
                                    CUSTOMER</label>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control select2" id="cust_name2" name="cust_name2"
                                    onchange="handleSelectChange_cust_name(event)" style="width: 100%;">
                                    <option value='' selected="selected">-Select-</option>
                                    <?php
									foreach ($customer as $value2) {
										echo "<option value='$value2->cust_name'>$value2->cust_name</option>";
									}
									?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="margin-bottom:-10px">
                            <div class="col-sm-3">
                                <label for="problem" style="text-align: center;" class="form-control">PROBLEM</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea cols="auto" rows="1" id="problem" name="problem" class="form-control"
                                    style="width: 100%;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="row" style="text-align: center;">
                            <div class="col md-3"><label for="occ_place" class="form-control">OCC PLACE</label></div>
                            <div class="col-sm-3">
                                <textarea cols="auto" class="form-control" rows="1" id="occ_place" name="occ_place"
                                    style="width: 100%;"></textarea>
                            </div>
                            <div class="col-md-3"><label for="occ_date" class="form-control">DATE</label></div>
                            <div class="col-sm-3">
                                <!-- <div class="input-group date" data-date-format="DD-MM-YYYY" id="timepickerocc_date" data-target-input="nearest"> -->
                                <input type="date" id="occ_date" name="occ_date" class="form-control" />
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="text-align: center;">
                            <div class="col-md-3"><label for="ng_qty" class="form-control">NG QTY</label></div>
                            <div class="col-md-3">
                                <input type="number" min="1" name="ng_qty" class="form-control" id="ng_qty">
                            </div>
                            <div class="col-md-3"><label for="defect_lot" class="form-control">DEFECT LOT</label></div>
                            <div class="col-md-3">
                                <input type="text" name="defect_lot" class="form-control" id="defect_lot">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="margin-bottom:-10px">
                            <div class="col-sm-3">
                                <label for="problem" style="text-align: center;" class="form-control">AREA</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea cols="auto" rows="1" id="area" name="area" class="form-control"
                                    style="width: 100%;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <h5 class="card-header" style="border-bottom: none;">Sketch</h5>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div id="card-1" class="card-img-top fa fa-image mt-3 mb-2"
                                                    style="font-size:100px; display:flex; justify-content:center; align-items:center;">
                                                </div>
                                                <div class="media-container d-flex justify-content-center mb-3">
                                                    <div class="custom-file">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-success" id="sketch1_view"
                                                                target="_blank"> <i class="fa fa-paperclip"></i> </a>
                                                        </div>
                                                        <input type="file" class="custom-file-input" id="sketch1"
                                                            multiple="" name="sketch1">
                                                        <label class="custom-file-label" for="sketch1"
                                                            id="sketch1_label">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <textarea cols="auto" rows="1" id="deskripsi1" name="deskripsi1"
                                                    class="form-control" style="width: 100%; text-align:center"
                                                    placeholder="insert"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <div id="card-1" class="card-img-top fa fa-image mt-3 mb-2"
                                                    style="font-size:100px; display:flex; justify-content:center; align-items:center;">
                                                </div>
                                                <div class="media-container d-flex justify-content-center mb-3">
                                                    <div class="custom-file">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-success" id="sketch2_view"
                                                                target="_blank"> <i class="fa fa-paperclip"></i> </a>
                                                        </div>
                                                        <input type="file" class="custom-file-input" id="sketch2"
                                                            multiple="" name="sketch2">
                                                        <label class="custom-file-label" for="sketch2"
                                                            id="sketch2_label">Choose file</label>
                                                    </div>
                                                </div>
                                                <textarea cols="auto" rows="1" id="deskripsi2" name="deskripsi2"
                                                    class="form-control" style="width: 100%; text-align:center"
                                                    placeholder="insert"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <div id="card-1" class="card-img-top fa fa-image mt-3 mb-2"
                                                    style="font-size:100px; display:flex; justify-content:center; align-items:center;">
                                                </div>
                                                <div class="media-container d-flex justify-content-center mb-3">
                                                    <div class="custom-file">
                                                        <div class="col-md-1">
                                                            <a class="btn btn-success" id="skecth3_view"
                                                                target="_blank"> <i class="fa fa-paperclip"></i> </a>
                                                        </div>
                                                        <input type="file" class="custom-file-input" id="skecth3"
                                                            multiple="" name="skecth3">
                                                        <label class="custom-file-label" for="skecth3"
                                                            id="skecth3_label">Choose
                                                            file</label>
                                                    </div>
                                                </div>
                                                <textarea cols="auto" rows="1" id="deskripsi3" name="deskripsi3"
                                                    class="form-control" style="width: 100%; text-align:center"
                                                    placeholder="insert"></textarea>
                                            </div>
                                            <!-- <br> </br> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="margin-bottom:-10px">
                            <div class="col-sm-3">
                                <label for="checking_method" style="text-align: center;" class="form-control">CHECKING
                                    METHOD</label>
                            </div>
                            <div class="col-sm-9">
                                <textarea cols="auto" rows="1" id="checking_method" name="checking_method"
                                    class="form-control" style="width: 100%;"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="attach_ik" class="form-control" style="text-align:center">ATTACH IK</label>
                            </div>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <div class="col-md-1">
                                        <a class="btn btn-success" id="attach_ik_view" target="_blank"> <i
                                                class="fa fa-paperclip"></i> </a>
                                    </div>
                                    <input type="file" class="custom-file-input" id="attach_ik" multiple=""
                                        name="attach_ik">
                                    <label class="custom-file-label" for="attach_ik" id="attach_ik_label">Choose
                                        file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <h5 class="card-header" style="border-bottom: none;">Marking</h5>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div id="card-1" class="card-img-top fa fa-image mt-3 mb-2"
                                                style="font-size:100px; display:flex; justify-content:center; align-items:center;">
                                            </div>
                                            <div class="media-container d-flex justify-content-center mb-3">
                                                <div class="custom-file">
                                                    <div class="col-md-1">
                                                        <a class="btn btn-success" id="marking_photo_view"
                                                            target="_blank"> <i class="fa fa-paperclip"></i> </a>
                                                    </div>
                                                    <input type="file" class="custom-file-input" id="marking_photo"
                                                        multiple="" name="marking_photo">
                                                    <label class="custom-file-label" for="marking_photo"
                                                        id="marking_photo_label">Choose
                                                        file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="card-1" class="card-img-top fa fa-marker mt-3 mb-2"
                                                style="font-size:100px; display:flex; justify-content:center; align-items:center;">
                                            </div>
                                            <textarea cols=" auto" rows="1" id="marking" name="marking"
                                                class="form-control" style="width: 100%; text-align:center"
                                                placeholder="insert"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <div class="row">
                            <div class="col-md-8" style="margin-right:40px">
                                <label for="sortir"
                                    style="font-size:12px; white-space: normal; word-wrap: break-word; display: inline-block; max-width: 100%; overflow: auto; text-overflow: ellipsis;"
                                    class="form-control">
                                    Apakah produk yang sejenis juga perlu disortir? (Jika Ya, isilah dengan part no.
                                    yang sejenis)
                                </label>
                            </div>
                            <div class="col-6 col-md-1 mt-2">
                                <div class="icheck-primary d-inline">
                                    <input class="form-check-input" type="radio" id="sortir_ada" name="sortir"
                                        value="ADA">
                                    <label for="sortir_ada">
                                        ADA
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-1 mt-2">
                                <div class="icheck-primary d-inline">
                                    <input class="form-check-input" type="radio" id="sortir_tidak" name="sortir"
                                        value="TIDAK">
                                    <label for="sortir_tidak">
                                        TIDAK
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- SORTR REQUEST -->
            <div class="card" id="detailSortir">
                <div class="card-header">
                    <h4 class="card-title">
                        <label for="detailSortir">SORTIR REQUEST</label>
                    </h4>
                </div>
                <!-- BODY FIX -->
                <form role="form" id="formEdo">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row" hidden>
                                <div class="col-md-4">
                                    <label for="id_sortir">ID SORTIR</label>
                                </div>
                                <div class="col-md-8">
                                    <!-- <input type="text" name="id_sortir" class="form-control" id="id_sortir"> -->
                                </div>
                            </div>
                            <div class="card-header d-flex flex-row flex-nowrap overflow-auto">
                                <div class="col-md-3">
                                    <label class="form-control">PART NUMBER</label>
                                    <select class="form-control select2" id="part_number2" name="part_number"
                                        onchange="handleSelectChange_part_number2(event)" style="width: 100%;">
                                        <option value='' selected="selected">-Select-</option>
                                        <?php
										foreach ($part_model as $value4) {
											echo "<option value='$value4->part_number'>$value4->part_number#$value4->qty</option>";
										}
										?>
                                    </select>

                                </div>
                                <div class="col-md-3">
                                    <label class="form-control">LOT PRODUKSI</label>
                                    <input type="text" name="lot_produksi" class="form-control" id="lot_produksi"
                                        readonly>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-control">CUSTOMER</label>
                                    <select class="form-control select2" id="customer" name="customer"
                                        onchange="handleSelectChange_cust_name(event)" style="width: 100%;">
                                        <option value='' selected="selected">-Select-</option>
                                        <?php
										foreach ($customer as $value) {
											echo "<option value='$value->cust_name'>$value->cust_name</option>";
										}
										?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label style="font-size:14px;text-align:center;" class="form-control">Apakah
                                        lot
                                        bermasalah ada stok di WH?</label>
                                    <div class="form-group clearfix d-flex justify-content-center">
                                        <div class="icheck-primary d-inline">
                                            <input class="form-check-input" type="radio" id="masalah_stok_ada"
                                                name="masalah_stok" value="YA">
                                            <label for="masalah_stok_ada">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline ml-3">
                                            <input class="form-check-input" type="radio" id="masalah_stok_tidak"
                                                name="masalah_stok" value="TIDAK">
                                            <label for="masalah_stok_tidak">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-control" style="font-size:14px;text-align:center;">Apakah
                                        lot
                                        bermasalah sedang terkirim ke customer?</label>
                                    <div class="form-group clearfix d-flex justify-content-center">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="masalah_customer_ada" name="masalah_kirim_customer"
                                                value="YA">
                                            <label for="masalah_customer_ada">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline ml-3">
                                            <input type="radio" id="masalah_customer_tidak"
                                                name="masalah_kirim_customer" value="TIDAK">
                                            <label for="masalah_customer_tidak">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" style="font-size:14px;">Tanggal Keberangkatan
                                        (Dari DMIA)</label>
                                    <input type="date" class="form-control" value="" id="tgl_berangkat_customer"
                                        name="tgl_berangkat_customer">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" style="font-size:14px;">Tanggal Kedatangan
                                        (Sampai di Customer)</label>
                                    <input type="date" class="form-control" value="" id="tgl_datang_customer"
                                        name="tgl_datang_customer">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" style="font-size:14px;">Apakah lot bermasalah ada stock
                                        di Yusen?</label>
                                    <div class="form-group clearfix d-flex justify-content-center">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="masalah_yusen_ada" name="masalah_stok_yusen"
                                                value="YA">
                                            <label for="masalah_yusen_ada">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline ml-3">
                                            <input type="radio" id="masalah_yusen_tidak" name="masalah_stok_yusen"
                                                value="TIDAK">
                                            <label for="masalah_yusen_tidak">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" style="font-size:14px;">Tanggal Keberangkatan
                                        (Dari DMIA)</label>
                                    <input type="date" class="form-control" id="tgl_berangkat_yusen"
                                        name="tgl_berangkat_yusen">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-control" style="font-size:14px;">Tanggal Kedatangan
                                        (Sampai di Customer)</label>
                                    <input type="date" class="form-control" id="tgl_datang_yusen"
                                        name="tgl_datang_yusen">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-control" style="font-size:15px;">Qty</label>
                                    <input type="number" class="form-control" min="1" id="qty" name="qty">
                                </div>
                                <div class="col-md-3">
                                    <label class="form-control" style="font-size:15px;">Perlu Diberitahu</label>
                                    <div class="form-group clearfix d-flex justify-content-center">
                                        <div class="icheck-primary d-inline">
                                            <input type="radio" id="info_ada" name="perlu_info" value="YA">
                                            <label for="info_ada">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="icheck-primary d-inline ml-3">
                                            <input type="radio" id="info_tidak" name="perlu_info" value="TIDAK">
                                            <label for="info_tidak">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br></br>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" onclick="Simpan_data_sortir('Add')"
                                    id="simpan">simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- TABEL SORTIR -->
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive" style="overflow-x:unset;">
                            <table id="TableSortir"
                                class="table table-bordered table-hover display nowrap table-striped"
                                style="text-align:center">
                                <thead>
                                    <tr>
                                        <!-- <th>REPORT NO.</th> -->
                                        <th>ACTION</th>
                                        <th>ID SORTIR</th>
                                        <th>PART NUMBER</th>
                                        <th>LOT PRODUKSI</th>
                                        <th>CUSTOMER</th>
                                        <th>MASALAH STOK</th>
                                        <th>MASALAH KIRIM CUSTOMER</th>
                                        <th>TGL BERANGKAT CUSTOMER</th>
                                        <th>TGL DATANG CUSTOMER</th>
                                        <th>MASALAH STOK YUSEN</th>
                                        <th>TGL BERANGKAT YUSEN</th>
                                        <th>TGL DATANG YUSEN</th>
                                        <th>QTY</th>
                                        <th>PERLU INFO</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form id="quickFormm">
                    <div class="form-group clearfix">
                        <div class="row">
                            <div class="col-md-8" style="margin-right:40px">
                                <label for="sortir"
                                    style="font-size:12px; white-space: normal; word-wrap: break-word; display: inline-block; max-width: 100%; overflow: auto; text-overflow: ellipsis;"
                                    class="form-control">
                                    Apakah ada perubahan Spec. std, packaging, Marking, Label, dll. Selama Sortir? (Jika
                                    Ya, isilah input kolom dibawah ini)
                                </label>
                            </div>
                            <div class="col-md-1 mt-2">
                                <div class="icheck-primary d-inline">
                                    <input class="form-check-input" type="radio" id="perubahan_sortir_ada"
                                        name="perubahan_sortir" value="ADA">
                                    <label for="perubahan_sortir_ada">
                                        ADA
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-1 mt-2">
                                <div class="icheck-primary d-inline">
                                    <input class="form-check-input" type="radio" id="perubahan_sortir_tidak"
                                        name="perubahan_sortir" value="TIDAK">
                                    <label for="perubahan_sortir_tidak">
                                        TIDAK
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--SORTIR CHANGE-->
            <div class="card" id="detailChange">
                <div class="card-header">
                    <h4 class="card-title">
                        <label for="detailChange">CHANGE REQUEST</label>
                    </h4>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval2">
                    </a>
                </div>
                <form role="form" id="formBaru">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="card-header d-flex flex-row flex-nowrap overflow-auto">
                                <div class="row" hidden>
                                    <div class="col-md-4">
                                        <label for="id_perubahan">ID Perubahan</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="id" class="form-control" id="id">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="tgl_perubahan" class="form-control">TGL PERUBAHAN</label>
                                    <input type="date" id="tgl_perubahan" name="tgl_perubahan" class="form-control"
                                        data-target="#timepickertgl_perubahan" />
                                </div>
                                <div class="col-md-3">
                                    <label for="jenis_perubahan" class="form-control">JENIS PERUBAHAN</label>
                                    <input type="text" name="jenis_perubahan" class="form-control" id="jenis_perubahan">
                                </div>
                                <?php         //menangani kolom REQUEST TO oleh Manager
								if ($this->session->userdata('rolename') == 'Leader') {
								?>
                                <div class="col-md-3">
                                    <label for="check_spv" class="form-control">CHECK SPV</label>
                                    <input type="text" name="check_spv" class="form-control" id="check_spv" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="check_mgr" class="form-control">CHECK MGR</label>
                                    <input type="text" name="check_mgr" class="form-control" id="check_mgr" disabled>
                                </div>
                                <?php } ?>

                                <?php         //menangani kolom REQUEST TO oleh Manager
								if ($this->session->userdata('rolename') == 'SUPERVISOR') {
								?>
                                <div class="col-md-3">
                                    <label for="check_spv" class="form-control">CHECK SPV</label>
                                    <input type="text" name="check_spv" class="form-control" id="check_spv"
                                        value="<?= $this->session->userdata('nama'); ?>" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="check_mgr" class="form-control">CHECK MGR</label>
                                    <input type="text" name="check_mgr" class="form-control" id="check_mgr" disabled>
                                </div>
                                <?php } ?>

                                <?php         //menangani kolom REQUEST TO oleh Manager
								if ($this->session->userdata('rolename') == 'MFG Manager') {
								?>
                                <div class="col-md-3">
                                    <label for="check_spv" class="form-control">CHECK SPV</label>
                                    <input type="text" name="check_spv" class="form-control" id="check_spv" disabled>
                                </div>
                                <div class="col-md-3">
                                    <label for="check_mgr" class="form-control">CHECK MGR</label>
                                    <input type="text" name="check_mgr" class="form-control" id="check_mgr"
                                        value="<?= $this->session->userdata('nama'); ?>" disabled>
                                </div>
                                <?php } ?>

                            </div>
                            <br></br>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary" onclick="Simpan_data_perubahan('Add')"
                                    id="simpan_perubahan">simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="TablePerubahan"
                                class="table table-bordered table-hover display nowrap table-striped"
                                style="text-align:center">
                                <thead>
                                    <tr>
                                        <!-- <th>REPORT NO.</th> -->
                                        <th>ACTION</th>
                                        <th>ID PERUBAHAN</th>
                                        <th>TANGGAL PERUBAHAN</th>
                                        <th>JENIS PERUBAHAN</th>
                                        <th>DI CHECK OLEH (SPV)</th>
                                        <th>DIKETAHUI OLEH (MGR)</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FORM REQUEST TO -->
            <form id="quickFormmm">
                <div class="card-body">
                    <?php         //menangani kolom REQUEST TO oleh Manager
					if ($this->session->userdata('rolename') == 'MFG Manager') {
					?>
                    <div class="form-group clearfix" style="text-align: center;">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="request_to" class="form-control">
                                    REQUEST TO
                                </label>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="request_to">
                                    <div class="icheck-primary d-inline" style="float:inline-start; width: 20px;">
                                        <input class="form-check-input" type="radio" id="qc" name="request_to"
                                            value='QC' onchange="handleRadioChange(event)">
                                        <label for="qc">
                                            QC Section
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline" style="float:inline-end">
                                        <input class="form-check-input" type="radio" id="mfg" name="request_to"
                                            value='MFG' onchange="handleRadioChange(event)">
                                        <label for="mfg">
                                            MFG Section
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" id="kolom_spv">
                                <label for="nama_spv" class="form-control">NAME</label>
                                <select class="form-control select2" id="nama_spv"
                                    onchange="handleSelectChange_spv(event)" style="width: 100%;">
                                    <option value='' selected="selected">-Select-</option>
                                    <?php
										foreach ($spv as $value11) {
											echo "<option value='$value11->name'>$value11->role_name-$value11->name</option>";
										}
										?>
                                </select>
                            </div>
                            <div class="col-md-6" id="kolom_qc">
                                <label for="nama_qc" class="form-control">NAME</label>
                                <select class="form-control select2" id="nama_qc"
                                    onchange="handleSelectChange_qc(event)" style="width: 100%;">
                                    <option value='' selected="selected">-Select-</option>
                                    <?php
										foreach ($qc as $value12) {
											echo "<option value='$value12->name_superior2'>$value12->position_name2-$value12->name_superior2</option>";
										}
										?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- Menangani kolom REQUEST CHECKED APPROVE -->
                    <?php if ($this->session->userdata('rolename') == 'Leader') { ?>
                    <div class="form-group">
                        <!-- REQUEST BY -->
                        <div class="row" style="text-align: center;">
                            <div class="col-md-4">
                                <label for="request_by" class="form-control">REQUEST BY</label>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" style="text-align: center;" id="jabatan_request"
                                    name="jabatan_request" value="<?= $this->session->userdata('rolename'); ?>"
                                    disabled>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" style="text-align: center;" type="text" id="request_by"
                                    name="request_by" value="<?= $this->session->userdata('nama'); ?>" disabled>
                            </div>

                        </div>
                    </div>

                    <?php } else if ($this->session->userdata('rolename') == 'SUPERVISOR') { ?>
                    <div class="form-group">
                        <!-- REQUEST BY -->
                        <div class="row" style="text-align: center;">
                            <div class="col-md-4">
                                <label for="request_by" class="form-control">REQUEST BY</label>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" style="text-align: center;" id="jabatan_request"
                                    name="jabatan_request" value="<?= $this->session->userdata('rolename'); ?>"
                                    disabled>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" style="text-align: center;" type="text" id="request_by"
                                    name="request_by" value="<?= $this->session->userdata('nama'); ?>" disabled>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <!-- CHECKED BY -->
                        <div class="row" style="text-align: center;">
                            <div class="col-md-4">
                                <label for="checked_by" class="form-control">CHECKED BY</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="text-align: center;" class="form-control" id="jabatan_checked"
                                    name="jabatan_checked" value="<?= $this->session->userdata('rolename'); ?>"
                                    disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="text-align: center;" class="form-control" id="checked_by"
                                    name="checked_by" value="<?= $this->session->userdata('nama'); ?>" disabled>
                            </div>
                        </div>
                    </div>

                    <?php } else if ($this->session->userdata('rolename') == 'MFG Manager') { ?>
                    <div class="form-group">
                        <!-- REQUEST BY -->
                        <div class="row" style="text-align: center;">
                            <div class="col-md-4">
                                <label for="request_by" class="form-control">REQUEST BY</label>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" style="text-align: center;" id="jabatan_request"
                                    name="jabatan_request" disabled>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" style="text-align: center;" type="text" id="request_by"
                                    name="request_by" disabled>
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <!-- CHECKED BY -->
                        <div class="row" style="text-align: center;">
                            <div class="col-md-4">
                                <label for="checked_by" class="form-control">CHECKED BY</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="text-align: center;" class="form-control"
                                    name="jabatan_checked" id="jabatan_checked" disabled>
                            </div>
                            <div class="col-md-4">
                                <input type="text" style="text-align: center;" name="checked_by" class="form-control"
                                    id="checked_by" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- APPROVED BY -->
                        <div class="row" style="text-align: center;">
                            <div class="col-md-4">
                                <label for="approved_by" class="form-control">APPROVED BY</label>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" style="text-align: center;"
                                    id="jabatan_approved" name="jabatan_approved"
                                    value="<?= $this->session->userdata('rolename'); ?>" disabled>
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" style="text-align: center;" id="approved_by"
                                    name="approved_by" value="<?= $this->session->userdata('nama'); ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </form>
            <!-- tombol submit form utama  -->
            <div class="card-footer" style="text-align: right;">
                <button type="button" class="btn btn-primary" id="simpan_data" onclick="Simpan_data('Add')">Add</button>
                <button type="button" class="btn btn-primary" id="edit" onclick="Simpan_data('Update')">Update</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- SORTIR -->
<div class="modal fade" id="modal-sortir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
    aria-hidden="true" style="overflow-y:auto;">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel2">EDIT DATA</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" id="quickForm2">
                <div class="card-body">
                    <div class="form-group">

                        <div class="card-header d-flex flex-row flex-nowrap overflow-auto">
                            <div class="col-md-3">
                                <label for="id_sortir2" class="form-control">ID SORTIR</label>
                                <input type="text" name="id_sortir" class="form-control" id="id_sortir2" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-control">PART NUMBER</label>
                                <select class="form-control select2" id="part_number3" name="part_number"
                                    onchange="handleSelectChange_part_number3(event)" style="width: 100%;">
                                    <option value='' selected="selected">-Select-</option>
                                    <?php
									foreach ($part_model as $value5) {
										echo "<option value='$value5->part_number'>$value5->part_number#$value5->qty</option>";
									}
									?>
                                </select>

                            </div>
                            <div class="col-md-3">
                                <label class="form-control">LOT PRODUKSI</label>
                                <input type="text" name="lot_produksi2" class="form-control" id="lot_produksi2"
                                    readonly>
                            </div>

                            <div class="col-md-3">
                                <label class="form-control">CUSTOMER</label>
                                <select class="form-control select2" id="customer2" name="customer2"
                                    onchange="handleSelectChange_cust_name(event)" style="width: 100%;">
                                    <option value='' selected="selected">-Select-</option>
                                    <?php
									foreach ($customer as $value6) {
										echo "<option value='$value6->cust_name'>$value6->cust_name</option>";
									}
									?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label style="font-size:14px;text-align:center;" class="form-control">Apakah
                                    lot bermasalah ada stok di WH?</label>
                                <div class="form-group clearfix d-flex justify-content-center">
                                    <div class="icheck-primary d-inline">
                                        <input class="form-check-input" type="radio" id="masalah_stok_ada2"
                                            name="masalah_stok2" value="YA">
                                        <label for="masalah_stok_ada2">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline ml-3">
                                        <input class="form-check-input" type="radio" id="masalah_stok_tidak2"
                                            name="masalah_stok2" value="TIDAK">
                                        <label for="masalah_stok_tidak2">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="form-control" style="font-size:14px;text-align:center;">Apakah
                                    lot bermasalah sedang terkirim ke customer?</label>
                                <div class="form-group clearfix d-flex justify-content-center">
                                    <div class="icheck-primary d-inline">
                                        <input class="form-check-input" type="radio" id="masalah_customer_ada2"
                                            name="masalah_customer2" value="YA">
                                        <label for="masalah_customer_ada2">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline ml-3">
                                        <input class="form-check-input" type="radio" id="masalah_customer_tidak2"
                                            name="masalah_customer2" value="TIDAK">
                                        <label for="masalah_customer_tidak2">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-control" style="font-size:14px;">Tanggal Keberangkatan (Dari
                                    DMIA)</label>
                                <input type="date" class="form-control" value="" id="tgl_berangkat_customer2"
                                    name="tgl_customer2">
                            </div>
                            <div class="col-md-4">
                                <label class="form-control" style="font-size:14px;">Tanggal Kedatangan
                                    (Sampai di Customer)</label>
                                <input type="date" class="form-control" value="" id="tgl_datang_customer2"
                                    name="tgl_customer2">
                            </div>
                            <div class="col-md-4">
                                <label class="form-control" style="font-size:14px;">Apakah lot bermasalah
                                    ada stock di Yusen?</label>
                                <div class="form-group clearfix d-flex justify-content-center">
                                    <div class="icheck-primary d-inline">
                                        <input class="form-check-input" type="radio" id="masalah_yusen_ada2"
                                            name="masalah_yusen2" value="YA">
                                        <label for="masalah_yusen_ada2">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline ml-3">
                                        <input class="form-check-input" type="radio" id="masalah_yusen_tidak2"
                                            name="masalah_yusen2" value="TIDAK">
                                        <label for="masalah_yusen_tidak2">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-control" style="font-size:14px;">Tanggal Keberangkatan
                                    (Dari DMIA)</label>
                                <input type="date" class="form-control" id="tgl_berangkat_yusen2" name="tgl_yusen2"
                                    value="">
                            </div>
                            <div class="col-md-4">
                                <label class="form-control" style="font-size:14px;">Tanggal Kedatangan
                                    (Sampai di Customer)</label>
                                <input type="date" class="form-control" id="tgl_datang_yusen2" name="tgl_yusen2"
                                    value="">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control" style="font: size 15px;">Qty</label>
                                <input type="number" class="form-control" min="1" id="qty2" name="qty2">
                            </div>
                            <div class="col-md-3">
                                <label class="form-control" style="font-size:15px;">Perlu Diberitahu</label>
                                <div class="form-group clearfix d-flex justify-content-center">
                                    <div class="icheck-primary d-inline">
                                        <input class="form-check-input" type="radio" id="info_ada2" name="perlu_info2"
                                            value="YA">
                                        <label for="info_ada2">
                                            Ya
                                        </label>
                                    </div>
                                    <div class="icheck-primary d-inline ml-3">
                                        <input class="form-check-input" type="radio" id="info_tidak2" name="perlu_info2"
                                            value="TIDAK">
                                        <label for="info_tidak2">
                                            Tidak
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <br></br>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" onclick="Ubah_data_sortir('Update')"
                        id="update2">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- CHANGE SORTIR -->
<div class="modal fade" id="modal-perubahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
    aria-hidden="true" style="overflow-y:auto;">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel3">ADD DATA CHANGE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form role="form" id="quickForm3">
                <div class="card-body">
                    <div class="form-group">
                        <div class="card-header d-flex flex-row flex-nowrap overflow-auto">
                            <div class="row" hidden>
                                <div class="col-md-4">
                                    <label for="id_perubahan">ID Perubahan</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="id2" class="form-control" id="id2">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="tgl_perubahan" class="form-control">TGL PERUBAHAN</label>
                                <input type="date" id="tgl_perubahan2" name="tgl_perubahan2" class="form-control"
                                    data-target="#timepickertgl_perubahan" />
                            </div>
                            <div class="col-md-3">
                                <label for="jenis_perubahan" class="form-control">JENIS PERUBAHAN</label>
                                <input type="text" name="jenis_perubahan2" class="form-control" id="jenis_perubahan2">
                            </div>
                            <?php         //menangani kolom REQUEST TO oleh Manager
							if ($this->session->userdata('rolename') == 'Leader') {
							?>
                            <div class="col-md-3">
                                <label for="check_spv" class="form-control">CHECK SPV</label>
                                <input type="text" name="check_spv2" class="form-control" id="check_spv2" disabled>
                            </div>
                            <div class="col-md-3">
                                <label for="check_mgr" class="form-control">CHECK MGR</label>
                                <input type="text" name="check_mgr" class="form-control" id="check_mgr" disabled>
                            </div>
                            <?php } ?>

                            <?php         //menangani kolom REQUEST TO oleh Manager
							if ($this->session->userdata('rolename') == 'SUPERVISOR') {
							?>
                            <div class="col-md-3">
                                <label for="check_spv" class="form-control">CHECK SPV</label>
                                <input type="text" name="check_spv2" class="form-control" id="check_spv2"
                                    value="<?= $this->session->userdata('nama'); ?>" disabled>
                            </div>
                            <div class="col-md-3">
                                <label for="check_mgr" class="form-control">CHECK MGR</label>
                                <input type="text" name="check_mgr2" class="form-control" id="check_mgr2" disabled>
                            </div>
                            <?php } ?>

                            <?php         //menangani kolom REQUEST TO oleh Manager
							if ($this->session->userdata('rolename') == 'MFG Manager') {
							?>
                            <div class="col-md-3">
                                <label for="check_spv" class="form-control">CHECK SPV</label>
                                <input type="text" name="check_spv2" class="form-control" id="check_spv2" value=""
                                    disabled>
                            </div>
                            <div class="col-md-3">
                                <label for="check_mgr" class="form-control">CHECK MGR</label>
                                <input type="text" name="check_mgr2" class="form-control" id="check_mgr2"
                                    value="<?= $this->session->userdata('nama'); ?>" disabled>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" onclick="Ubah_data_perubahan('Update')"
                        id="update3">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal-delete -->
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete Rework</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label id="iddelete2" hidden> </label>Apakah ingin delete <label id="iddelete"> </label> ?
            </div>
            <div class="modal-footer justify-content-between">
                <form action="#" method="post">
                    <button type="button" id="delete" onclick="Delete_data()" class="btn btn-outline-light">Yes</button>
                </form>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
            </div>

        </div>
    </div>
</div>
<!-- modal-delete sortir -->
<div class="modal fade" id="modal-delete2">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete Sortir</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <label id="iddelete4" hidden> </label>Apakah ingin delete <label id="iddelete3"> </label> ?
            </div>

            <div class="modal-footer justify-content-between">
                <form action="#" method="post">
                    <button type="button" id="delete" onclick="Delete_data_sortir()"
                        class="btn btn-outline-light">Yes</button>
                </form>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal delete request -->
<div class="modal fade" id="modal-delete3">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete Change Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <label id="iddelete6" hidden></label>Apakah ingin delete <label id="iddelete5"> </label> ?
            </div>

            <div class="modal-footer justify-content-between">
                <form action="#" method="post">
                    <button type="button" id="delete" onclick="Delete_data_perubahan()"
                        class="btn btn-outline-light">Yes</button>
                </form>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!-- ########################## SCRIPT HERE ############################################################################################# -->
<!-- #################################################################################################################################### -->

<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();

    $(".reset").click(function() {
        $("#search_fromdate").val("");

    });
    //sebelum disave
    //masalah stok customer
    $('#masalah_customer_tidak').on('change', function() {
        $('#tgl_berangkat_customer').prop('disabled', true);
        $('#tgl_datang_customer').prop('disabled', true);
        $('#tgl_berangkat_customer').val('');
        $('#tgl_datang_customer').val('');
    });
    $('#masalah_customer_ada').on('change', function() {
        $('#tgl_berangkat_customer').prop('disabled', false);
        $('#tgl_datang_customer').prop('disabled', false);
    });
    //masalah stok yusen
    $('#masalah_yusen_tidak').on('change', function() {
        $('#tgl_berangkat_yusen').prop('disabled', true);
        $('#tgl_datang_yusen').prop('disabled', true);
        $('#tgl_berangkat_yusen').val('');
        $('#tgl_datang_yusen').val('');
    });
    $('#masalah_yusen_ada').on('change', function() {
        $('#tgl_berangkat_yusen').prop('disabled', false);
        $('#tgl_datang_yusen').prop('disabled', false);
    });
    //ketika di edit
    //masalah stok customer
    $('#masalah_customer_tidak2').on('change', function() {
        $('#tgl_berangkat_customer2').prop('disabled', true);
        $('#tgl_datang_customer2').prop('disabled', true);
    });
    $('#masalah_customer_ada2').on('change', function() {
        $('#tgl_berangkat_customer2 input[name="tgl_berangkat_customer"]').prop('disabled', false);
        $('#tgl_datang_customer2 input[name="tgl_datang_customer"]').prop('disabled', false);
    });
    //masalah stok yusen
    $('#masalah_yusen_tidak2').on('change', function() {
        $('#tgl_berangkat_yusen2').prop('disabled', true);
        $('#tgl_datang_yusen2').prop('disabled', true);
    });
    $('#masalah_yusen_ada2').on('change', function() {
        $('#tgl_berangkat_yusen2 input[name="tgl_berangkat_yusen"]').prop('disabled', false);
        $('#tgl_datang_yusen2 input[name="tgl_datang_yusen"]').prop('disabled', false);
    });

    // Event change untuk input tanggal
    $('#search_fromdate').change(function() {
        var fromDate = $(this).val(); // Ambil nilai tanggal dari input
        $('#dataTable').column('occ_date:name').search(fromDate)
            .draw(); // Lakukan filter berdasarkan tanggal
    });

    // function validateForm(formId) {
    // 	$(formId).validate({
    // 		submitHandler: function(form) {
    // 			var status = $('#exampleModalLabel').text();
    // 			if (status == "Add Data") {
    // 				Simpan_data("Add");
    // 			} else if (status == "Edit Data") {
    // 				Simpan_data("Update");
    // 			} else {
    // 				berhasil(status);
    // 			}
    // 		}
    // 	});
    // }

    // validateForm("#quickForm");
    // validateForm("#quickFormm");
    // validateForm("#quickFormmm");

    // document.getElementById('btnsubmit').addEventListener('click', submitHandler);
});
$(document).ready(function() {

    $.validator.setDefaults({
        submitHandler: function() {
            //berhasil( "Form successful submitted!" );
            var status = $('#exampleModalLabel').text();

            if (status == "Add Data") {
                // Ajax insert data
                Simpan_data("Add");
            } else if (status == "Edit Data") {
                // Ajax update data
                Simpan_data("Update");
            } else {
                berhasil(status);
            }

        }
    });
    $('#quickForm').validate({
        rules: {
            // ---------------------------------- Rule input Macro Batas sini 1---------------------------------
            part_number: {
                required: true,
            },
            part_name: {
                required: true,
            },
            cust_name: {
                required: true,
            },
            cust_name2: {
                required: true,
            },
            problem: {
                required: true,
            },
            occ_place: {
                required: true,
            },
            occ_date: {
                required: true,
            },
            ng_qty: {
                required: true,
            },
            defect_lot: {
                required: true,
            },
            area: {
                required: true,
            },
            sketch1: {
                required: true,
            },
            deskripsi1: {
                required: true,
            },
            sketch2: {
                required: true,
            },
            deskripsi2: {
                required: true,
            },
            skecth3: {
                required: true,
            },
            deskripsi3: {
                required: true,
            },
            checking_method: {
                required: true,
            },
            attach_ik: {
                required: true,
            },
            marking_photo: {
                required: true,
            },
            marking: {
                required: true,
            },
            sortir: {
                required: true,
            },

            // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

        },
        messages: {

            // ---------------------------------- Rule input Macro Batas sini 2---------------------------------
            part_number: {
                required: "Please Input part_number",
                minlength: 3
            },
            part_name: {
                required: "Please Input part_name",
                minlength: 3
            },
            cust_name: {
                required: "Please Input cust_name",
                minlength: 3
            },
            cust_name2: {
                required: "Please Input cust_name2",
                minlength: 3
            },
            problem: {
                required: "Please Input problem",
                minlength: 3
            },
            occ_place: {
                required: "Please Input occ place",
                minlength: 3
            },
            occ_date: {
                required: "Please Input occ date",
                minlength: 3
            },
            ng_qty: {
                required: "Please Input ng_qty",
                minlength: 3
            },
            defect_lot: {
                required: "Please Input defect_lot",
                minlength: 3
            },
            area: {
                required: "Please Input area",
                minlength: 3
            },
            sketch1: {
                required: "Please Input sketch1",
                minlength: 3
            },
            deskripsi1: {
                required: "Please Input deskripsi1",
                minlength: 3
            },
            sketch2: {
                required: "Please Input sketch2",
                minlength: 3
            },
            deskripsi2: {
                required: "Please Input deskripsi2",
                minlength: 3
            },
            skecth3: {
                required: "Please Input skecth3",
                minlength: 3
            },
            deskripsi3: {
                required: "Please Input deskripsi3",
                minlength: 3
            },
            checking_method: {
                required: "Please Input checking method",
                minlength: 3
            },
            attach_ik: {
                required: "Please Input attach_ik",
                minlength: 3
            },
            marking_photo: {
                required: "Please Input marking_photo",
                minlength: 3
            },
            marking: {
                required: "Please Input marking",
                minlength: 3
            },
            sortir: {
                required: "Please Input sortir",
                minlength: 3
            },


            // ---------------------------------- / Rule input Macro Batas sini 2--------------------------------
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    $('#quickFormm').validate({
        rules: {
            perubahan_sortir: {
                required: true,
            },
        },
        messages: {

            // ---------------------------------- Rule input Macro Batas sini 2---------------------------------
            perubahan_sortir: {
                required: "Please Input perubahan sortir",
                minlength: 3
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
    $('#quickFormmm').validate({
        rules: {
            request_to: {
                required: true,
            },
            nama_spv: {
                required: true,
            },
            request_by: {
                required: true,
            },
            checked_by: {
                required: true,
            },
            approved_by: {
                required: true,
            },
            jabatan_request: {
                required: true,
            },
            jabatan_checked: {
                required: true,
            },
            jabatan_approved: {
                required: true,
            }
        },
        messages: {

            // ---------------------------------- Rule input Macro Batas sini 2---------------------------------
            request_to: {
                required: "Please Input request_to",
                minlength: 3
            },
            nama_spv: {
                required: "Please Input nama spv",
                minlength: 3
            },
            request_by: {
                required: "Please Input request_by",
                minlength: 3
            },
            checked_by: {
                required: "Please Input checked_by",
                minlength: 3
            },
            approved_by: {
                required: "Please Input approved_by",
                minlength: 3
            },
            jabatan_request: {
                required: "Please Input Jabatan Request",
                minlength: 3
            },
            jabatan_checked: {
                required: "Please Input Jabatan Checked",
                minlength: 3
            },
            jabatan_approved: {
                required: "Please Input Jabatan Approved",
                minlength: 3
            },
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
// $('.select2').select2();
</script>

<script type="text/javascript">
// ========================================================== view modal utama =========Untuk Add,Edit,delete.==================================================//
function view_modal(hdrid, status) {
    if (status == "Add") {
        $('#exampleModalLabel').text('Add Data'); // name view
        $('#quickForm')[0].reset();
        $('#quickFormm')[0].reset();
        $('#quickFormmm')[0].reset();
        $('#part_number').select2().val('');
        $('#cust_name').select2().val('');
        $('#cust_name2').select2().val('');
        $('#nama_spv').select2().val('');
        $('#nama_qc').select2().val('');
        $('#nik').val('<?php echo $this->session->userdata('user_name') ?>');
        document.getElementById("edit").style.display = 'none';
        document.getElementById("simpan_data").style.display = "inline";
    } else {
        // Get Hdri ID
        $('#hdrid').val(hdrid);
        var hdrid = hdrid;
        // Ajax isi data
        $.ajax({
            url: "<?php echo base_url('C_Rework/ajax_getbyhdrid') ?>",
            method: "get",
            dataType: "JSON",
            data: {
                hdrid: hdrid,
            },
            success: function(data) {
                $('#part_number').select2().val(data.part_number).trigger('change');
                $('#part_name').val(data.part_name);
                $('#cust_name').select2().val(data.cust_name).trigger('change');
                $('#cust_name2').select2().val(data.cust_name2).trigger('change');
                $('#problem').val(data.problem);
                $('#occ_place').val(data.occ_place);
                $('#occ_date').val(data.occ_date);
                $('#ng_qty').val(data.ng_qty);
                $('#defect_lot').val(data.defect_lot);
                $('#area').val(data.area);
                // Mengambil Sketch1
                document.getElementById('sketch1_label').innerHTML = data.sketch1;
                var a = document.getElementById('sketch1_view');
                if (!data.sketch1 == '') {
                    a.href = "<?php echo base_url('assets/upload/rework_photo') ?>" + data.sketch1;
                } else {
                    a.removeAttribute("href");
                };
                $('#deskripsi1').val(data.deskripsi1);
                // Mengambil Sketch2
                document.getElementById('sketch2_label').innerHTML = data.sketch2;
                var a = document.getElementById('sketch2_view');
                if (!data.sketch2 == '') {
                    a.href = "<?php echo base_url('assets/upload/rework_photo') ?>" + data.sketch2;
                } else {
                    a.removeAttribute("href");
                };
                $('#deskripsi2').val(data.deskripsi2);
                // Mengambil Sketch3
                document.getElementById('skecth3_label').innerHTML = data.skecth3;
                var a = document.getElementById('skecth3_view');
                if (!data.skecth3 == '') {
                    a.href = "<?php echo base_url('assets/upload/rework_photo') ?>" + data.skecth3;
                } else {
                    a.removeAttribute("href");
                };
                $('#deskripsi3').val(data.deskripsi3);
                // Mengambil Dokumen IK
                $('#checking_method').val(data.checking_method);
                document.getElementById('attach_ik_label').innerHTML = data.attach_ik;
                var a = document.getElementById('attach_ik_view');
                if (!data.attach_ik == '') {
                    a.href = "<?php echo base_url('assets/upload/rework_attach__ik') ?>" + data.attach_ik;
                } else {
                    a.removeAttribute("href");
                };
                // Mengambil data Marking
                document.getElementById('marking_photo_label').innerHTML = data.marking_photo;
                var a = document.getElementById('marking_photo_view');
                if (!data.marking_photo == '') {
                    a.href = "<?php echo base_url('assets/upload/rework_photo') ?>" + data.marking_photo;
                } else {
                    a.removeAttribute("href");
                };
                $('#marking').val(data.marking);
                if (data.sortir == 'ADA') {
                    document.getElementById('sortir_ada').checked = true;
                } else {
                    document.getElementById('sortir_tidak').checked = true;
                };
                if (data.perubahan_sortir == 'ADA') {
                    document.getElementById('perubahan_sortir_ada').checked = true;
                } else {
                    document.getElementById('perubahan_sortir_tidak').checked = true;
                };
                // if (document.getElementById('qc').checked) {
                //     document.getElementById('nama_qc').value = '';
                // } else if (document.getElementById('mfg').checked) {
                //     document.getElementById('nama_spv').value = '';
                // }
                // document.getElementById('qc').addEventListener('change', function() {
                //     if (this.checked) {
                //         document.getElementById('nama_spv').value = '-Select-';
                //         document.getElementById('jabatan_checked').value = '';
                //         document.getElementById('checked_by').value = '';
                //     }
                // });
                // document.getElementById('mfg').addEventListener('change', function() {
                //     if (this.checked) {
                //         document.getElementById('nama_spv').value = '-Select-';
                //         document.getElementById('jabatan_checked').value = '';
                //         document.getElementById('checked_by').value = '';
                //     }
                // });

                // var data = $('#nama_spv').select2('data')[0].text;
                // if (data == '-Select-') {
                <?php if ($this->session->userdata('rolename') == 'Leader') { ?>
                $('#request_by').val("<?php echo $this->session->userdata('nama'); ?>");
                $('#jabatan_request').val("<?php echo $this->session->userdata('rolename'); ?>");
                <?php } else if ($this->session->userdata('rolename') == 'SUPERVISOR') { ?>
                $('#request_by').val(data.request_by);
                $('#jabatan_request').val(data.jabatan_request);
                $('#checked_by').val("<?php echo $this->session->userdata('nama'); ?>");
                $('#jabatan_checked').val("<?php echo $this->session->userdata('rolename'); ?>");
                <?php } else if ($this->session->userdata('rolename') == 'MFG Manager') {  ?>
                $('#request_by').val(data.request_by);
                $('#jabatan_request').val(data.jabatan_request);
                $('#checked_by').val(data.checked_by);
                $('#jabatan_checked').val(data.jabatan_checked);
                $('#approved_by').val("<?php echo $this->session->userdata('nama'); ?>");
                $('#jabatan_approved').val("<?php echo $this->session->userdata('rolename'); ?>");
                <?php } ?>
                // ---------------------------------- / Data val Macro  Batas sini -----------------------------
            },
            error: function(e) {
                alert(e);
            }
        });

        if (status == "View") {
            $('#exampleModalLabel').text('View Data');
            document.getElementById("simpan_data").style.display = 'none';
            document.getElementById("edit").style.display = 'none';
            <?php
				if ($this->session->userdata('rolename') == 'MFG Manager') {
				?>
            $('#simpan').style.display = 'none';
            if (data.request_to == 'qc') {
                document.getElementById('qc').checked = true;
                document.getElementById("kolom_spv").style.display = 'none';
                $('#nama_qc').select2().val(data.nama_spv).trigger('change');
            } else {
                document.getElementById('mfg').checked = true;
                document.getElementById("kolom_qc").style.display = 'none';
                $('#nama_spv').select2().val(data.nama_spv).trigger('change');
            };
            <?php } ?>
        } else if (status == "Edit") {
            $("#exampleModalLabel").text('Edit Data');
            document.getElementById("simpan_data").style.display = "none";
            document.getElementById("edit").style.display = "inline";
        }
    }
    // Superiorr
    if (status == 'Add') {
        var hdrid = '<?php echo $this->session->userdata('user_name') ?>';
    } else {
        var hdrid = $('#hdrid').val();
    }
    $.ajax({
        url: "<?php echo base_url('C_Rework/ajax_getbysuperior') ?>",
        method: "get",
        dataType: "JSON",
        data: {
            hdrid: hdrid,
        },
        success: function(data) { //menanggapi request checked approve
            <?php if ($this->session->userdata('role_name') == 'Leader') { ?>
            $('#jabatan_checked').val(data.position_name2);
            $('#checked_by').val(data.name_superior2);
            $('#jabatan_approved').val(data.position_name3);
            $('#approved_by').val(data.name_superior3);
            <?php } else if ($this->session->userdata('role_name') == 'SUPERVISOR') { ?>
            $('#jabatan_request').val(data.jabatan_request);
            $('#request_by').val(data.request_by);
            $('#jabatan_checked').val("<?php echo $this->session->userdata('rolename'); ?>");
            $('#checked_by').val("<?php echo $this->session->userdata('nama'); ?>");
            <?php } else if ($this->session->userdata('role_name') == 'MFG Manager') { ?>
            $('#jabatan_request').val(data.jabatan_request);
            $('#request_by').val(data.request_by);
            $('#jabatan_checked').val(data.jabatan_checked);
            $('#checked_by').val(data.checked_by);
            $('#jabatan_approved').val("<?php echo $this->session->userdata('jabatan_approved'); ?>");
            $('#approved_by').val("<?php echo $this->session->userdata('approved_by'); ?>");
            <?php } ?>
        }
    });


    tabel2.draw();
    tabel3.draw();
}

function view_modal_sortir(id_sortir, status) {

    if (status == "Add") {

        $('#exampleModalLabel2').text('Add Data'); // name view
        $('#quickForm2')[0].reset(); // reset form   
        $('#update2').text('Update'); // name Save
        document.getElementById("update2").style.visibility = "visible"; // Visible button              
        //Ajax kosongkan data

    } else {
        $('#exampleModalLabel2').text('Add Data'); // name view
        // Get Hdri ID
        $('#id_sortir').val(id_sortir);
        var id_sortir = id_sortir;

        // Ajax isi data
        $.ajax({
            url: "<?php echo base_url('C_Rework/ajax_getbyhdrid_sortir') ?>",
            method: "get",
            dataType: "JSON",
            data: {
                sortir: id_sortir
            },
            success: function(data) {

                // ---------------------------------- Data val Macro Batas sini ---------------------------------        
                $('#id_sortir2').val(data.id_sortir);
                $('#part_number3').select2().val(data.part_number).trigger('change');
                $('#lot_produksi2').val(data.lot_produksi);
                $('#customer2').select2().val(data.customer).trigger('change');

                if (data.masalah_stok == 'YA') {
                    document.getElementById('masalah_stok_ada2').checked = true;
                } else if (data.masalah_stok == 'TIDAK') {
                    document.getElementById('masalah_stok_tidak2').checked = true;
                } else;

                if (data.masalah_kirim_customer == 'TIDAK') {
                    document.getElementById('masalah_customer_tidak2').checked = true;
                } else if (data.masalah_kirim_customer == 'YA') {
                    document.getElementById('masalah_customer_ada2').checked = true;
                } else;

                $('#tgl_berangkat_customer2').val(data.tgl_berangkat_customer);
                $('#tgl_datang_customer2').val(data.tgl_datang_customer);

                if (data.masalah_stok_yusen == 'YA') {
                    document.getElementById('masalah_yusen_ada2').checked = true;
                } else if (data.masalah_stok_yusen == 'TIDAK') {
                    document.getElementById('masalah_yusen_tidak2').checked = true;
                } else;

                $('#tgl_berangkat_yusen2').val(data.tgl_berangkat_yusen);
                $('#tgl_datang_yusen2').val(data.tgl_datang_yusen);
                $('#qty2').val(data.qty);

                if (data.perlu_info == 'YA') {
                    document.getElementById('info_ada2').checked = true;
                } else if (data.perlu_info == 'TIDAK') {
                    document.getElementById('info_tidak2').checked = true;
                } else;

                // ---------------------------------- / Data val Macro  Batas sini ------------------------------


            },
            error: function(e) {
                alert(e);

            }
        });

        // Disable and button submit dan text form           
        if (status == "View") {
            document.getElementById("update2").style.visibility = "hidden";
            $('#exampleModalLabel2').text('View Data'); //name view              
        } else {
            $('#exampleModalLabel2').text('Edit Data'); //name view 
            $('#update2').text('Update'); //name Update  
            document.getElementById("update2").style.visibility = "visible";
        }

    }

}

function view_modal_perubahan(id, status) {

    if (status == "Add") {

        $('#exampleModalLabel3').text('Add Data'); // name view
        $('#quickForm3')[0].reset(); // reset form   
        $('#update3').text('Update'); // name Save
        document.getElementById("update3").style.visibility = "visible"; // Visible button              
        //Ajax kosongkan data

    } else {

        // Get Hdri ID
        $('#id').val(id);
        var id = id;

        // Ajax isi data
        $.ajax({
            url: "<?php echo base_url('C_Rework/ajax_getbyhdrid_perubahan') ?>",
            method: "get",
            dataType: "JSON",
            data: {
                change_sortir: id
            },
            success: function(data) {

                // ---------------------------------- Data val Macro Batas sini ---------------------------------        
                $('#id2').val(data.id);
                $('#tgl_perubahan2').val(data.tgl_perubahan);
                $('#jenis_perubahan2').val(data.jenis_perubahan);

                <?php if ($this->session->userdata('role_name') == 'SUPERVISOR') { ?>
                $('#check_spv2').val("<?php echo $this->session->userdata('nama'); ?>");

                <?php } elseif ($this->session->userdata('role_name') == 'MFG Manager') { ?>
                $('#check_spv2').val(data.check_spv2);
                $('#check_mgr2').val("<?php echo $this->session->userdata('nama'); ?>");
                <?php } ?>

            },
            error: function(e) {
                alert(e);

            }
        });

        // Disable and button submit dan text form           
        if (status == "View") {
            document.getElementById("update3").style.visibility = "hidden";
            $('#exampleModalLabel3').text('View Data'); //name view              

            // $('#tgl_perubahan2').prop("readonly", true)
            // $('#jenis_perubahan2').prop("readonly", true)
            // $('#check_spv2').prop("readonly", true)
            // $('#check_mgr2').prop("readonly", true)
        } else {
            $('#exampleModalLabel3').text('Edit Data'); //name view 
            $('#update3').text('Update'); //name Update  
            document.getElementById("update3").style.visibility = "visible";
        }

    }

}
</script>

<script type="text/javascript">
function Simpan_data($trigger) {

    // Form data
    var fdata = new FormData();

    // Form data collect name value
    var form_data = $('#quickForm').serializeArray();
    $.each(form_data, function(key, input) {
        fdata.append(input.name, input.value);
    });

    var form_data = $('#quickFormm').serializeArray();
    $.each(form_data, function(key, input) {
        fdata.append(input.name, input.value);
    });

    var form_data = $('#quickFormmm').serializeArray();
    $.each(form_data, function(key, input) {
        fdata.append(input.name, input.value);
    });

    fdata.append('part_name', partNameValue);

    <?php if ($this->session->userdata('rolename') == 'Leader') { ?>
    //menangani value dari request_by
    var request_by = $('#request_by').val();
    fdata.append('request_by', request_by);
    var jabatan_request = $('#jabatan_request').val();
    fdata.append('jabatan_request', jabatan_request);
    <?php } else if ($this->session->userdata('rolename') == 'SUPERVISOR') { ?>
    //menangani value dari request_by
    var request_by = $('#request_by').val();
    fdata.append('request_by', request_by);
    var jabatan_request = $('#jabatan_request').val();
    fdata.append('jabatan_request', jabatan_request);
    // menangani value dari checked_by
    var checked_by = $('#checked_by').val();
    fdata.append('checked_by', checked_by);
    var jabatan_checked = $('#jabatan_checked').val();
    fdata.append('jabatan_checked', jabatan_checked);

    <?php } else if ($this->session->userdata('rolename') == 'MFG Manager') { ?>
    // menangani value dari checked_by
    var approved_by = $('#approved_by').val();
    fdata.append('approved_by', approved_by);
    var jabatan_approved = $('#jabatan_approved').val();
    fdata.append('jabatan_approved', jabatan_approved);

    if ($('#nama_qc').val() == '') {
        fdata.append('nama_spv', $('#nama_spv').val());
    } else {
        fdata.append('nama_spv', $('#nama_qc').val());
    }
    <?php } ?>

    // Penanganan jika ada type check Box uncheck
    $('#quickForm input[type="checkbox"]:not(:checked)').each(function(i, e) {
        fdata.append(e.getAttribute("name"), "Off");
    });

    // Penanganan jika ada type attach file
    $('#quickForm input[type="file"]').each(function(i, e) {
        // jika ada file attach maka akan ditambahkan  
        if ($('#' + e.getAttribute("name")).val()) {
            var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
            fdata.append(e.getAttribute("name"), file_data);
        }
    });
    // Print_r(file_data);

    // Simpan or Update data          
    var vurl = null;
    if ($trigger === 'Add') {
        vurl = "<?php echo base_url('C_Rework/ajax_add') ?>";
    } else {
        vurl = "<?php echo base_url('C_Rework/ajax_update') ?>";
    }

    $.ajax({
        url: vurl,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {
            // Pesan berhasil
            berhasil(data.status);
            // Reset Form
            $('#quickForm')[0].reset();
            $('#quickFormm')[0].reset();
            $('#quickFormmm')[0].reset();
            $('#part_number').select2().val('');
            $('#cust_name').select2().val('');
            $('#cust_name2').select2().val('');
            // location.reload();
            tabel.draw();
            if (!vurl == "Add") {
                $("#btnsubmit").modal('hide');
            }
        },
        error: function(e) {
            gagal(e);
            //location.reload();
            //error
        }
    });


}

function Simpan_data_sortir($trigger) {

    // Form data
    var fdata = new FormData();

    // Form data collect name value
    var form_data = $('#formEdo').serializeArray();
    $.each(form_data, function(key, input) {
        fdata.append(input.name, input.value);
    });
    var part_number = $('#part_number2').val();
    fdata.append('part_number', part_number);

    var lot_produksi = $('#lot_produksi').val();
    fdata.append('lot_produksi', lot_produksi);

    var customer = $('#customer').val();
    fdata.append('customer', customer);

    if ($('#masalah_stok_ada:checked').val() == 'YA') {
        var masalah_stok = $('#masalah_stok_ada').val();
        fdata.append('masalah_stok', masalah_stok);
    }
    if ($('#masalah_stok_tidak:checked').val() == 'TIDAK') {
        var masalah_stok = $('#masalah_stok_tidak').val();
        fdata.append('masalah_stok', masalah_stok);
    }

    if ($('#masalah_customer_ada:checked').val() == 'YA') {
        var masalah_customer = $('#masalah_customer_ada').val();
        fdata.append('masalah_kirim_customer', masalah_customer);
    }
    if ($('#masalah_customer_tidak:checked').val() == 'TIDAK') {
        var masalah_customer = $('#masalah_customer_tidak').val();
        fdata.append('masalah_kirim_customer', masalah_customer);
    }

    var tgl_customer = $('#tgl_berangkat_customer').val();
    fdata.append('tgl_berangkat_customer', tgl_customer);

    var tgl_customer = $('#tgl_datang_customer').val();
    fdata.append('tgl_datang_customer', tgl_customer);

    if ($('#masalah_yusen_ada:checked').val() == 'YA') {
        var masalah_yusen = $('#masalah_yusen_ada').val();
        fdata.append('masalah_stok_yusen', masalah_yusen);
    }
    if ($('#masalah_yusen_tidak:checked').val() == 'TIDAK') {
        var masalah_yusen = $('#masalah_yusen_tidak').val();
        fdata.append('masalah_stok_yusen', masalah_yusen);
    }

    var tgl_yusen = $('#tgl_berangkat_yusen').val();
    fdata.append('tgl_berangkat_yusen', tgl_yusen);

    var tgl_yusen = $('#tgl_datang_yusen').val();
    fdata.append('tgl_datang_yusen', tgl_yusen);

    var qty = $('#qty').val();
    fdata.append('qty', qty);

    if ($('#info_ada:checked').val() == 'YA') {
        var perlu_info = $('#info_ada').val();
        fdata.append('perlu_info', perlu_info);
    }
    if ($('#info_tidak:checked').val() == 'TIDAK') {
        var perlu_info = $('#info_tidak').val();
        fdata.append('perlu_info', perlu_info);
    }
    if ($('#hdrid').val() == '') {
        fdata.append('id_request', '<?php echo $this->session->userdata('user_name') ?>');
    } else {
        fdata.append('id_request', $('#hdrid').val());
    }

    // Simpan or Update data          
    var vurl2 = null;
    if ($trigger == 'Add') {
        vurl2 = "<?php echo base_url('C_Rework/ajax_add_sortir') ?>";
    } else {
        vurl2 = "<?php echo base_url('C_Rework/ajax_update_sortir') ?>";
    }
    $.ajax({
        url: vurl2,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {

            // Pesan berhasil
            berhasil(data.status);
            // Reset Form
            $('#part_number2').select2().val('').trigger('change');
            $('#customer').select2().val('').trigger('change');

            $('#masalah_stok_ada').prop('checked', false);
            $('#masalah_stok_tidak').prop('checked', false);

            $('#masalah_customer_ada').prop('checked', false);
            $('#masalah_customer_tidak').prop('checked', false);

            $('#tgl_berangkat_customer').val('');
            $('#tgl_datang_customer').val('');

            $('#masalah_yusen_ada').prop('checked', false);
            $('#masalah_yusen_tidak').prop('checked', false);

            $('#tgl_berangkat_yusen').val('');
            $('#tgl_datang_yusen').val('');

            $('#qty').val('');

            $('#info_ada').prop('checked', false);
            $('#info_tidak').prop('checked', false);

            // location.reload();
            tabel2.draw();

            if (!vurl2 == "Add") {
                $("#simpan").modal('hide');
            }
        },
        error: function(e) {
            gagal(e);
            //location.reload();
            //error
        }
    });

}

function Simpan_data_perubahan($trigger) {

    // Form data
    var fdata = new FormData();

    var form_data = $('#formBaru').serializeArray();
    $.each(form_data, function(key, input) {
        fdata.append(input.name, input.value);
    });

    // Penanganan jika ada type check Box uncheck
    // $('#masalah_stok_ada input[type="radio"]:not(:checked)').each(function(i, e) {
    //     fdata.append(e.getAttribute("name"), "Off");
    // });
    // if (data.masalah_customer_ada == 'OK') {
    //     document.getElementById('judgement_ok').checked = true;
    // } else {
    //     document.getElementById('judgement_ng').checked = true;
    // };

    var tgl_perubahan = $('#tgl_perubahan').val();
    fdata.append('tgl_perubahan', tgl_perubahan);

    var jenis_perubahan = $('#jenis_perubahan').val();
    fdata.append('jenis_perubahan', jenis_perubahan);

    var check_spv = $('#check_spv').val();
    fdata.append('check_spv', check_spv);

    var check_mgr = $('#check_mgr').val();
    fdata.append('check_mgr', check_mgr);

    if ($('#hdrid').val() == '') {
        fdata.append('id_request', '<?php echo $this->session->userdata('user_name') ?>');
    } else {
        fdata.append('id_request', $('#hdrid').val());
    }

    // Penanganan jika ada type attach file
    // $('#quickForm2 input[type="file"]').each(function(i, e) {
    //     // jika ada file attach maka akan ditambahkan  
    //     if ($('#' + e.getAttribute("name")).val()) {
    //         var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
    //         fdata.append(e.getAttribute("name"), file_data);
    //     }
    // });

    // Print_r(file_data);

    // Simpan or Update data    


    var vurl3 = null;
    if ($trigger == 'Add') {
        vurl3 = "<?php echo base_url('C_Rework/ajax_add_perubahan') ?>";
    } else {
        vurl3 = "<?php echo base_url('C_Rework/ajax_update_perubahan') ?>";
    }

    $.ajax({
        url: vurl3,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {

            // Pesan berhasil
            berhasil(data.status);
            // Reset Form

            $('#tgl_perubahan').val('');
            $('#jenis_perubahan').val('');
            // $('#check_spv').val('');
            // $('#check_mgr').val('');

            // location.reload();
            tabel3.draw();

            if (!vurl3 == "Add") {
                $("#simpan_perubahan").modal('hide');
            }
        },
        error: function(e) {
            gagal(e);
            //location.reload();
            //error
        }
    });
}

function Ubah_data_sortir($trigger) {

    // Form data
    var fdata = new FormData();

    // Form data collect name value
    var form_data = $('#quickForm2').serializeArray();
    $.each(form_data, function(key, input) {
        fdata.append(input.name, input.value);
    });

    // if (data.masalah_customer_ada == 'OK') {
    //     document.getElementById('judgement_ok').checked = true;
    // } else {
    //     document.getElementById('judgement_ng').checked = true;
    // };
    var id_sortir2 = $('#id_sortir2').val();
    fdata.append('id_sortir', id_sortir2);

    var part_number3 = $('#part_number3').val();
    fdata.append('part_number', part_number3);

    var lot_produksi2 = $('#lot_produksi2').val();
    fdata.append('lot_produksi', lot_produksi2);

    var customer2 = $('#customer2').val();
    fdata.append('customer', customer2);

    if ($('#masalah_stok_ada2:checked').val() == 'YA') {
        var masalah_stok2 = $('#masalah_stok_ada2').val();
        fdata.append('masalah_stok', masalah_stok2);
    }
    if ($('#masalah_stok_tidak2:checked').val() == 'TIDAK') {
        var masalah_stok2 = $('#masalah_stok_tidak2').val();
        fdata.append('masalah_stok', masalah_stok2);
    }

    if ($('#masalah_customer_ada2:checked').val() == 'YA') {
        var masalah_customer2 = $('#masalah_customer_ada2').val();
        fdata.append('masalah_kirim_customer', masalah_customer2);
    }
    if ($('#masalah_customer_tidak2:checked').val() == 'TIDAK') {
        var masalah_customer2 = $('#masalah_customer_tidak2').val();
        fdata.append('masalah_kirim_customer', masalah_customer2);
    }

    var tgl_customer2 = $('#tgl_berangkat_customer2').val() ?? '-';
    fdata.append('tgl_berangkat_customer', tgl_customer2);

    var tgl_customer2 = $('#tgl_datang_customer2').val() ?? '-';
    fdata.append('tgl_datang_customer', tgl_customer2);

    if ($('#masalah_yusen_ada2:checked').val() == 'YA') {
        var masalah_yusen2 = $('#masalah_yusen_ada2').val() ?? '-';
        fdata.append('masalah_stok_yusen', masalah_yusen2);
    }
    if ($('#masalah_yusen_tidak2:checked').val() == 'TIDAK') {
        var masalah_yusen2 = $('#masalah_yusen_tidak2').val();
        fdata.append('masalah_stok_yusen', masalah_yusen2);
    }

    var tgl_yusen2 = $('#tgl_berangkat_yusen2').val() ?? '-';
    fdata.append('tgl_berangkat_yusen', tgl_yusen2);

    var tgl_yusen2 = $('#tgl_datang_yusen2').val() ?? '-';
    fdata.append('tgl_datang_yusen', tgl_yusen2);

    var qty2 = $('#qty2').val();
    fdata.append('qty', qty2);

    if ($('#info_ada2:checked').val() == 'YA') {
        var perlu_info2 = $('#info_ada2').val();
        fdata.append('perlu_info', perlu_info2);
    }
    if ($('#info_tidak2:checked').val() == 'TIDAK') {
        var perlu_info2 = $('#info_tidak2').val();
        fdata.append('perlu_info', perlu_info2);
    }
    if ($('#hdrid').val() == '') {
        fdata.append('id_request', '<?php echo $this->session->userdata('user_name') ?>');
    } else {
        fdata.append('id_request', $('#hdrid').val());
    }

    // Penanganan jika ada type attach file
    // $('#quickForm2 input[type="file"]').each(function(i, e) {
    //     // jika ada file attach maka akan ditambahkan  
    //     if ($('#' + e.getAttribute("name")).val()) {
    //         var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
    //         fdata.append(e.getAttribute("name"), file_data);
    //     }
    // });
    // Print_r(file_data);

    // Simpan or Update data          
    var vurl4 = null;
    if ($trigger == 'Add') {
        vurl4 = "<?php echo base_url('C_Rework/ajax_add_sortir') ?>";
    } else {
        vurl4 = "<?php echo base_url('C_Rework/ajax_update_sortir') ?>";
    }

    $.ajax({
        url: vurl4,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {

            // Pesan berhasil
            berhasil(data.status);
            // Reset Form
            $('#part_number3').select2().val('').trigger('change');

            $('#customer2').select2().val('').trigger('change');

            $('#masalah_stok_ada2').prop('checked', false);
            $('#masalah_stok_tidak2').prop('checked', false);

            $('#masalah_customer_ada2').prop('checked', false);
            $('#masalah_customer_tidak2').prop('checked', false);

            $('#tgl_berangkat_customer2').val('');
            $('#tgl_datang_customer2').val('');

            $('#masalah_yusen_ada2').prop('checked', false);
            $('#masalah_yusen_tidak2').prop('checked', false);

            $('#tgl_berangkat_yusen2').val('');
            $('#tgl_datang_yusen2').val('');

            $('#qty2').val('');

            $('#info_ada2').prop('checked', false);
            $('#info_tidak2').prop('checked', false);

            // location.reload();
            tabel2.draw();

            if (vurl4 == "<?php echo base_url('C_Rework/ajax_update_sortir') ?>") {
                $("#modal-sortir").modal('hide');
            }
        },
        error: function(e) {
            gagal(e);
            //location.reload();
            //error
        }
    });

}

function Ubah_data_perubahan($trigger) {

    // Form data
    var fdata = new FormData();

    // Form data collect name value
    var form_data = $('#quickForm3').serializeArray();
    $.each(form_data, function(key, input) {
        fdata.append(input.name, input.value);
    });

    // if (data.masalah_customer_ada == 'OK') {
    //     document.getElementById('judgement_ok').checked = true;
    // } else {
    //     document.getElementById('judgement_ng').checked = true;
    // };
    var id2 = $('#id2').val();
    fdata.append('id', id2);

    var tgl_perubahan2 = $('#tgl_perubahan2').val();
    fdata.append('tgl_perubahan', tgl_perubahan2);

    var jenis_perubahan2 = $('#jenis_perubahan2').val();
    fdata.append('jenis_perubahan', jenis_perubahan2);

    var check_spv2 = $('#check_spv2').val();
    fdata.append('check_spv', check_spv2);

    var check_mgr2 = $('#check_mgr2').val();
    fdata.append('check_mgr', check_mgr2);

    if ($('#hdrid').val() == '') {
        fdata.append('id_request', '<?php echo $this->session->userdata('user_name') ?>');
    } else {
        fdata.append('id_request', $('#hdrid').val());
    }
    // Penanganan jika ada type attach file
    // $('#quickForm2 input[type="file"]').each(function(i, e) {
    //     // jika ada file attach maka akan ditambahkan  
    //     if ($('#' + e.getAttribute("name")).val()) {
    //         var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
    //         fdata.append(e.getAttribute("name"), file_data);
    //     }
    // });

    // Print_r(file_data);

    // Simpan or Update data          
    var vurl5 = null;
    if ($trigger == 'Add') {
        vurl5 = "<?php echo base_url('C_Rework/ajax_add_perubahan') ?>";
    } else {
        vurl5 = "<?php echo base_url('C_Rework/ajax_update_perubahan') ?>";
    }

    $.ajax({
        url: vurl5,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {

            // Pesan berhasil
            berhasil(data.status);
            // Reset Form

            $('#tgl_perubahan2').val('');
            $('#jenis_perubahan2').val('');
            $('#check_spv2').val('');
            $('#check_mgr2').val('');

            // location.reload();
            tabel3.draw();

            if (vurl5 == "<?php echo base_url('C_Rework/ajax_update_perubahan') ?>") {
                $("#modal-perubahan").modal('hide');
            }

        },
        error: function(e) {
            gagal(e);
            //location.reload();
            //error
        }
    });

}

function Delete_data() {
    // Form data
    var fdata = new FormData();
    // Delete by Hdrid
    fdata.append('hdrid', $('#iddelete').text());
    vurl = "<?php echo base_url('C_Rework/ajax_delete') ?>";
    // Post data
    $.ajax({
        url: vurl,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,

        success: function(data) {
            // Hide modal delete
            $('#modal-delete').modal('hide');
            // Delete rows datatables
            $('#example1').DataTable().row("#" + $('#iddelete2').text()).remove().draw();
            // Pesan berhasil
            berhasil(data.status);
        },
        error: function(e) {
            //Pesan Gagal
            gagal(e);
        }
    });

}

function Delete_data_sortir() {

    // Form data
    var fdata = new FormData();

    // Delete by Hdrid
    fdata.append('id_sortir', $('#iddelete3').text());
    // Url Post delete
    vurl2 = "<?php echo base_url('C_Rework/ajax_delete_sortir') ?>";

    // Post data
    $.ajax({
        url: vurl2,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {
            // Hide modal delete
            $('#modal-delete2').modal('hide');
            // Delete rows datatables
            $('#TableSortir').DataTable().row("#" + $('#iddelete4').text()).remove().draw();
            tabel2.ajax.reload();
            berhasil(data.status);
        },
        error: function(e) {
            gagal(e);
        }
    });
}

function Delete_data_perubahan() {
    var fdata = new FormData();
    // Delete by Hdrid
    fdata.append('id', $('#iddelete5').text());
    vurl3 = "<?php echo base_url('C_Rework/ajax_delete_perubahan') ?>";
    // Post data
    $.ajax({
        url: vurl3,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {
            $('#modal-delete3').modal('hide');
            // Delete rows datatables
            $('#TablePerubahan').DataTable().row("#" + $('#iddelete6').text()).remove().draw();
            tabel3.ajax.reload();
            // Pesan berhasil
            berhasil(data.status);
        },
        error: function(e) {
            gagal(e);
        }
    });
}

function Send_mail() {
    vurl = "<?php echo base_url('C_Email/Send_mail') ?>";
    var fdata = new FormData();
    fdata.append('hdrid', 'Hdrid123');
    // Post data
    $.ajax({
        url: vurl,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {},
        error: function(e) {}
    });
}
</script>


<!-- ***************************** Handle Button di datatable (View,edit,delete,row selected) ***************************** -->
<script type="text/javascript">
// function handleRadioChange(event) {
//     var role = event.target.value;
//     var selectElement = document.getElementById('nama_spv');
//     var options = selectElement.options;
//     for (var i = 0; i < options.length; i++) {
//         var option = options[i];
//         if (role === 'qc' && option.value.includes('qc')) {
//             option.style.display = 'block';
//         } else if (role === 'spv' && option.value.includes('mfg')) {
//             option.style.display = 'block';
//         } else {
//             option.style.display = 'none';
//         }
//     }
// }

function handleRadioChange(event) {
    var role = event.target.value;
    if (role === 'QC') {
        document.getElementById('kolom_spv').style.display = 'none';
        document.getElementById('kolom_qc').style.display = 'inline';
    } else if (role === 'MFG') {
        document.getElementById('kolom_qc').style.display = 'none';
        document.getElementById('kolom_spv').style.display = 'inline';
    }


}

//  HDRID selected konfirmasiHapus
$(document).on("click", ".konfirmasiHapus", function() {
    $('#iddelete').text($(this).attr("data-id"));
})

$(document).on("click", ".konfirmasiHapus2", function() {
    $('#iddelete3').text($(this).attr("data-id"));
})

$(document).on("click", ".konfirmasiHapus3", function() {
    $('#iddelete5').text($(this).attr("data-id"));
})

//  HDRID selected  konfirmasiEdit
$(document).on("click", ".konfirmasiEdit", function() {
    view_modal($(this).attr("data-id"), 'Edit');
})

$(document).on("click", ".konfirmasiEdit2", function() {
    view_modal_sortir($(this).attr("data-id"), 'Edit');
})

$(document).on("click", ".konfirmasiEdit3", function() {
    view_modal_perubahan($(this).attr("data-id"), 'Edit');
})

//  HDRID selected  konfirmasiEdit
$(document).on("click", ".konfirmasiView", function() {
    view_modal($(this).attr("data-id"), 'View');
})

$(document).on("click", ".konfirmasiView2", function() {
    view_modal_sortir($(this).attr("data-id"), 'View');
})

$(document).on("click", ".konfirmasiView3", function() {
    view_modal_perubahan($(this).attr("data-id"), 'View');
})

// ID Rows selected
$('#example1').on('click', 'tr', function() {
    $('#iddelete2').text($('#example1').DataTable().row(this).id());
});

$('#TableSortir').on('click', 'tr', function() {
    $('#iddelete4').text($('#TableSortir').DataTable().row(this).id());
});

$('#TablePerubahan').on('click', 'tr', function() {
    $('#iddelete6').text($('#TablePerubahan').DataTable().row(this).id());
});
</script>
<script type="text/javascript">
$('.select2').select2();
</script>
<!-- <script type="text/javascript">
  document.getElementById('btnsubmit2').onclick = function() {
    var select = document.getElementById('multiple');
    var selected = [...select.options]
                      .filter(option => option.selected)
                      .map(option => option.value);
    alert(selected);
  } 
</script> -->

<!-- Handle datatable -->
<script type="text/javascript">
var tabel = null;
var tabel2 = null;
var tabel3 = null;
$(document).ready(function() {
    tabel = $('#example1').DataTable({
        "processing": true,
        "responsive": false,
        "serverSide": true,
        "scrollX": true,
        "ordering": true,
        "order": [
            [0, 'desc']
        ],
        dom: "lfBrtip",
        buttons: [{
                extend: 'excelHtml5',
                className: 'btn btn-info mb-2 w-250',
                text: '<i class="fas fa-file-excel">&nbsp</i> Export Data to Excel',
                exportOptions: {
                    columns: Array.from({
                        length: 23
                    }, (_, i) => i + 1),
                    tables: ['#example1'] // Ganti dengan ID tabel pertama Anda
                },
                customize: function(xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    // Menggunakan jQuery untuk menambahkan border pada setiap sel
                    // $('sheetData', sheet).each(function() {
                    // 	$('row c', this).each(function() {
                    // 		$(this).attr('',
                    // 			'25'
                    // 		); // Mengatur border style ke 25 (Anda dapat mengubah nilai sesuai kebutuhan)
                    // 	});
                    // });
                }
            },
            {
                extend: 'pdfHtml5',
                className: 'btn btn-warning mb-2 w-250',
                text: '<i class="fas fa-file-pdf">&nbsp</i> Export Data to PDF',
                orientation: 'landscape',
                pageSize: 'A4',
                download: 'open'
            }
        ],
        "ajax": {
            "url": "<?= base_url('C_Rework/view_data_where'); ?>", // URL file untuk proses select datanya
            "type": "POST",
            "data": function(data) {
                data.searchByFromdate = $('#search_fromdate').val();
                data.searchByTodate = $('#search_todate').val();
            }

        },
        "deferRender": true,
        "aLengthMenu": [
            [5, 10, 100, 1000, 10000, 100000, 1000000, 1000000000],
            [5, 10, 100, 1000, 10000, 100000, 1000000, "All"]
        ], // Combobox Limit
        "columns": [{
                "data": 'hdrid',
                "sortable": false, //1
                render: function(data, type, row, meta) {
                    // return meta.row + meta.settings._iDisplayStart + 1;
                    // return '<div class="btn btn-success btn-sm konfirmasiView" data-id="' + data + '" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="' + data + '" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="' + data + '" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                    mnu = '';
                    mnu = mnu +
                        '<div class="btn btn-success btn-sm konfirmasiView" data-id="' +
                        data +
                        '" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div>';
                    //Tombol Edit
                    <?php if (!empty($hak_akses)) {
							if ($hak_akses->allow_edit == 'on') { ?>
                    mnu = mnu +
                        <?php if ($this->session->userdata('rolename') !== 'Leader') { ?> '<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="' +
                        data +
                        '" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-check"></i></div>';
                    <?php } else { ?>
                        '<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="' +
                        data +
                        '" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                    <?php } ?>
                    <?php }
						} ?>
                    <?php if (!empty($hak_akses)) {
						if ($hak_akses->allow_delete == 'on') { ?>
                    mnu = mnu +
                        '<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="' +
                        data +
                        '" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
                    <?php }
					} ?>
                    return mnu;

                }
            },

            // ---------------------------------- Datatables Macro Batas sini ---------------------------------

            {
                "data": "hdrid"
            },
            {
                "data": "part_number"
            },
            {
                "data": "part_name"
            },
            {
                "data": "cust_name"
            },
            {
                "data": "cust_name2"
            },
            {
                "data": "problem"
            },
            {
                "data": "occ_place"
            },
            {
                "data": "occ_date"
            },
            {
                "data": "ng_qty"
            },
            {
                "data": "defect_lot"
            },
            {
                "data": "area"
            },
            {
                "data": "sketch1"
            },
            {
                "data": "deskripsi1"
            },
            {
                "data": "sketch2"
            },
            {
                "data": "deskripsi2"
            },
            {
                "data": "skecth3"
            },
            {
                "data": "deskripsi3"
            },
            {
                "data": "checking_method"
            },
            {
                "data": "attach_ik"
            },
            {
                "data": "marking_photo"
            },
            {
                "data": "marking"
            },
            {
                "data": "sortir"
            },
            {
                "data": "perubahan_sortir"
            },
            {
                "data": "request_to"
            },
            {
                "data": "nama_spv"
            },
            {
                "data": "request_by"
            },
            {
                "data": "jabatan_request"
            },
            {
                "data": "checked_by"
            },
            {
                "data": "jabatan_checked"
            },
            {
                "data": "approved_by"
            },
            {
                "data": "jabatan_approved"
            },
        ],


    });

});
tabel2 = $('#TableSortir').DataTable({
    "processing": true,
    "responsive": false,
    "serverSide": true,
    "autowidth": false,
    "info": true,
    "scrollX": true,
    "ordering": true,
    "order": [
        [1, 'desc']
    ],
    "ajax": {
        "url": "<?= base_url('C_Rework/view_data_where_sortir'); ?>",
        "type": "POST",
        "data": function(data) {
            if ($('#hdrid').val() == '') {
                data.hdrid = '<?php echo $this->session->userdata('user_name') ?>';
            } else {
                data.hdrid = $('#hdrid').val();
            }
        }

    },
    "deferRender": true,
    "aLengthMenu": [
        [10, 100, 1000, 10000, 100000, 1000000, 1000000000],
        [10, 100, 1000, 10000, 100000, 1000000, "All"]
    ], // Combobox Limit        
    "columns": [{
            "data": 'id_sortir',
            "sortable": false, //1
            render: function(data, type, row, meta) {
                // return meta.row + meta.settings._iDisplayStart + 1;
                // return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                mnu = '';
                mnu = mnu +
                    '<div class="btn btn-success btn-sm konfirmasiView2" data-id="' +
                    data +
                    '" data-toggle="modal" data-target="#modal-sortir" > <i class="fa fa-eye"></i></div>';

                //Tombol Edit
                <?php if (!empty($hak_akses)) {
						if ($hak_akses->allow_edit == 'on') { ?>
                mnu = mnu +
                    '<div class="btn btn-primary btn-sm konfirmasiEdit2" data-id="' +
                    data +
                    '" data-toggle="modal" data-target="#modal-sortir"> <i class="fa fa-edit"></i></div>';
                <?php }
					} ?>

                //Tombol Delete
                <?php if (!empty($hak_akses)) {
						if ($hak_akses->allow_delete == 'on') { ?>
                mnu = mnu +
                    '<div class="btn btn-danger btn-sm konfirmasiHapus2" data-id="' +
                    data +
                    '" data-toggle="modal" data-target="#modal-delete2" > <i class="fa fa-trash"></i></div>';
                <?php }
					} ?>

                return mnu;
            }
        },

        {
            "data": "id_sortir"
        },
        {
            "data": "part_number"
        },
        {
            "data": "lot_produksi"
        },
        {
            "data": "customer"
        },
        {
            "data": "masalah_stok"
        },
        {
            "data": "masalah_kirim_customer"
        },
        {
            "data": "tgl_berangkat_customer"
        },
        {
            "data": "tgl_datang_customer"
        },
        {
            "data": "masalah_stok_yusen"
        },
        {
            "data": "tgl_berangkat_yusen"
        },
        {
            "data": "tgl_datang_yusen"
        },
        {
            "data": "qty"
        },
        {
            "data": "perlu_info"
        },

    ],
});
// Search button
// $('#search').click(function() {
// 	if ($('#search_fromdate').val() != '' && $('#search_todate').val() != '') {
// 		tabel2.draw();
// 	} else {
// 		gagal("Both Date is Required");
// 	}

// });
// tabel perubahan ajax
tabel3 = $('#TablePerubahan').DataTable({
    // "processing": true,
    "responsive": false,
    "serverSide": true,
    "autowidth": false,
    "info": true,
    "scrollX": true,
    "ordering": true, // Set true agar bisa di sorting
    "order": [
        [5, 'asc']
    ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
    "ajax": {
        "url": "<?= base_url('C_Rework/view_data_where_perubahan'); ?>",
        "type": "POST",
        "data": function(data) {
            if ($('#hdrid').val() == '') {
                data.hdrid = '<?php echo $this->session->userdata('user_name') ?>';
            } else {
                data.hdrid = $('#hdrid').val();
            }
        }

    },
    "deferRender": true,
    "aLengthMenu": [
        [10, 100, 1000, 10000, 100000, 1000000, 1000000000],
        [10, 100, 1000, 10000, 100000, 1000000, "All"]
    ], // Combobox Limit        
    "columns": [{
            "data": 'id',
            "sortable": false, //1
            render: function(data, type, row, meta) {
                mnu = '';
                mnu = mnu +
                    '<div class="btn btn-success btn-sm konfirmasiView3" data-id="' +
                    data +
                    '" data-toggle="modal" data-target="#modal-perubahan" > <i class="fa fa-eye"></i></div>';
                //Tombol Edit
                <?php if (!empty($hak_akses)) {
						if ($hak_akses->allow_edit == 'on') {
					?>
                mnu = mnu +
                    '<div class="btn btn-primary btn-sm konfirmasiEdit3" data-id="' +
                    data +
                    '" data-toggle="modal" data-target="#modal-perubahan"> <i class="fa fa-edit"></i></div>';
                <?php }
					}
					?>

                //Tombol Delete
                <?php if (!empty($hak_akses)) {
						if ($hak_akses->allow_delete == 'on') {
					?>
                mnu = mnu +
                    '<div class="btn btn-danger btn-sm konfirmasiHapus3" data-id="' +
                    data +
                    // '" data-toggle="modal" data-target="#modal-delete2" > <i class="fa fa-trash"></i></div>';
                    '" data-toggle="modal" data-target="#modal-delete3" > <i class="fa fa-trash"></i></div>';
                <?php }
					}
					?>

                return mnu;

            }
        },
        {
            "data": "id"
        },
        {
            "data": "tgl_perubahan"
        },
        {
            "data": "jenis_perubahan"
        },
        {
            "data": "check_spv"
        },
        {
            "data": "check_mgr"
        },

    ],
});
</script>

<script type="text/javascript">
function vreadonly(form, vboolean) {

    // alert(form);

    // var x = $(form).serializeArray();

    // $.each(x, function(i, field){

    //   if(field.name=="hdrid"){
    //     if(vboolean==true){
    //       document.getElementsByName(field.name)[0].readOnly=true;
    //     }else{
    //       document.getElementsByName(field.name)[0].readOnly=false;
    //     }
    //   }
    // });
}
</script>

<script type="text/javascript">
function handleSelectChange_part_number(event) {

    var data = $('#part_number').select2('data')[0].text;

    if (data == '-Select-') {
        $('#part_name').val('');
        partNameValue = '';
    } else {
        var res = data.split("#");
        $('#part_name').val(res[1]);
        partNameValue = res[1];
    };


}

function handleSelectChange_part_number2(event) {

    var data = $('#part_number2').select2('data')[0].text;

    if (data == '-Select-') {
        $('#lot_produksi').val('');
    } else {
        var res = data.split("#");
        $('#lot_produksi').val(res[1]);
    };


}

function handleSelectChange_part_number3(event) {

    var data = $('#part_number3').select2('data')[0].text;

    if (data == '-Select-') {
        $('#lot_produksi2').val('');
    } else {
        var res = data.split("#");
        $('#lot_produksi2').val(res[1]);
    };


}

function handleSelectChange_lot(event) {

    var data = $('#lot_produksi').select2('data')[0].text;

    // if (data == '-Select-') {
    // 	$('#lot_produksi').val('');
    // } else {
    // 	var res = data.split("#");
    // 	$('#lot_produksi').val(res[1]);
    // };


}

function handleSelectChange_cust_name(event) {

    var data = $('#cust_name').select2('data')[0].text;

    if (data == '-Select-') {
        $('#cust_name').val('');
    }


}

function handleSelectChange_spv(event) {

    // var data = $('#nama_spv').select2('data')[0].text;

    // if (data == '-Select-') {
    // 	$('#jabatan_checked').val('');
    // 	$('#checked_by').val('');

    // } else {
    // 	var res = data.split("-");
    // 	$('#jabatan_checked').val(res[0]);
    // 	$('#checked_by').val(res[1]);
    // };


}

function handleSelectChange_qc(event) {

    // var data = $('#nama_qc').select2('data')[0].text;

    // if (data == '-Select-') {
    // 	$('#jabatan_checked').val('');
    // 	$('#checked_by').val('');
    // } else {
    // 	var res = data.split("-");
    // 	$('#jabatan_checked').val(res[0]);
    // 	$('#checked_by').val(res[1]);
    // };


}

function handleSelectChange_section(event) {

    //  By Valueexample
    var selectElement = event.target;
    var value = selectElement.value;
    var res = value.split("-");
    // $('#acc_number').val(res[0]);
    // $('#name').val(res[1]);

}
</script>