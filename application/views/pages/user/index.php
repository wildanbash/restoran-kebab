<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Data Karyawan</h3>
            </div>
            <div class="card-body">
                <table id="all_data_json" data-toggle="table" data-url="<?php echo base_url('user/get_all_user'); ?>" data-show-refresh="false" data-show-toggle="false" data-show-columns="false" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc" data-toolbar="#toolbar">
                    <thead>
                        <tr>
                            <th data-field="" data-formatter="runningFormatter" data-align="right">No.</th>
                            <th data-field="nama" data-sortable="true">Nama</th>
                            <th data-field="email" data-sortable="true">Email</th>
                            <th data-field="alamat">Alamat</th>
                            <th data-field="jenis_kelamin" data-sortable="true">Jenis Kelamin</th>
                            <th data-field="no_telp" data-sortable="true">No Telepon</th>
                            <th data-field="id_user" data-sortable="true" data-formatter="action">Activity</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function runningFormatter(value, row, index) {
        return index + 1;
    }
</script>