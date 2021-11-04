</div>
</div>
<footer class="footer">
		<div class="w-100 clearfix">
			<span class="text-center text-sm-left d-md-inline-block">Copyright © 2021 <span class="text-red">
					Restoran Kebab. </span> All Rights
				Reserved.</span>
			<span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Dibuat oleh <a class="text-red" href="#" class="text-dark" target="_blank">Restoran Kebab</a></span>
		</div>
</footer>

<script src="<?= base_url() ?>assets/plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/screenfull/dist/screenfull.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/moment/moment.js"></script>
<script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js">
</script>
<script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/d3/dist/d3.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/c3/c3.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/js/tables.js"></script> -->
<script src="<?= base_url() ?>assets/js/myalert.js"></script>
<script src="<?= base_url() ?>assets/js/widgets.js"></script>
<script src="<?= base_url() ?>assets/js/charts.js"></script>
<script src="<?= base_url() ?>assets/dist/js/theme.min.js"></script>
<script src="<?= base_url() ?>assets/js/layouts.js"></script>
<script src="<?= base_url() ?>assets/js/datatables.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!-- SELECT 2 PLUGINS-->
<script src="<?= base_url('assets') ?>/plugins/select2/js/select2.full.min.js"></script>
<script>
	$(function() {
		//Initialize Select2 Elements
		$('.select2').select2();
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		});
	});
</script>

<!-- OUR SCRIPTS -->
<script>
	(function(b, o, i, l, e, r) {
		b.GoogleAnalyticsObject = l;
		b[l] || (b[l] =
			function() {
				(b[l].q = b[l].q || []).push(arguments)
			});
		b[l].l = +new Date;
		e = o.createElement(i);
		r = o.getElementsByTagName(i)[0];
		e.src = 'https://www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e, r)
	}(window, document, 'script', 'ga'));
	ga('create', 'UA-XXXXX-X', 'auto');
	ga('send', 'pageview');
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".js-example-basic-single").select2();
	});
</script>

</body>