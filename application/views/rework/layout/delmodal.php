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
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
