<br>
<br>
<script src="<?php echo base_url(); ?>assets/js/albums.js" type="text/javascript"></script>
<center>
	<h1>ALBUM LIST</h1>
</center>
<center>
	<div ng-controller="albcr">
		
	
		<table class="table table-striped table-dark table-fixed">
			<thead>
				<tr>
					<th scope="col">Picture</th>
					<th scope="col">Album Name</th>
					<th scope="col">Artist</th>
					<th scope="col">Release Year</th>
				</tr>
			</thead>
			<tbody>
				
				<tr ng-repeat="albm in albums">
					<th scope="row"><a href="<?php echo base_url('albums/edit/')?>{{albm.id}}"><img src="<?php echo base_url('assets/album/')?>{{albm.album_cover}}"  width="50px" height="50px"/></a>
					</th>
					<td>
						<a href="<?php echo base_url('albums/edit/')?>{{albm.id}}">
							{{albm.album_name}}
						</a>
					</td>
					<td>
						{{albm.album_artist}}
					</td>
					<td>
						{{albm.released_year}}
					</td>
					<td>
						<a href="<?php echo base_url('albums/viewRviews/')?>{{albm.id}}" class="btn btn-warning">View Reviews</a>
						
						<button id="{{albm.id}}" class="btn btn-danger delete"data-ng-click="removeAlbum($index,albm.id)" >Remove Album</button>
					
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-album="{{albm.id}}" data-whatever="{{albm.id}}">Review {{albm.album_name}}</button>
					</td>
				</tr>
				
		</table>
		

	</div>

</center>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Review Album</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			
			</div>
			<div class="modal-body">
				<form id="review_form" method="post" action="">
					<div class="form-group">
						<label for="name" class="col-form-label">full Name:</label>
						<input required type="text" name="" class="form-control" id="name">
					</div>
					<div class="form-group">
						<label for="review" class="col-form-label">Review:</label>
						<textarea  required name="review" class="form-control" id="review-text"></textarea>
					</div>
				</form>
					<div style="display: none" class="alert alert-success" id='message'></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary review">Add Review</button>
			</div>
		</div>
	</div>
</div>

