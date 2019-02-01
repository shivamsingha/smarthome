<br><div class="container mb-5">
    <div class="row">
        <div class="col-sm">
            <h3 class="display-4">Log</h3>
            <hr class="bg-dark w-25 ml-0">
			  	<br><br><br>
            <div class="form-group">
					<textarea class="form-control logtext" id="log" rows="10">
						<?php
							$file = "log/log";
							echo PHP_EOL.file_get_contents($file);
						?>
					</textarea>
			   </div>
    </div>
</div>
