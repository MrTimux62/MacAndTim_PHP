<html>

<div class="modal fade" id="problemeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="problemeModalLabel">Un problème ?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form name="registrationform" action="envoyer.php" method="post">
					<label for="exampleFormControlInput1">Adresse Email</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
					<label for="exampleFormControlTextarea1">Commentaires</label>
					<textarea class="form-control mb-2" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
					<input class="float-end btn btn-success" type="submit" value="Envoyer">
				</form>
			</div>
		</div>
	</div>
</div>

<div id="prob" style="position: absolute; right: 25px ; bottom : 25px; border-radius : 5px; cursor : pointer; z-index : 1001;">
	<button class="btn btn-warning fs-2">Un Problème ?</button>
</div>

</html>